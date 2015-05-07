<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
files: true
fields:
  title:
    label: Site Name
    type:  text
  keywords:
    label: Keywords
    type:  tags
  description:
    label: Description
    type: textarea
    buttons: false
