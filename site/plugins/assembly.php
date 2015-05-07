<? class AB {
  public static function site_title () {
    return site()->title()->html() . ' | ' . page()->title()->html();
  }

  public static function body_classes () {
    $classes = [
      page()->uid(),
      page()->template()
    ];

    $classes = array_filter($classes, function($class) {
      return !preg_match('/^\d+$/', $class);
    });

    return join($classes, ' ');
  }

  public static function link_for ( $page, $title ) {
    return html::a($page->url(), $title, ['class' => ($page->isOpen() ? 'active' : null)]);
  }

  public static function current_year () {
    return page(date('Y'));
  }
}
