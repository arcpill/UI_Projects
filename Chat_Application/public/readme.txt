**************** If running on local ****************
Server.js 

Use 
var port = 3000 
instead of 
var port = process.env.PORT || '3000';

index.html

Change URL to local
var url = 'https://ap17527-nodejs.herokuapp.com/indexChat.html' + '?User='+name;


**************** Other details *********************

style.css - used for indexChat.html
styleLogin.css - use for index.html
