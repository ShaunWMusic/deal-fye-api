<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <style type="text/css">
    body, html { height: 100%; }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    </style>
  </head>
  <body class="container">

    <form  method="POST" action="/avatars" enctype="multipart/form-data">
      {{ csrf_field() }}

      <input type="file" name="avatar"></input>


      <button type="submit">Save Avatar</button>
    </form>


  </body>
</html>
