<?php if(!defined('KIRBY')) exit ?>

title: Point of Interest
pages:
  hide: true
files: false
fields:
  title: 
    label: Place Name
    type: text
  category:
    label: Category
    type: select
    options:
      Food: Food
      Fun: Fun
      Culture: Culture
  description:
    label: Description
    type: textarea


