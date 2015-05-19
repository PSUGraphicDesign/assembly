<? snippet('header') ?>

<main>
  <section class="intro">
    <article>
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

          <p><?= $page->description()->kirbytext() ?></p>

      </div>
    </article>
  </section>


</main>

<? snippet('footer') ?>
