<? snippet('header') ?>

<main>
  <section class="intro">
    <article>
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </article>
  </section>
  <section class="hud">
    <article class="centered-layout">
      <? foreach ( $days as $day ) { ?>
        <div class="column sixth">
          <?= $day->title()->html() ?>
        </div>
      <? } ?>
      <div class="column sixth">
        All
      </div>
    </article>
  </section>
  <section class="map">
    <article>
      <div class="column full">
        The map is a big to-do, right now. It'll be ok though.
      </div>
    </article>
  </section>
  <? foreach ( $days as $day ) { ?>
    <section class="day">
      <article class="day-banner">
        <div class="column full">
          <h3><?= $day->date('l, M jS') ?></h3>
        </div>
      </article>
      <article class="events">
        <? foreach ( $day->events() as $event ) { ?>
          <div class="column quarter">
            <?= $event->time_begin() ?>&ndash;<?= $event->time_end() ?>
          </div>
          <div class="column three-quarters">
            <?= $event->title() ?>
          </div>
        <? } ?>
      </article>
    </section>
  <? } ?>
</main>

<? snippet('footer') ?>
