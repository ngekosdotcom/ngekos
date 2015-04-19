var express = require('express');
var app = express();
var socket = require('socket.io');
var server = app.listen(3000);
var io = socket.listen(server);
var async = require('async');
var mysql= require('mysql');
var pool  = mysql.createPool({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database:'ngekos',
});

var chatserver=require('./chatserver.js');
var chatpage=io.of('/berandaA').authorization(function (handshakeData, callback) {
  console.dir(handshakeData);
  handshakeData.page = 'pesanA';
  callback(null, true);
}).on('connection', function (socket) {
  console.dir(socket.handshake.page);
  chatserver.getUserFeeds(chatpage,socket,io,pool,async);
});