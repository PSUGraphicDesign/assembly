<? class DayPage extends Page {
  public function events () {
    return $this->children()->filterBy('intendedTemplate', 'event');
  }
}
