<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    body{
      background-color: #eee;
      font-family: sans-serif;
    }
    .container {
      background-color: white;
      border-radius: 10px;
      box-shadow: 5px 5px 5px rgba(0, 0, 0, .05);
      width: 80%;
      min-height: 100vh;
      overflow: hidden;
      margin-left: auto;
      margin-right: auto;
      position: relative;
    }
    .title{
      width: 100%;
      background-color: #e71d36;
      color: white;
      position: absolute;
      top: 0;
    }
    h1{
      text-align: center;
      font-size: 18px;
    }
    .contenido{
      margin-top: 4rem;
      padding-left: 1rem;
    }
    .title-contenido{
      font-weight: bold;
    }
    footer{
      width: 100%;
      position: absolute;
      bottom: 0;
      background-color: #021f37;
      color: white;
      text-align: center;
    }
    footer h2{
      font-size: 16px;
    }
    footer p{
      font-size: 12px;
    }
    footer a{
      color: white;
      font-size: 11px;
    }

  </style>
</head>
<body>
  
  <div class="container">
    <div class="title">
      <h1>Emmanuel Portfolio</h1>
    </div>

    <div class="contenido">
      <p><span class="title-contenido">Name:</span> {{ $contact['name'] }}</p>
      <p><span class="title-contenido">Email:</span> {{ $contact['email'] }}</p>
      <p><span class="title-contenido">Message:</span> {{ $contact['message'] }}</p>
    </div>

    <footer>
      <h2>Emmanuel Portfolio</h2>
      <p>Do your best</p>
      <a href="http://emmanuelovares.com/">www.emmanuelovares.com</a>
    </footer>
  </div>

</body>
</html>