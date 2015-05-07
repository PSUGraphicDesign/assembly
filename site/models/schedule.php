<? class SchedulePage extends Page {
  public function days () {
    return $this->children()->filterBy('intendedTemplate', 'day');
  }
}
