<?php 
namespace App\Controllers;
use App\Controllers\AbstractController;
use Core\View;


class Page404 extends AbstractController{
  public function index()
  {
    View::View('Page404');
  }
}