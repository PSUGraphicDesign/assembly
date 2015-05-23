<? $sponsors = $year->sponsors()->yaml() ?>
<? if ( count($sponsors) ) { ?>
  <ul>
    <? foreach ( $sponsors as $sponsor ) { ?>
      <? $logo = $year->image($sponsor['logo']); ?>
      <li>
        <a href="<?= $sponsor['url'] ?>" target="_blank">
          <img src="<?= $logo->url() ?>" alt="<?= $sponsor['name'] ?>" />
        </a>
      </li>
    <? } ?>
  </ul>
<? } ?>
