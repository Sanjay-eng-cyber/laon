<?php

namespace App\Http\Controllers\frontend;

use App\Events\AdminUserChatEvent;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserAdminChatController extends Controller
{
    public function fetch($partnerId, $partnerType)
    {
        $myType = Auth::guard('admin')->check() ? 'admin' : 'user';
        $myId = Auth::guard('admin')->check() ? Auth::guard('admin')->id() : Auth::guard('web')->id();

        $messages = Message::where(function ($q) use ($myId, $myType, $partnerId, $partnerType) {
            $q->where('sender_id', $myId)
                ->where('sender_type', $myType)
                ->where('receiver_id', $partnerId)
                ->where('receiver_type', $partnerType);
        })
            ->orWhere(function ($q) use ($myId, $myType, $partnerId, $partnerType) {
                $q->where('sender_id', $partnerId)
                    ->where('sender_type', $partnerType)
                    ->where('receiver_id', $myId)
                    ->where('receiver_type', $myType);
            })
            ->orderBy('id')
            ->get();

        return response()->json([
            'success' => true,
            'mess' => $messages
        ]);
    }


    public function send(Request $request, $fromType)
    {
        $request->validate([
            'message' => 'required|string',
            // 'admin_id' => 'nullable|integer',
            // 'user_id' => 'nullable|integer'
        ]);

        $senderId = $fromType === 'admin'
            ? Auth::guard('admin')->id()
            : Auth::id();

        $receiverId = $fromType === 'admin'
            ? $request->sender_id
            : $request->receiver_id;
        $receiverType = $fromType === 'admin' ? 'user' : 'admin';

        $message = Message::create([
            'sender_id' => $senderId,
            'sender_type' => $fromType,
            'receiver_id' => $receiverId,
            'receiver_type' => $receiverType,
            'message' => $request->message
        ]);
        // dd($message);
        // Send to Node.js
        $this->emitToNode($message);

        return response()->json([
            'success' => true,
            'mess' => $message
        ]);
    }

    protected function emitToNode($message)
    {
        $ch = curl_init('http://127.0.0.1:3000/new-message');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
    }
}
