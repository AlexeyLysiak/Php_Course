<?php

namespace App\Model;

class Admin extends AbstractModel
{
  public $menuItems = [
    "column1" => "Home",
    "column2" => "Videos",
    "column3" => "Articles",
    "column4" => "Pictures",
  ];

  public function getItem($item)
  {
    $key = array_search($item, $this->menuItems); 

    if (array_key_exists($key, $this->menuItems)) {
      return $this->menuItems[$key];
    } else {
      return false;
    }
  }

  function getMenuItems() {
    return $this->menuItems;
  }
}
