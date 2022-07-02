var http = require('http');
var server = http.createServer(function(req,res){
    res.end("Hi selamat datang di server node js");
});

server.listen('8000');
console.log("server ini running di localhost:8000");