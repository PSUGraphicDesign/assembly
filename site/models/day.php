<? class DayPage extends Page {
  public function events () {
    return $this->children()->filterBy('intendedTemplate', 'event')->sortBy('time_begin', 'asc');
  }

  public function year () {
    return $this->schedule()->year();
  }

  public function schedule () {
    return $this->parent();
  }
}
