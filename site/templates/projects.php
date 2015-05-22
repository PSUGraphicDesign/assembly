<? snippet('header') ?>

<main>
  <section class="intro">
    <article>
      <h2><?= $page->title()->html() ?></h2>
    </article>
  </section>
  <section class="project-list">

    <article>
      
        
          <? foreach ( $projects as $project ) { ?>
          <div class="column third">
            <div class="projectname"><h4><?= $project->title()->kirbytext() ?></h4>
              <?= $project->description()->kirbytext() ?>

            <div class="smallbreak"></div>
          </div>

          </div>
          <? } ?>
    
      
    </article>
  </section>
</main>

<? snippet('footer') ?>
