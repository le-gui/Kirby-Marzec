<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title() ?></title>
  <?= css(['assets/dist/style.css', '@auto']) ?>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.zoomooz-helpers.js"></script>
  <script type="text/javascript" src="assets/js/jquery.zoomooz-anim.js"></script>
  <script type="text/javascript" src="assets/js/jquery.zoomooz-core.js"></script>
  <script type="text/javascript" src="assets/js/jquery.zoomooz-zoomTarget.js"></script>
  <script type="text/javascript" src="assets/js/jquery.zoomooz-zoomButton.js"></script>
  <script type="text/javascript" src="assets/js/jquery.zoomooz-zoomContainer.js"></script>
  <script type="text/javascript" src="assets/js/purecssmatrix.js"></script>
  <script type="text/javascript" src="assets/js/sylvester.src.stripped.js"></script>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li class="link__nav">
          <a href="mailto:<?= $site->page('about')->inquiries()->html() ?>">
            <?= $site->page('about')->email()->html() ?>
          </a>
        </li>
        <li class="link__nav">Stylist</li>
        <li class="link__nav">
          <a id="about-nav" href="#">
            About
          </a>
        </li>
        <li id="overview-nav" class="link__nav">Overview;</li>
        <?php if ($workPage = page('work')): ?>
          <?php foreach ($workPage->children()->listed() as $project): ?>
            <li class="link__project">
              <a href="#"
                id="to<?= $project->uid() ?>"
              >
                <?= $project->title()->html() ?>
              </a>
            </li>
          <?php endforeach ?>
        <?php endif ?>
      </ul>
    </nav>
  </header>
