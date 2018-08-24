<?php

# (image: 01-fig.jpg class: centre caption: Nicholas Mangan, Friday the 13th, 2009, C-type print, 98.5 x 68.5 cm. Picture of the sun on the 13th of February, seven days after the Black Saturday bush fires in Victoria, Australia.)

kirbytext::$tags['img'] = array(
  'attr' => array(
    'class', 'caption'
  ),
  'html' => function($tag) {
    $img = $tag->file($tag->attr('img'));
    if (!$img) {
      return '';
    } else {
      $num = preg_replace('/(\d+).*/', '${1}', $tag->attr('img'));
      $name = strstr($tag->attr('img'), 'fig') ? 'data-figure="'.$num.'"' : '';
      return '<figure '.$name.' class="'.$tag->attr('class', '').'">
        <img src="'.$img->url().'" alt="'.$img->caption().'" />
        <figcaption>'.$img->caption().'</figcaption>
      </figure>';
    }
  }
);
