<? snippet('header') ?>

<main>
  <section class="intro">
    <article>
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
        <style type="text/css">
            .intro {
            background-repeat: repeat;
            background-attachment: fixed;
            background-size: 100%;
            background-image: url(<?php echo "/assets/images/backgrounds/bg-".rand(0, 5).".svg";  ?>);
          </style>
      </div>
    </article>
  </section>
  <section class="hud">
    <article class="centered-layout">
      <? foreach ( $days as $day ) { ?>
        <div class="column sixth">
          <div class="daynav"><?= $day->title()->html() ?></div>
        </div>
      <? } ?>
      <div class="column sixth">
        <div class="daynav">All</div>
      </div>
    </article>
  </section>
  <section class="map">
    <article>
      <div class="column full">
        <div data-center-lat="<?= c::get('place.defaults.lat') ?>" data-center-lng="<?= c::get('place.defaults.lng') ?>" data-zoom="<?= c::get('place.defaults.zoom') ?>" id="map-canvas" class="map-canvas"></div>
      </div>
    </article>
  </section>
  <? foreach ( $days as $day ) { ?>
    <section class="day">
      <article class="day-banner">
        <div class="column full">
          <h4><?= $day->date('l, M jS') ?></h4>
        </div>

        <div class="linebreak"></div>

      </article>
      <article class="events">
        <? foreach ( $day->events() as $event ) { ?>
          <div class="column quarter">
            <div class="timeschedule"><?= $event->time_begin() ?>&ndash;<?= $event->time_end() ?></div>
          </div>
          <div class="column three-quarters">
            <div class="eventblock">
            <div class="eventschedule"><?= html::a($event->url(), $event->title()) ?></div>
            <div class="presentername"><?= $event->contextualname()->html() ?></div>
            </div>

            
          </div>



        <? } ?>
      </article>
    </section>
  <? } ?>
</main>

<? snippet('footer') ?>
