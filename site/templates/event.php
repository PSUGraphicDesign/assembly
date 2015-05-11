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
          <dt>Presenter</dt>
          <dd><?= html::a($presenter->url(), $presenter->title()) ?></dd>

          <dt>Project</dt>
          <dd><?= html::a($project->url(), $project->title()) ?></dd>
        </dl>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
