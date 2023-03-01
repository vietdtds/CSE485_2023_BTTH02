<?php 
require_once('./configs/DBconnect.php');
require_once('./models/Article.php');
require_once('./services/ArticleService.php');
class ArticleService{
  public function getAllArticle(){
    $conn = connectDB();
    $sql = 'SELECT * FROM baiviet';
    $stsm = $conn->query($sql);
    $data = $stsm->fetchAll();
    $articles = [];
    $index = 0;
    foreach ($data as $row) {
      $article = new Article($row['ma_bviet'], $row['tieude'], $row['ten_bhat'], $row['tomtat'], $row['noidung'],$row['ngayviet'], $row['hinhanh']);
      array_push($articles, $article);
    }

    return $articles;
  }

  public function getSingleArticle($id){
    $article =[];

    return $article;
  }
}
