<div class="about" id="about">
  <img src="<?= $site->url() ?>/assets/logo.svg" alt="<?= $site->title() ?>" />
  <?= $site->page('about')->text()->kirbytext() ?>
  <p>Contact</p>
  <p>
    <a href="<?= $site->page('about')->email()->html() ?>" target="_blank">
      <?= $site->page('about')->email()->html() ?>
    </a>
  </p>
  <p>Inquiries</p>
  <p>
    <a href="<?= $site->page('about')->inquiries()->html() ?>" target="_blank">
      <?= $site->page('about')->inquiries()->html() ?>
    </a>
  </p>
  <p>
    <a href="<?= $site->page('about')->instagram()->html() ?>" target="_blank">
      Instagram
    </a>
  </p>
  <p>
    <a href="http://maps.google.com/?q=<?= $site->page('about')->address()->html() ?>" target="_blank">
      <?= $site->page('about')->address()->html() ?>
    </a>
  </p>
</div>