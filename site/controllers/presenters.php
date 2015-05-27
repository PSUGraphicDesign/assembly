<? return function ($site, $pages, $page) {
  return array(
    'presenters' => $page->children()
  );
};
