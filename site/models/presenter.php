<? class PresenterPage extends Page {
  public function events () {
    return $this->year()->events()->filterBy('presenter', $this->uid());
  }

  public function presenters () {
    return $this->parent();
  }

  public function year () {
    return $this->presenters()->year();
  }
}
