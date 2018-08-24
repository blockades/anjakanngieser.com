
<section id="event" style="background-color: <?php echo $section->bg_color() ?>">
  <?php foreach($section->children()->visible() as $book): ?>
    <div class="event__row">
      <?php echo $book->title() ?><?php echo $book->author() ?>
    </div>
  <?php endforeach ?>
</section>


<section id="edition" style="background-color: <?php echo $section->bg_color() ?>">
  <div class="edition-pane__inner">

    <?php if($section->slug() != 'fall-of-the-derwent' && $section->slug() != 'lost-rocks'): ?>
      <h1 class="center"><?php echo $section->num() ?>.</h1>
    <?php endif ?>

    <?php if(!$section->product_spread()->empty()): ?>
      <figure>
        <img src="<?php echo $section->product_spread()->toFile()->url() ?>"/>
      </figure>
    <?php endif ?>

    <?php if($section->slug() != 'fall-of-the-derwent' && $section->slug() != 'lost-rocks' ): ?>
      <h2><?php echo $section->title() ?></h2>
      <h3><?php echo $section->author() ?><sup><?php echo $section->year() ?></sup></h3>
      <?php echo $section->text()->kirbytext() ?>
    <?php endif ?>
  </div>
</section>
