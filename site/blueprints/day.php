<?php if(!defined('KIRBY')) exit ?>

title: Day
pages:
  template: event
  num:
    mode: date
    field: time_begin
    format: Hi
files: false
fields:
  title: 
    label: Title
    type: text
  date:
    label: Date
    type: date
