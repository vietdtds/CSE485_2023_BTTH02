<?php
require('./services/ArticleService.php');
class HomeController
{
  public function index()
  {
    $articleService = new ArticleService();
    $articles = $articleService->getAllArticle();

    include('./views/layout/header.php');
    include('./views/layout/sliders.php');
    include('./views/article/index.php');
    include('./views/layout/footer.php');
  }
}
