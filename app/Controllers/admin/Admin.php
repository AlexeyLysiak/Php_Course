<?php 
namespace App\Controllers\admin;

use App\Controllers\AbstractController;
use Core\View;
use App\Model\Admin as AdminModel;

class Admin extends AbstractController {

  
  public function index()
  {
    $modelObj = new AdminModel();
    $resultModelFunc = $modelObj->getMenuItems();
    
    View::View('Admin', $resultModelFunc);
  }
}