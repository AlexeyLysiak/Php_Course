<?php 
namespace App\Controllers;

class Notfound {
  public function __construct()
  {
    print_r('<h1 style="text-align: center; color: red;">404: Not Found</h1>');
  }
}