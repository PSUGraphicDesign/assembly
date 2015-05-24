<? snippet('header') ?>

<main>
  <section class="intro" style="background-image: url('<?= AB::random_background() ?>')">
    <article id="intro">
      <div class="column full">
        <h3><?= $page->date_text()->html() ?></h3>
        <h1><?= $page->introduction()->html() ?></h1>
        <h3><?= $page->location()->html() ?></h3>
      </div>
    </article>
  </section>

  <section class="description block-after">
    <article>
      <div class="column full">
        <?= $page->description()->kirbytext() ?>
      </div>
    </article>
  </section>

  <section class="more">
    <article>
      <div class="column full">
        <?= $page->small_description()->kirbytext() ?>
      </div>
    </article>
  </section>

</main>

<? snippet('footer') ?>
