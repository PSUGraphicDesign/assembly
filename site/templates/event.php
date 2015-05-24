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
            <div class="data"><?= $page->contextualname()->html()?></div>
          </div>

          <div class="group">
            <h5 class="label">Time</h5>
            <div class="data"><?= $page->time_begin()->html() ?>–<?= $page->time_end()->html()?></div>
          </div>

          <div class="group">
            <h5 class="label">Location</h5>
            <div class="data"><?= $page->address()->html()?></div>
          </div>
        </div>

        <div class="description">
          <?= $page->description()->kirbytext() ?>
        </div>

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
          <?= html::a($page->prevVisible()->url(), $page->prevVisible()->title()) ?>
        <? } ?>
      </div>
      <div class="column half next">
        <? if ( $page->hasNextVisible() ) { ?>
          <h6>Next</h6>
          <?= html::a($page->nextVisible()->url(), $page->nextVisible()->title()) ?>
        <? } ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
