 
var express = require("express");
 var mysql= require('mysql');
 var app = express();
  var connection = mysql.createConnection({
  host :'localhost',
  user   :'root',
  password: '',
  database :'users(1)'
  });

  pool.getConnection(function(err , connection){
   connection.query('select * from users',function(err,rows){
   connection.release();
   });
  });

  pool.on('connection', function(connection){
  console.log("Connected");
  });

  pool.end(function(err)
  {});

   var server = app.listen(3360, function(){
      console.log('listen to port 3360');
   });
