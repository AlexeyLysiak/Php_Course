<?php 
namespace App\Controllers\home;
use App\Controllers\AbstractController;
use Core\View;

class Index extends AbstractController {
  public function index()
  {
    View::View('Index');
  }
}