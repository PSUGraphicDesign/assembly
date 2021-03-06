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
  social_links:
    label: Social Media Links
    type: textarea
  current_year:
    label: Current Assembly Year
    type: select
    options: query
    query:
      page: '/'
      fetch: pages
      template: year

