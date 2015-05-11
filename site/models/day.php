<? class DayPage extends Page {
  public function events () {
    return $this->children()->filterBy('intendedTemplate', 'event');
  }

  public function year () {
    return $this->schedule()->year();
  }

  public function schedule () {
    return $this->parent();
  }
}
