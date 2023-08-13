<?php
$mangas = $result["data"]["derive"];
// var_dump($mangas);

foreach ($mangas as $derive) {

  ?>

  <h1 class="p-3 primetitle text-light">
    <?= $derive->getName() ?>
  </h1>

  <div class="container text-center mangasdetail">
    <div class="row">
      <div class="col detail"><img src="public/img/<?= $derive->getImg() ?>" class="img-fluid"></div>
      <div class="col detail">
        <div>Sortie le :
          <?= $derive->getReleaseDate() ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col detail">
        <section>
          <div>
            <h2>Synopsis</h2>
          </div>
          <div>
            <?= $derive->getStory() ?>
          </div>
        </section>
      </div>
    </div>
  </div>
  <?php
}

$title = $derive->getName();

?>