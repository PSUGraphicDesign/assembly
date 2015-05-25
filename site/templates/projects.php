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
            <h4><?= $project->title()->html() ?></h4>
          </div>
        </div>
        <div class="column two-thirds">
          <?= $project->description()->kirbytext() ?>

          <? if ( $events = $project->events() ) { ?>
            <ul>
              <? foreach ( $events as $event ) { ?>
                <li><?= html::a($event->url(), $event->title()) ?></li>
              <? } ?>
            </ul>
          <? } ?>
        </div>
      </article>
    <? } ?>
  </section>
</main>

<? snippet('footer') ?>
