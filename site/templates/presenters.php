<? snippet('header') ?>

<main>
  <section class="intro">
    <article>
      <h2><?= $page->title()->html() ?></h2>
    </article>
  </section>

  <section class="presenter-list">
    <article>
      <div class="column full">
        <ul>
          <? foreach ( $presenters as $presenter ) { ?>
            <li><?= $presenter->title()->kirbytext() ?>

              <?= $presenter->bio()->kirbytext() ?>

              <?= $presenter->website()->kirbytext() ?>

              <?= $presenter->contact()->kirbytext() ?></li>
          <? } ?>
        </ul>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
