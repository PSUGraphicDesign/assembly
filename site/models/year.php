<? class YearPage extends Page {
  public function presenters () {
    return $this->find('presenters');
  }

  public function schedule () {
    return $this->find('schedule');
  }

  public function events () {
    return $this->schedule()->days()->children();
  }

  public function projects () {
    return $this->find('projects');
  }

  public function poi () {
    return $this->find('area-guide');

  }
}
