<?php 
namespace App\Controllers;

class About {
  public function __construct()
  {
    print_r("<div style='display: flex; flex-direction: column;'><a href='about/sayName'>Show Name</a><a href='about/sayAge'>Show Age</a></div>");
  }
  public function sayName()
  {
    print_r('<div style="color: #006400; font-size: 20px; font-weight: bold;">Alexey Lysiak</div>');
  }
  public function sayAge()
  {
    print_r('<div style="color: #006400; font-size: 20px; font-weight: bold;">24 years old</div>');
  }
}