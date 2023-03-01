<?php 
include ('./configs/DBconnect.php');
class ArticleController{
  public function detailArticle(){
    
    include('./views/article/detail.php');
  }
}

?>