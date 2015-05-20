<? snippet('header') ?>

<main>
  <section class="intro">
    <article>
      <h2><?= $page->title()->html() ?></h2>
    </article>
  </section>
  <section class="project-list">

    <article>
      <div class="column full">
        <ul>
          <? foreach ( $projects as $project ) { ?>

            <li><h3><?= $project->title()->kirbytext() ?></h3>
              <?= $project->description()->kirbytext() ?></li>

          <? } ?>
        </ul>
      </div>
    </article>
  </section>
</main>

<? snippet('footer') ?>
