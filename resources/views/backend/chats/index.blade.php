@extends('backend.layouts.app')

@section('title', 'Chat')
@section('content')
    <h3>Chat With Admin</h3>
    <div class="chat-box" id="chat-box"></div>

    <div class="chat-input">
        <input type="text" id="message" placeholder="Type a message..." style="flex:1;">
        <button id="sendBtn">Send</button>
    </div>
@endsection
@section('js')
    <script src="https://cdn.socket.io/4.5.4/socket.io.min.js"></script>
    <script>
        window.ChatConfig = {
            myId: {{ Auth::guard('admin')->check() ? Auth::guard('admin')->id() : Auth::guard('web')->id() }},
            myType: "{{ Auth::guard('admin')->check() ? 'admin' : 'user' }}",
            partnerId: 2,
            partnerType: "user"
        };

        const myId = window.ChatConfig.myId;
        const myType = window.ChatConfig.myType;
        const partnerId = window.ChatConfig.partnerId;
        const partnerType = window.ChatConfig.partnerType;

        // console.log(partnerId);
        const chatBox = document.getElementById('chat-box');
        const msgInput = document.getElementById('message');
        const sendBtn = document.getElementById('sendBtn');

        const socket = io('http://127.0.0.1:3000');
        socket.emit('register', {
            id: myId,
            type: myType
        });

        socket.on('new-message', (msg) => {
            appendMessage(msg, msg.sender_id == myId && msg.sender_type == myType);
        });

        sendBtn.addEventListener('click', sendMessage);
        msgInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendMessage();
        });

        function sendMessage() {
            let message = msgInput.value.trim();
            if (!message) return;
            fetch(`/chat/send/${myType}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        message: document.getElementById('message').value,
                        receiver_id: partnerId,
                        receiver_type: partnerType
                    })
                })
                .then(res => res.json())
                .then(res => {
                    msgInput.value = '';
                    let msg = res.mess;
                    appendMessage(msg, msg.sender_id == myId && msg.sender_type == myType);

                });
        }
        loadMessages();


        function appendMessage(msg, isYou) {
            const div = document.createElement('div');
            div.className = 'msg ' + (isYou ? 'you' : 'other');
            div.textContent = (isYou ? msg.message + ' : ' + msg.sender_type : msg.sender_type + ' : ' + msg.message);
            chatBox.appendChild(div);
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        function loadMessages() {
            fetch(`/chat/fetch/${partnerId}/${partnerType}`)
                .then(res => res.json())
                .then(messages => {
                    // console.log(messages.mess)
                    chatBox.innerHTML = '';
                    messages.mess.forEach(msg => {
                        appendMessage(msg, msg.sender_id == myId && msg.sender_type == myType);
                    });
                });
        }
    </script>
    {{-- <script src="{{ asset('assets/js/frontend.js') }}"></script> --}}

@endsection
