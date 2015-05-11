<? return function ($site, $pages, $page) {
  return [
    'presenter' => $page->year()->presenters()->find($page->presenter()),
    'project' => $page->year()->projects()->find($page->project())
  ];
};
