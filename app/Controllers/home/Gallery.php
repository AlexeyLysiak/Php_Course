<?php 
namespace App\Controllers\home;
use App\Controllers\AbstractController;
use Core\View;

class Gallery extends AbstractController {
  public function index()
  {
    echo "<img src='https://web.informatics.ru/img/php.png' style='width: 200px' alt='Slon'>";  
  }
}