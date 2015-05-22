<? snippet('header') ?>

<main>
  <section class="intro">
    <article>
      <h2><?= $page->title()->html() ?></h2>
    </article>
  </section>

  <section class="presenter-list">
    <article>
      
        <ul>
          <? foreach ( $presenters as $presenter ) { ?>
          <div class="column half">
            <li><h4><?= $presenter->title()->kirbytext() ?></h4>
              <?= $presenter->bio()->kirbytext() ?>
              <?= $presenter->website()->kirbytext() ?>
              </li>
              <div class="smallbreak"></div>
            </div>
          <? } ?>
        </ul>

    </article>
  </section>
</main>

<? snippet('footer') ?>
