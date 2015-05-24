<? snippet('header') ?>

<main>
  <? snippet('intro') ?>

  <section>
    <article>
      <div class="column full line-after">
        <?= $page->intro()->kirbytext() ?>
      </div>
    </article>
  </section>

  <section class="presenter-list">
    <article>
      <? foreach ( $presenters as $presenter ) { ?>
        <div class="column half presenter">
          <h4>
            <? if ( $presenter->website() ) { ?>
              <a href="<?= $presenter->website()->html() ?>" target="blank"><?= $presenter->title()->html() ?></a>
            <? } else { ?>
              <?= $presenter->title()->html() ?>
            <? } ?>
          </h4>

          <?= $presenter->bio()->kirbytext() ?>

          <? if ( $presenter->website() ) { ?>
            <a href="<?= $presenter->website()->html() ?>" class="website" target="blank"><?= $presenter->website()->html() ?></a>
          <? } ?>
        </div>
      <? } ?>
    </article>
  </section>
</main>

<? snippet('footer') ?>
