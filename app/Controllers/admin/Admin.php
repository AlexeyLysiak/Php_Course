<?php 
namespace App\Controllers\admin;

use App\Controllers\AbstractController;
use Core\View;

class Admin extends AbstractController {
  public function index()
  {
    View::View('Admin');
  }
}