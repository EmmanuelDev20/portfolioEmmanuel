<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    h1{
      background-color: tomato;
    }
  </style>
</head>
<body>
  <h1>Correo Electronico</h1>
  <p>Este es el primer correo</p>

  <p>Name: {{ $contact['name'] }}</p>
  <p>Email: {{ $contact['email'] }}</p>
  <p>Message: {{ $contact['message'] }}</p>
</body>
</html>