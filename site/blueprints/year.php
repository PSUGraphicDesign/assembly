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
  date_text:
    label: Conference Duration
    type: text
  location:
    label: Location
    type: text
  small_description:
    label: Sub Description
    type: textarea
  sponsors:
    label: Sponsors
    type: structure
    entry: >
      <a href="{{url}}">{{name}}</a>
    fields:
      name:
        label: Sponsor Name
        type: text
        required: true
      url:
        label: URL
        type: url
      logo:
        label: Logo
        type: select
        options: images
  sponsor_list:
    label: Sponsor List
    type: textarea
  links:
    label: Footer Links
    type: structure
    entry: >
      {{link}}
    fields:
      title:
        label: Title
        type: text
      link:
        label: Link
        type: URL
