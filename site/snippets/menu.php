<nav role="navigation">
  <?php $i = 1; foreach(page('projects')->children()->visible() as $p): ?>
    <div class="major">
      <a class="trigger" <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
      <span class="project-title__years"><?php echo $p->year(); ?></span>
    </div>
    <?php foreach($p->children()->children()->visible()->filterBy('minor', '1') as $minor): ?>
      <div class="minor minor-project-<?php echo $i ?>">
        <a class="trigger-half" <?php e($minor->isOpen(), ' class="active"') ?> href="<?php echo $minor->url() ?>"><span class="trigger-half__title"><?php echo $minor->title() ?></span><span class="trigger-half__date"><?php echo $minor->event_date() ?></span></a>
      </div>
    <?php endforeach ?>
    <?php $i++ ?>
  <?php endforeach ?>

</nav>
