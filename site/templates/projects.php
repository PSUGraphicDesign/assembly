<? snippet('header') ?>

<main>
  <? snippet('intro') ?>

  <section>
    <article>
      <div class="column full line-after">
        <div class="head-description"><?= $page->intro()->kirbytext() ?></div>
      </div>
    </article>
  </section>

  <section class="project-list">
    <? foreach ( $projects as $project ) { ?>
      <article class="project">
        <div class="column third">
          <div class="projectname">
  <h4>
    <? if ( $event = $project->events()->first() ) { ?>
      <?= html::a($event->url(), $project->title()) ?>
    <? } else { ?>
      <?= $project->title() ?>
    <? } ?>
  </h4>
</div>
        </div>

        <div class="column two-thirds">
          <?= $project->description()->kirbytext() ?>

         
        </div>
      </article>
    <? } ?>
  </section>
</main>

<? snippet('footer') ?>
