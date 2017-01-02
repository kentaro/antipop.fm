<?php
$this->layout("layout", [
  "config" => $config,
  "page"   => $page,
]);
?>

<section class="episodes">
  <h2><?= $page->metadata()["title"] ?></h2>
  <?= $page->content() ?>
</section>
