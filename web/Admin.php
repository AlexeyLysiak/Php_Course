<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1 class="title">Admin's Panel</h1>

  <ul class="tabs">
    <?php foreach($data as $key=>$value): ?>
      <li class="tab">
        <a href="#<?=$value?>">
          <?=$value?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

  <style>
    body {
      background-color: brown;
      color: #fff;
      font-family: sans-serif;
    }
    div, h1 {
      text-align: center;
      margin: 0;
    }
    ul {
      display: flex;
      list-style: none;
    }
    .tab {
      margin-right: 10px;
    }
    .tab:last-child {
      margin-right: 0px;
    }
    h1 {
      font-weight: 500;
      text-transform: uppercase;
      margin-bottom: 10px;
    }
  </style>
</body>
</html>