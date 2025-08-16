// node-server/server.js
const express = require('express');
const app = express();
const http = require('http').createServer(app);
const io = require('socket.io')(http, {
    cors: { origin: "*" }
});

app.use(express.json());

let connectedUsers = {};

io.on('connection', socket => {
    console.log('Connected:', socket.id);

    socket.on('register', ({ id, type }) => {
        connectedUsers[`${type}-${id}`] = socket.id;
        console.log(`${type} ${id} registered`);
    });

    socket.on('disconnect', () => {
        for (let key in connectedUsers) {
            if (connectedUsers[key] === socket.id) {
                delete connectedUsers[key];
                break;
            }
        }
        console.log('Disconnected:', socket.id);
    });
});

app.post('/new-message', (req, res) => {
    const msg = req.body;
    const receiverSocketId = connectedUsers[`${msg.receiver_type}-${msg.receiver_id}`];
    if (receiverSocketId) {
        io.to(receiverSocketId).emit('new-message', msg);
    }
    res.sendStatus(200);
});

http.listen(3000, () => {
    console.log('Socket.IO server running on port 3000');
});
