var app = require('express')();
var express = require("express");

var http = require('http').Server(app);
var io = require('socket.io')(http);

app.use(express.static('public'));

var port = process.env.PORT || '3000';

app.get('/', function(req, res){
  res.sendFile(__dirname + '/index.html');
});

// If the server receives "connection" event.
io.on('connection', function(socket){
 
  //var msg = 'user connected';
  //socket.broadcast.emit('chat message', msg);
  console.log('user connected');
  
  socket.on('chat message', function(msg){
    console.log('message: ' + msg);
	//io.emit('chat message', msg);
	socket.broadcast.emit('chat message',msg );

  });

  
  socket.on('disconnect', function(){
	console.log('user disconnected');
  });

});

http.listen( port, function(){
  console.log('listening on *:3000');
});
