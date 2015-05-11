<?php if(!defined('KIRBY')) exit ?>

title: Event
pages:
  hide: true
files: true
fields:
  title:
    label: Title
    type: text
  time_begin:
    label: Start Time
    type: time
    interval: 15
    width: 1/2
  time_end:
    label: End Time
    type: time
    interval: 15
    width: 1/2
  location:
    label: Location
    type: text
  presenter:
    label: Presenter
    type: select
    options: query
    query:
      page: ../../../presenters
  project:
    label: Project
    type: select
    options: query
    query:
      page: ../../../projects
