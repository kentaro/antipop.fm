<?php
$this->layout("layout", [
  "config" => $config,
  "page"   => $page,
]);
?>

<?php
  usort($pages, function($a, $b) {
    return $a->path() < $b->path();
  });

  foreach ($pages as $page) :
  if ($page->path() == "index") continue;
?>
  <section class="episodes">
    <h2><a href="<?= $page->path() ?>"><?= $page->metadata()["title"] ?></a></h2>
    <?= explode("</p>", $page->content())[0] ?>
  </section>
<?php endforeach; ?>
