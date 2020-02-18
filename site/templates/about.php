<?php snippet('header') ?>

<main>
    <?php snippet('intro') ?>

  <div class="layout">
    <aside>
      <section>
        <h2>Email</h2>
        <div class="text">
          <?= html::email($page->email()) ?>
        </div>
      </section>
    </aside>
  </div>
</main>

<?php snippet('footer') ?>
