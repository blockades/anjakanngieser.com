<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
    width: 1/3
  born:
    label: Birth (year)
    type: text
    width: 1/3
  location:
    label: Birth (location)
    type: text
    width: 1/3
  biography:
    label: Biography
    type: textarea
  cv:
    label: Curriculum vitae
    type: structure
    style: table
    fields:
      cv_type:
        label: Heading
        type: text
      entries:
        label: Entries
        type: textarea
