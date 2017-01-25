<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <style type="text/css">
    body, html { height: 100% }
    body {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    </style>
  </head>
  <body>
    <form action="/avatars" method="POST">
      {{ csrf_field() }}

      <input type="file" name="avatar"></input>

      <button type="submit">Save Avatar</button>


    </form>
  </body>
</html>
