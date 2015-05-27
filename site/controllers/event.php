<? return function ($site, $pages, $page) {
  return array(
    'presenter' => $page->year()->presenters()->find($page->presenter()),
    'project' => $page->year()->projects()->find($page->project()),
    'associated_events' => ( $page->associated_project() ? $page->associated_project()->events()->not($page) : false )
  );
};
