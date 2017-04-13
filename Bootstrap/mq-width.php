<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Media queries - Chapter 03</title>
   <style>
   body { text-align: center; }
   iframe { border: none; }
   @media (max-width: 480px) {
      iframe {
         display: block;
         margin: 0 auto 1em;
      }
   }
   </style>
</head>
<body>
   <iframe src="mq-hello.html" height="600" 
              scrolling="no" width="400"></iframe>
   <iframe src="mq-hello.html" height="650" 
              scrolling="no" width="350"></iframe>
   <iframe src="mq-hello.html" height="600" 
              scrolling="no" width="450"></iframe>
</body>
</html>
