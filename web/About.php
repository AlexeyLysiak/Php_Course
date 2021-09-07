<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1 class="articleTitle"><?= $data['title'] ?></h1>
  <div class="articleDescription"><?= $data['description'] ?></div>

  <style>
    body {
      background-color: brown;
      color: #fff;
      font-family: sans-serif;
    }
    .articleDescription {
      text-align: center;
      
    }
    h1 {
      text-align: center;
      margin: 0;
      font-weight: 500;
      text-transform: uppercase;
      margin-bottom: 10px;
    }
  </style>
</body>
</html>