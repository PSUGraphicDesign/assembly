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
            <div class="projectname"><h4><?= $project->title()->html() ?></h4></div>
          </div>
             <div class="column two-thirds" <?= $project->description()->kirbytext() ?></div>
<div class="smallbreak"></div>
          
          <? } ?>
    
      
    </article>
  </section>
</main>

<? snippet('footer') ?>
