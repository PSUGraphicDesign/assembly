<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= AB::site_title() ?></title>

  <?= css('assets/css/assembly.css') ?>

</head>
<body>
  <header>
    <section>
      <article>
        <div class="column full">
          <div class="logo">
            <img src="assets/images/Assembly_Logo.gif">
          </div> 
          <?= snippet('menu') ?>
        </div>
      </article>
    </section>
  </header>
