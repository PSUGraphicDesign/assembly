<? snippet('header') ?>

<main>
  <? snippet('intro') ?>

  <? /*
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
  */ ?>

   <section>
    <article>
      <div class="column full line-after">
        <div class="head-description"><?= $page->intro()->kirbytext() ?></div>
      </div>
    </article>
  </section>

  <section class="map">
    <article>
      <div class="column full">
        <div data-center-lat="<?= c::get('place.defaults.lat') ?>" data-center-lng="<?= c::get('place.defaults.lng') ?>" data-zoom="<?= c::get('place.defaults.zoom') ?>" id="map" class="map-container"></div>
      </div>
    </article>
  </section>

  <? foreach ( $days as $day ) { ?>
    <section class="day">
      <article class="day-banner">
        <div class="column full line-after">
          <h4><?= $day->title()->html() ?></h4>
        </div>
      </article>
      <article class="events">
        <? foreach ( $day->events() as $event ) { ?>
          <div class="event" data-lat="<?= $event->location()->json('lat') ?>" data-lng="<?= $event->location()->json('lng') ?>">
            <div class="column quarter">
              <div class="time">
                <?= $event->time_begin() ?>&ndash;<?= $event->time_end() ?>
              </div>
            </div>
            <div class="column three-quarters">
              <div class="details">
                <div class="title">
                  <?= html::a($event->url(), $event->title()) ?>
                </div>
                <div class="presenter">
                  <?= $event->contextualname()->html() ?>
                </div>
              </div>
            </div>
          </div>
        <? } ?>
      </article>
    </section>
  <? } ?>
</main>

<? snippet('footer') ?>
