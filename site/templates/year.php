<? snippet('header') ?>

<main>
  <section class="intro">
    <article id="intro">
      <div class="column full">

        <h3><?= $page->date_text()->kirbytext() ?></h3>

        <h1><?= $page->introduction()->kirbytext() ?></h1>

        <h3><?= $page->location()->kirbytext() ?></h3>
      </div>
    </article>
  </section>

  <section class="description">
    <article>
      <div class="column full">

          <h3><?= $page->description()->kirbytext() ?></h3>

          <p><?= $page->small_description()->kirbytext() ?></p>

      </div>
    </article>
  </section>


</main>

<? snippet('footer') ?>
