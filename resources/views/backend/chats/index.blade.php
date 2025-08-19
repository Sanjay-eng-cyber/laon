@extends('backend.layouts.app')
@section('title', 'Messages')
@section('content')
    <div class="row layout-top-spacing m-0 pa-padding-remove">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center mb-1 ">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <legend class="h4">
                                Messages
                            </legend>
                        </div>

                        <div class="col-lg-8 col-md-12 col-sm-12 mb-2 d-flex justify-content-end align-it mt-2 px-4 ">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Messages</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statbox widget box box-shadow temp-index">
                <div class="">
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive min-height-20em">
                            <table class="table mb-4">
                                <thead>
                                    <tr>
                                        <th>Sr no.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>{{ tableRowSrNo($loop->index, $users) }}</td>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown custom-dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                        <a class="dropdown-item" href="javascript:void(0)"
                                                            onclick="openChatModal({{ $user->id }}, 'user', '{{ $user->name }}')">Chat
                                                            With
                                                            {{ ucwords($user->name) }}</a>
                                                        {{-- <a class="dropdown-item"
                                                            href="{{ route('cms.cities.edit', $user->id) }}">Edit</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('cms.cities.delete', $user->id) }}"
                                                            onclick="return confirm('Are you sure you want delete this City?');">Delete</a> --}}
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="text-md-center">
                                            <td colspan="3">No records found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination col-lg-12 mt-3">
                            <div class=" text-center mx-auto">
                                <ul class="pagination text-center">
                                    {{ $users->appends(Request::all())->links('pagination::bootstrap-4') }}
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Chat Modal -->
            <div id="chatModal" class="chat-modal">
                <div class="chat-modal-content">
                    <span class="close" onclick="closeChatModal()">&times;</span>
                    <h3>Chat With {{ $user->name }}</h3>
                    <div class="chat-box" id="chat-box"></div>

                    <div class="chat-input">
                        <input type="text" id="message" placeholder="Type a message..." style="flex:1;">
                        <button id="sendBtn">Send</button>
                    </div>

                </div>
            </div>
        @endsection
        @section('js')
            <script src="https://cdn.socket.io/4.5.4/socket.io.min.js"></script>
            <script>
                window.ChatConfig = {
                    myId: {{ Auth::guard('admin')->check() ? Auth::guard('admin')->id() : Auth::guard('web')->id() }},
                    myType: "{{ Auth::guard('admin')->check() ? 'admin' : 'user' }}",
                    // partnerId: 2,
                    // partnerType: "user"
                };

                const myId = window.ChatConfig.myId;
                const myType = window.ChatConfig.myType;
                // const partnerId = window.ChatConfig.partnerId;
                // const partnerType = window.ChatConfig.partnerType;

                // console.log(partnerId);
                const chatBox = document.getElementById('chat-box');
                const msgInput = document.getElementById('message');
                const sendBtn = document.getElementById('sendBtn');
                let partnerId = null;
                let partnerType = null;

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

                function openChatModal(id, type, name) {
                    let capName = name.charAt(0).toUpperCase() + name.slice(1).toLowerCase();
                    partnerId = id;
                    partnerType = type;
                    document.getElementById("chatModal").style.display = "block";
                    document.querySelector("#chatModal h3").innerText = "Chat With " + capName;

                    // Har baar naye user select karne par chat messages reload karo
                    loadMessages();
                }

                function closeChatModal() {
                    document.getElementById("chatModal").style.display = "none";
                }

                // Optional: close modal when clicking outside of it
                window.onclick = function(event) {
                    let modal = document.getElementById("chatModal");
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

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
                // loadMessages();


                function appendMessage(msg, isYou) {
                    const div = document.createElement('div');
                    div.className = 'msg ' + (isYou ? 'you' : 'other');
                    div.textContent = (isYou ? msg.message + ' : ' + 'you' : msg.sender_type + ' : ' + msg.message);
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
        @endsection
