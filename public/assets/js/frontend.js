
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

document.querySelector('#chatBtn').addEventListener('click', function (e) {
    e.preventDefault();

    let message = document.getElementById('message').value;
    let messageError = document.getElementById('mesaageError');
    const csrfToken = '{{ csrf_token() }}';

    fetch('/chat/store', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            message
        })
    })
        .then(res => res.json())
        .then(res => {
            if (res.success) {
                let msgBox = document.getElementById('messageDiv');
                let newMsg = document.getElementById('userMessagePara');
                newMsg.innerText = document.getElementById('message').value;
                msgBox.appendChild(newMsg);
                document.getElementById('message').value = '';
                msgBox.scrollTop = msgBox.scrollHeight; // auto-scroll to bottom
            } else {
                messageError.innerText = res.errors.message[0];
            }
        })
        .catch(error => {
            console.error('Fetch Error:', error);
        });
});