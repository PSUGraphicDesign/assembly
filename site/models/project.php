<? class ProjectPage extends Page {
  public function events () {
    return $this->year()->events()->filterBy('project', $this->uid());
  }
  public function projects () {
    return $this->parent();
  }
  public function year () {
    return $this->projects()->year();
  }
}
