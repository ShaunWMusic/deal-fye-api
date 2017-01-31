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
    a {
          color: #636b6f;
          padding: 0 25px;
          font-size: 12px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
    }
    </style>
  </head>
  <body>
    <a href="/">Home</a>
    <form action="/avatars" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <input type="file" name="avatar"></input>

      <button type="submit">Save Avatar</button>


    </form>

  </body>
</html>
