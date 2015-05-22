<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= AB::site_title() ?></title>

  <?= css('/assets/css/assembly.css') ?>
  <?= css('http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic') ?>

  <?= js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') ?>
  <?= js('https://maps.googleapis.com/maps/api/js?v=3.exp') ?>
  <?= js('/assets/js/assembly.js') ?>
</head>
<body>
  <header>
    <section>
      <article>
        <div class="column half">
          <div class="logo">
            <a href="/"><img src="/assets/images/Assembly_Logo.gif"></a>
          </div> 
        </div>
        <div class="column half">
          <div class="menu">
            <?= snippet('menu') ?>

          </div>
        </div>
      </article>
    </section>
  </header>
