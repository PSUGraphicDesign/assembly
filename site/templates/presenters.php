<? snippet('header') ?>

<main>
  <section class="presenter-list">
    <article>
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </article>
    <article>
      <div class="column full">
        <ul>
          <? foreach ( $presenters as $presenter ) { ?>
            <li><?= html::a($presenter->url(), $presenter->title()) ?></li>
          <? } ?>
        </ul>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
