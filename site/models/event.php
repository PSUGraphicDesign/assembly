<? class EventPage extends Page {
  public function year () {
    return $this->day()->year();
  }

  public function day () {
    return $this->parent();
  }

  public function associated_project () {
    return $this->year()->projects()->find($this->project());
  }
}
