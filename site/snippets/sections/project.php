<div class="project-pane__shadow"></div>
<div class="project-pane__title">
  <a class="project-title" href="<?php echo $section->url() ?>"><?php echo $section->title(); ?></a>
  <span class="project-title__years"><?php echo $section->year(); ?></span>
</div>
<section>

    <div class="editions-pane-wide" data-url="breaks <?php echo $section->url() ?>/events">
      <?php echo $section->children()->length() ?>
      <?php if($section->children()->count()): ?>
        <?php snippet('sections/events', array('section' => $section->children()->first())); ?>
      <?php endif ?>
    </div>
    <div class="cart-pane">
      <span class="cart-update">Cart (<span class="cart-update--amount">0</span>)</span>
    </div>

</section>
