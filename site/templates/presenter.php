<? snippet('header') ?>

<main>
  <section class="presenter-details">
    <article>
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </article>
    <article>
      <div class="column two-thirds bio">
        <?= $page->description() ?>
      </div>
      <div class="column third events">
        <ul>
          <? foreach ( $events as $event ) { ?>
            <li><?= html::a($event->url(), $event->title()) ?></li>
          <? } ?>
        </ul>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
