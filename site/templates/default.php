<? snippet('header') ?>

<main>
<h1><?= $page->title()->html() ?></h1>

  <section>
    <article class="intro">
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </article>
    <article>
      <div class="column full">
        <?= $page->text()->kirbytext() ?>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
