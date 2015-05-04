<?php if(!defined('KIRBY')) exit ?>

title: Projects
pages: 
files: false
fields:
  title: 
    label: Project Name
    type: text
  presenter:
    label: Presenter
    type: select
    options: query
    query: 
      page: ../../presenters 
      fetch: children
      text: {{title}}
  description:
    label: Description
    type: textarea

