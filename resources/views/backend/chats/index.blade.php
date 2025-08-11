@extends('backend.layouts.app')

@section('title', 'Chat')
@section('content')
    <div class="chat-container">
        <!-- User List Sidebar -->
        <div class="user-list">
            <div class="p-4 font-bold">Users</div>
            @foreach ($users as $chatUser)
                <a href="{{ route('cms.chats', ['user_id' => $chatUser->id]) }}"
                    class="user {{ request('user_id') == $chatUser->id ? 'active' : '' }}">
                    {{ $chatUser->name ?? 'Guest ' . $chatUser->id }}
                </a>
            @endforeach
        </div>

        @php
            $currentUser = $users->where('id', request('user_id'))->first();
        @endphp
        <!-- Chat Messages -->
        @if ($currentUser)
            <div class="chat-box">
                <div class="chat-header">
                    Chat with
                    @if ($currentUser)
                        {{ $currentUser->name ?? 'User #' . $currentUser->id }}
                        @php
                            $messages = \App\Models\Message::where('user_id', $currentUser->id)->get();
                        @endphp
                    @else
                        <span style="color:red;">Invalid or missing user</span>
                        @php $messages = []; @endphp
                    @endif
                </div>

                <div class="chat-messages">
                    @if ($messages->count())
                        @foreach ($messages as $msg)
                            <div class="message {{ $msg->sender_type == 'user' ? 'user-message' : 'admin-message' }}">
                                {{ $msg->message }}
                            </div>
                        @endforeach
                    @else
                        <p style="text-align:center; color: #888;" id="noMessage">No messages yet</p>
                    @endif
                </div>

                <form class="chat-form">
                    @csrf
                    <input type="hidden" id="user_id" name="user_id" value="{{ request('user_id') }}">
                    <input type="text" id="input_message" name="message" placeholder="Type your message..." required>
                    <button type="submit" id="chatBtn">Send</button>
                </form>
        @endif
    </div>
    </div>
@endsection
@section('js')
    <script>
        document.querySelector('#chatBtn').addEventListener('click', function(e) {
            e.preventDefault();
            let message = document.getElementById('input_message').value;
            let user_id = document.getElementById('user_id').value;
            // console.log(inputMessage);
            const csrfToken = '{{ csrf_token() }}';

            fetch('/chat/store', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        message,
                        user_id
                    })
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        const msgBox = document.querySelector('.chat-messages');
                        const noMessage = document.getElementById('noMessage');
                        if (noMessage) {
                            noMessage.remove();
                        }
                        // Create message div
                        const newMsg = document.createElement('div');
                        newMsg.classList.add('message');
                        newMsg.classList.add(res.mess.sender_type === 'user' ? 'user-message' :
                            'admin-message');
                        newMsg.innerText = res.mess;

                        msgBox.appendChild(newMsg);

                        // Clear input
                        document.getElementById('input_message').value = '';
                        document.getElementById('noMessage').value = '';

                    }
                })
            // .catch(error => {
            //     console.error('Fetch Error:', error);
            // });
        });
    </script>
@endsection
