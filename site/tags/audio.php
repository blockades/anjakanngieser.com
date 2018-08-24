<?php
kirbytext::$tags['audio'] = array(
  'attr' => array(
    'caption'
  ),
  'html' => function($tag) {

    $caption = $tag->attr('caption');
    $url     = $tag->attr('audio');
    $file    = $tag->file($url);
    $url = $file ? $file->url() : url($url);
    if(!empty($caption)) {
      $audiocaption = '<p class="audio-caption">' . escape::html($caption) . '</p>';
    } else {
      $audiocaption = null;
    }
    return '<audio controls><source src="'. $url .'"'. ' type="audio/mp3"></audio>' . $audiocaption;

  }
);

