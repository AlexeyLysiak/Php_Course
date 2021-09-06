<?php 
namespace App\Controllers\home;

use App\Controllers\AbstractController;
use Core\View;

class About extends AbstractController {
  public function index()
  {
    $arr = [
      "1st_key"=> 1, 
      "2nd_key"=> 2, 
      "3th_key"=> 3, 
    ];
    View::View('About', $arr);
  }
}