<?php 
namespace App\Model;

class About extends AbstractModel {

  public $news = [
    "paper" => "News Paper",
    "title" => "Afgan is free",
    "description" => "US Army left Afgan one week ago",
  ];
  
  public function getNews($article)
  {
   if (array_key_exists($article, $this->title)) {
     return $this->news[$article];
   } else {
     return false;
   }
  }


  public function getListInfo()
  {
    return $this->news;
  }
}