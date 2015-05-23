<? snippet('header') ?>

<main>
  <section class="event-details">
    <article>
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </article>

    <article>   


      <div class="column two-thirds description">
      <dl>

          <dt>Presenters</dt>
          <dd><?= $page->contextualname()->html()?></dd>

          <dt>Time</dt>
          <dd><?= $page->time_begin()->html()?>–<?= $page->time_end()->html()?></dd>

          <dt>Location</dt>
          <dd><?= $page->address()->html()?></dd>

      </dl>

        <div class="eventdescription">
          <?= $page->description()->kirbytext() ?>
        </div>



    </div>     

    <div class="column third metadata">
        <?php if($image = $page->image()): ?>
<img src="<?php echo $image->url() ?>" alt="">
<?php endif ?>
      </div> 

    </article>
  </section>
</main>

<? snippet('footer') ?>
