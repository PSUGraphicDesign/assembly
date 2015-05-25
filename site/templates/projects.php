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
    <article>

      <? /* foreach ( $day->$events as $event ) { ?>
        <ul>
          <li>
            <div class="column third">
              <h4><?= $event->contextualname()->html()?><h4>
            </div>
          </li>
        </ul>
      <? } */ ?>
      
      <? foreach ( $projects as $project ) { ?>
        <div class="column third">
          <div class="projectname">
            <h4><?= $project->title()->html() ?></h4>
          </div>
        </div>
        <div class="column two-thirds">
          <?= $project->description()->kirbytext() ?>
        </div>
      <? } ?>
    </article>
  </section>
</main>

<? snippet('footer') ?>
