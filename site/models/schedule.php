<? class SchedulePage extends Page {
  public function days () {
    return $this->children()->filterBy('intendedTemplate', 'day');
  }

  public function year () {
    return $this->parent();
  }
}
