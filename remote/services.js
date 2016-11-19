// server.js
var path = require('path');
var jsonServer = require('json-server');
var server = jsonServer.create();
var router = jsonServer.router(path.join(__dirname, 'services.json'));
var middlewares = jsonServer.defaults();

server.use(middlewares);
server.use(router);
server.listen(4000, function () {
    console.log('JSON Server is running')
});