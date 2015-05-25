<article class="sponsors">
  <div class="column full">
    <h5>A Special Thanks to Our Sponsors</h5>
  </div>
  <div class="column full sponsor-list">
    <?= AB::current_year()->sponsor_list()->kirbytext() ?>
  </div>
  <? /* foreach ( AB::sponsors_in_chunks(3) as $chunk ) { ?>
    <div class="column third">
      <ul>
        <? foreach ( $chunk as $sponsor ) { ?>
          <li><?= kirbytext($sponsor) ?></li>
        <? } ?>
      </ul>
    </div>
  <? } */ ?>
</article>
