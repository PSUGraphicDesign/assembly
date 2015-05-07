<ul>
  <li><?= AB::link_for(page('about'), 'About') ?></li>
  <li><?= AB::link_for(AB::current_year()->find('schedule'), 'Schedule') ?></li>
  <li><?= AB::link_for(AB::current_year()->find('projects'), 'Projects') ?></li>
  <li><?= AB::link_for(AB::current_year()->find('presenters'), 'Presenters') ?></li>
  <li><?= AB::link_for(AB::current_year()->find('area-guide'), 'Area Guide') ?></li>
</ul>
