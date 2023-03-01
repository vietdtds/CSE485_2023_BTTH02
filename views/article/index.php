<main class="container-fluid mt-3">
  <h3 class="text-center text-uppercase mt-3 mb-4 text-secondary fs-2">TOP bài hát yêu thích</h3>
  <div class="row gy-3">
    <?php
    foreach($articles as $article) { ?>
      <div class="col-sm-3">
        <div class="card mb-2" id="card" style="width: 100%;">
          <img src=<?= '/assets/images/songs/'. $article->get_image() ?> class="card-img-top" id="cardImg" alt="Hình ảnh minh họa">
          <div class="card-body">
            <h5 class="card-title text-center">
              <a href="./detail.php?ma_bviet=<?= $article->get_id() ?>" class="text-decoration-none text-dark" id="cardTitle">
                <?= $article->get_title() ?>
              </a>
            </h5>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</main>