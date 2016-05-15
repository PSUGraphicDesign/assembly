<? class AB {
  public static function site_title () {
    return site()->title()->html() . ' | ' . page()->title()->html();
  }

  public static function body_classes () {
    $classes = array(
      page()->uid(),
      page()->template()
    );

    $classes = array_filter($classes, function($class) {
      return !preg_match('/^\d+$/', $class);
    });

    return join($classes, ' ');
  }

  public static function link_for ( $page, $title ) {
    return html::a($page->url(), $title, array('class' => ($page->isOpen() ? 'active' : null)));
  }

  public static function current_year () {
    return site()->current_year()->toPage();
  }

  public static function contextual_year () {
    if ( page()->intendedTemplate() == 'year' ) {
      $year = page();
    } else {
      $year = page()->parents()->findBy('intendedTemplate', 'year');
    }

    if ( $year ) {
      return $year;
    } else {
      return static::current_year();
    }
  }

  public static function random_background () {
    return static::asset('images', 'backgrounds/bg-' . rand(0, 5) . '.svg');
  }

  public static function sponsors_in_chunks ($chunks = 3) {
    $sponsors = split("\n", static::current_year()->sponsor_list());
    $sponsors_per_chunk = ceil(count($sponsors) / $chunks);
    return array_chunk($sponsors, $sponsors_per_chunk);
  }

  public static function asset ($type, $filename) {
    return site()->url() . '/assets/' . $type . '/' . $filename;
  }
}
