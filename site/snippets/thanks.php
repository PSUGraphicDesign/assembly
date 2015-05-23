<? $links = $year->links()->yaml() ?>
<? if ( count($links) ) { ?>
  <ul>
    <? foreach ( $links as $link ) { ?>
      <li><?= html::a($link['link'], $link['title']) ?></li>
    <? } ?>
  </ul>
<? } ?>
