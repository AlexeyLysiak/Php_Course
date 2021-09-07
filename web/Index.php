<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header class="header"><?= $data["header"]?></header>
  <div class="description"><?= $data["description"]?></div>
  <div class="copyright"><?= $data["copyright"]?></div>
  <style>
    body {
      background-color: brown;
      color: #fff;
      font-family: sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    .copyright {
      margin-top: 100%;
    }
    .description {
      font-size: 24px;
      font-weight: 500;
    }
    .header {
      text-align: center;
      font-size: 36px;
      font-weight: 700;
      margin: 0;
      font-weight: 600;
      text-transform: uppercase;
      margin-bottom: 10px;
    }
  </style>
</body>
</html>