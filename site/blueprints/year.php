<?php if(!defined('KIRBY')) exit ?>

title: Year
pages:
  build:
    - title: Schedule
      uid: schedule
      template: schedule

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
  introduction:
    label: Introduction
    type: text
  description:
    label: Description
    type: textarea
  date:
    label: Conference Duration
    type: text
  present:
    label: Presenting at Assembly
    type: textarea
  presentcontact:
    label: Presenter Contact
    type: textarea
  footer_sponsors:
    label: Sponsors
    type: structure
    entry: >
      {{sponsor}}
    fields:
      sponsor:
        label: Sponsor Name
        type: text
  footer_links:
    label: Links
    type: structure
    entry : >
      {{link}}
    fields:
      link:
        label: Link
        type: URL
