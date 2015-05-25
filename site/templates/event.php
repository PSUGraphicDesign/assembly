<? snippet('header') ?>

<main>
  <section class="event">
    <article>
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </article>

    <article>   
      <div class="column two-thirds event-info">
        <div class="details">
          <div class="group">
            <h5 class="label">Presenters</h5>
            <div class="data">
              <?= $page->contextualname()->html()?>
            </div>
          </div>

          <div class="group">
            <h5 class="label">When</h5>
            <div class="data">
              <?= $page->time_begin()->html() ?>–<?= $page->time_end()->html()?> 
            </div>
          </div>

          <div class="group">
            <h5 class="label">Location</h5>
            <div class="data">
              <?= $page->address()->html()?>
            </div>
          </div>
        </div>

        <div class="description">
          <?= $page->description()->kirbytext() ?>
        </div>

        <? if ($page->location()) { ?>
          <div class="map">
            <div id="map" class="map-container" data-center-lat="<?= $page->location()->json('lat') ?>" data-center-lng="<?= $page->location()->json('lng') ?>"></div>
          </div>
        <? } ?>

      </div>     

      <div class="column third event-image">
        <? if( $image = $page->image() ) { ?>
          <img src="<?= $image->url() ?>" alt="">
        <? } ?>
      </div>

    </article>

    <article class="nav">
      <div class="column half previous">
        <? if ( $page->hasPrevVisible() ) { ?>
          <h6>Previous</h6>
          <p><?= html::a($page->prevVisible()->url(), $page->prevVisible()->title()) ?></p>
        <? } ?>
      </div>
      <div class="column half next">
        <? if ( $page->hasNextVisible() ) { ?>
          <h6>Next</h6>
          <p><?= html::a($page->nextVisible()->url(), $page->nextVisible()->title()) ?></p>
        <? } ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
