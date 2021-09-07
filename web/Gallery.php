<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1 class="title">Gallery Page</h1>
  
  <ul class="gallery">
    <?php foreach($data as $key=>$value): ?>
      <li class="img-wrap">
        <img src="<?=$value?>" alt="<?=$key?>">
      </li>
    <?php endforeach; ?>
  </ul>
  
  <style>
    body {
      background-color: brown;
      color: #fff;
      font-family: sans-serif;
    }
    .gallery {
      display: flex;
      list-style: none;
      align-items: center;
      justify-content: center;
    }
    .img-wrap {
      margin-right: 10px;
      /* width: 200px; */
    }
    .img-wrap:last-child {
      margin-right: 0px;
    }
    .img-wrap img {
      width: 100%;
      height: auto;
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