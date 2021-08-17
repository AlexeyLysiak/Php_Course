<?php 
namespace App\Controllers;

class Index {
  public function __construct()
  {
    print_r("<div style='display: flex; flex-direction: column;'><a href='gallery'>Gallery</a><a href='about'>About</a></div>");
  }
}