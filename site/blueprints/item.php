<?php if(!defined('KIRBY')) exit ?>

title: Item
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  category:
    label: Category
    type: checkboxes
    options:
      research: Research
      fieldwork: Fieldwork
      art: Art
    width: 1/2
  subcategory:
    label: Sub category
    type: select
    width: 1/2
    options:
      EP: Experimental Politics
      LA: Labour
      SS: Sound and Space
      R: Radio
      FR: Field Recording
      S: Sound
      V: Video
      LI: Listening
      CS: Creative Strategies
  details:
    label: Details
    type:  textarea
    width: 1/2
  publisher:
    label: Publisher
    type: text
    width: 1/4
  year:
    label: Year
    type: text
    width: 1/4
  text:
    label: Text
    type:  textarea
