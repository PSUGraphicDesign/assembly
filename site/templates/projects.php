<? snippet('header') ?>

<main>
  <section class="intro">
    <article>
      <h2><?= $page->title()->html() ?></h2>
      
<style type="text/css">
            .intro {
            background-repeat: repeat;
            background-attachment: fixed;
            background-size: 100%;
            background-image: url(<?php echo "/assets/images/backgrounds/bg-".rand(0, 5).".svg";  ?>);
          </style>

    </article>
  </section>

  <section>
    <article>
      <h3>A major focus of the conference is the connection between photography and social practice, with multiple events featuring projects by photographers from the Magnum agency made in conjunction with MFA students.</h3>

      <hr>
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
