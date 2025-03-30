const express = require('express');
const app = express();
const server = require('http').createServer(app);
const io = require('socket.io')(server, { cors: { origin: '*' } });

io.on('connection', (socket) => {
    console.log('User connected:', socket.id);

    socket.on('add-to-cart', (data) => {
        console.log('Item ditambahkan:', data);
        io.emit('cart-updated', data);
    });

    socket.on('disconnect', () => {
        console.log('User disconnected:', socket.id);
    });
});

server.listen(5000, () => console.log('Node.js server running on port 5000'));
