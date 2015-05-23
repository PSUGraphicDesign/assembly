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
<div class="column full">
  <h3>The wide variety of public events is organized and curated by Portland State University Art and Social Practice MFA faculty, students, alumni, and partners.</h3>
</div>

<hr>
      </article>
    </section>

  <section class="presenter-list">
    <article>
      
        <ul>
          <? foreach ( $presenters as $presenter ) { ?>
          <div class="column half">
            <li><h4><?= $presenter->title()->kirbytext() ?></h4>
              <?= $presenter->bio()->kirbytext() ?>
              <?= $presenter->website()->kirbytext() ?>
              </li>
              <div class="smallbreak"></div>
            </div>
          <? } ?>
        </ul>

    </article>
  </section>
</main>

<? snippet('footer') ?>
