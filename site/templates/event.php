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
        <?= $page->description() ?>
      </div>
      <div class="column third metadata">
        <dl>

          <dt>Presenters</dt>
          <dd><?= $page->contextualname()->html()?></dd>

          <dt>Time</dt>
          <dd><?= $page->time_begin()->html()?>–<?= $page->time_end()->html()?></dd>

          <dt>Location</dt>
          <dd><?= $page->location()->html()?></dd>

        </dl>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
