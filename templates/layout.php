<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title><?= $config->site_title() - $page->metadata()["title"] ?></title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1><a href="./"><?= $config->site_title() ?></a></h1>
        <ul>
          <li><a class="page-link" href="http://antipop.fm/feed">RSS</a></li>
          <li><a class="page-link" href="https://itunes.apple.com/jp/podcast/antipop.fm/id1062624307">iTunes</a></li>
        </ul>
      </div>
      <div class="body">
        <?= $this->section("content") ?>
      </div>
      <div class="footer">
        <a href="http://kentarok.org">Kentaro Kuribayashi</a>.
      </div>
    </div>
  </body>
</html>