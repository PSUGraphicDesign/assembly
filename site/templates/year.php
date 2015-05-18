<? snippet('header') ?>

<main>
  <section class="intro">
    <article>
      <div class="column full">

        <h2><?= $page->date_text()->kirbytext() ?></h2>

        <h1><?= $page->introduction()->kirbytext() ?></h1>

        <h2><?= $page->location()->kirbytext() ?></h2>
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
