
function openChatModal() {
    if (window.authCheck) {
        document.getElementById("chatModal").style.display = "block";
    } else {
        window.location.href = window.loginUrl;
    }
}

function closeChatModal() {
    document.getElementById("chatModal").style.display = "none";
}

// Optional: close modal when clicking outside of it
window.onclick = function (event) {
    let modal = document.getElementById("chatModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

const myId = window.ChatConfig.myId;
const myType = window.ChatConfig.myType;
const partnerId = window.ChatConfig.partnerId;
const partnerType = window.ChatConfig.partnerType;

// console.log(partnerId);
const chatBox = document.getElementById('chat-box');
const msgInput = document.getElementById('message');
const sendBtn = document.getElementById('sendBtn');

const socket = io('http://127.0.0.1:3000');
socket.emit('register', { id: myId, type: myType });

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
            console.log(messages.mess)
            chatBox.innerHTML = '';
            messages.mess.forEach(msg => {
                appendMessage(msg, msg.sender_id == myId && msg.sender_type == myType);
            });
        });
}
loadMessages();
