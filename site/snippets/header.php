<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= AB::site_title() ?></title>

  <?= css('/assets/css/assembly.css') ?>
  <?= css('http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic') ?>
</head>
<body>
  <header>
    <section>
      <article>
        <div class="column half">
          <div class="logo">
            <img src="/assets/images/Assembly_Logo.gif">
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
