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
  description:
    label: Description
    type: textarea
    help: Provide any additional info that the associated Presenter and Project won't cover. Things like details about transportation, timing, etc. go here.
  address:
    label: Address
    type: text
  location:
    label: Location
    type: place
  presenter:
    label: Presenter
    type: select
    options: query
    query:
      page: ../../../presenters
  contextualname:
    label: Project Presenters and Collaborators
    type: text
  project:
    label: Project
    type: select
    options: query
    query:
      page: ../../../projects
  illustration:
    label: Illustration
    type: select
    options: images
