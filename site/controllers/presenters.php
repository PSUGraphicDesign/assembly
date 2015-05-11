<? return function ($site, $pages, $page) {
  return [
    'presenters' => $page->children()
  ];
};
