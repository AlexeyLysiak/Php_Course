<?php
namespace App\Model;

class Index extends AbstractModel
{
  public $indexLabels = [
    "header" => "NewYork times",
    "description" => "We tell news for you",
    "copyright" => "&copy; NY times",
  ];

  public function getIndexArr()
  {
    return $this->indexLabels;
  }
}