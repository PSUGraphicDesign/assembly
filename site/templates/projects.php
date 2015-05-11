<? snippet('header') ?>

<main>
  <section class="project-list">
    <article>
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
      </div>
    </article>
    <article>
      <div class="column full">
        <ul>
          <? foreach ( $projects as $project ) { ?>
            <li><?= html::a($project->url(), $project->title()) ?></li>
          <? } ?>
        </ul>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
