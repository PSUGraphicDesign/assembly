<? snippet('header') ?>

<main>
  <? snippet('intro') ?>

  <section>
    <article>
      <div class="column full line-after">
        <?= $page->intro()->kirbytext() ?>
      </div>
    </article>
  </section>



  <section class="project-list">

    <article>
      
        <ul>
          <? foreach ( $projects as $project ) { ?>
          <li><div class="column third">
            <div class="projectname"><h4><?= $project->title()->html() ?></h4></div>
          </div>
             <div class="column two-thirds" <?= $project->description()->kirbytext() ?></div>
          </li>
          
          <? } ?>
      </ul>
      
    </article>
  </section>
</main>

<? snippet('footer') ?>
