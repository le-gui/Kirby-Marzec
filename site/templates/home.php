
<main id="viewport" class="zoomViewport">
<?php snippet('header') ?>
  <div class="zoomContainer">

  <?php if ($workPage = page('work')): ?>
  <?php foreach ($workPage->children()->listed() as $project): ?>




    <div class="project"
      id="<?= $project->uid() ?>"
    >





      <div class="project__gallery">
      <?php foreach ($project->images() as $image): ?>
        <div class="zoomTarget item
          <?php
            switch ($image->fat()) {
              case 'xs': echo 'xsmall';
              break;
              case 's': echo 'small';
              break;
              case 'm': echo 'medium';
              break;
              case 'l': echo 'large';
              break;
              case 'xl': echo 'xlarge';
              break;
              case 'xxl': echo 'xxlarge';
              break;
            }
          ?>
        ">
          <img
            src="<?= $image->thumb(['width' => 600, 'quality' => 80 ])->url(); ?>"
            data-src="<?= $image->url() ?>"
            alt="<?= $image->alt()->html() ?>"
            class="lazy"
          >
        </div>
      <?php endforeach ?>
      </div>
      <div class="project__info">
        <?php if ($project->headline()->isNotEmpty()): ?>
          <p><?= $project->headline()->html() ?></p>
        <?php endif ?>
        <?php if ($project->credits()->isNotEmpty()): ?>
          <p><?= $project->credits()->html() ?></p>
        <?php endif ?>
      </div>
    </div>
  <?php endforeach ?>
  <?php endif ?>

  <?php snippet('about') ?>

  </div>
</main>

<?php snippet('footer') ?>
