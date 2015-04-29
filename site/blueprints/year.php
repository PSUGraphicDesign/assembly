<?php if(!defined('KIRBY')) exit ?>

title: Year
pages:
  build:
    - title: Schedule
      uid: schedule
      template: day

    - title: Projects
      uid: projects
      template: projects

    - title: Presenters
      uid: presenters
      template: presenters

    - title: Area Guide
      uid: area-guide
      template: area-guide


files: true
fields:
  title:
    label: Title
    type:  text
  year:
    label: Year
    type:  number
