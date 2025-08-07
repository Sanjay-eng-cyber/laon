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
    public function index()
    {
        $users = User::get();
        return view('backend.chats.index', compact('users'));
    }

    public function messageSend(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                // 'message' => 'Validation failed.',
                'errors' => $validator->errors()
            ], 422);
        }
        $admin = Auth::guard('admin')->user();
        $user = Auth::guard('web')->user();

        $senderType = $user ? 'user' : 'admin';

        $message = new Message();
        $message->user_id = $user->id ?? $request->user_id;
        $message->admin_id = $admin->id ?? null;
        $message->sender_type = $senderType;
        $message->message = $request->message;
        if ($message->save()) {
            broadcast(new AdminUserChatEvent($message))->toOthers();
            return response()->json([
                'success' => true,
                'message' => 'Message Sent Successfully.',
                'mess' => $message->message,
            ], 200);
        }
    }
}
