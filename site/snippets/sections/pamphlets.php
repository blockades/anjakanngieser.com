<?php $i = 1; foreach($pages->find('projects')->children() as $section): ?>
  <?php foreach($section->children()->children()->visible()->filterBy('minor', '1') as $pamphlet): ?>
    <div class="pamphlet pamphlet-<?php echo $i++ ?>">
      <div class="pamphlet__running-head">
        <div class="pamphlet__running-head__inner">
          <span class="pamphlet__running-head__title"><?php echo $pamphlet->title(); ?></span><span class="pamphlet__running-head__year"><?php echo $pamphlet->event_date(); ?></span>
        </div>
      </div>
      <?php if($pamphlet->slug() == 'riverslog'): ?>
        <div class="pamphlet__inner">
          <span class="pamphlet-title">
            <?php echo $pamphlet->title(); ?>
          </span>
          <div class="pamphlet__glossary">
            <span class="pamphlet__glossary__title">B</span>
            <?php foreach($pamphlet->glossary()->toStructure() as $item): ?>
              <div>
                <?php if(!$item->term()->empty()): ?><span><?php echo $item->term() ?></span> &ndash;<?php endif ?> <?php echo $item->description()->kirbytext() ?>
                <?php foreach($pamphlet->images()->shuffle()->limit(1) as $img): ?>
                  <img src="<?php echo $img->url() ?>" />
                <?php endforeach ?>
              </div>
            <?php endforeach ?>
          </div>
          <?php if(!$pamphlet->bibliography()->empty()): ?>
            <div class="pamphlet-bibliography">
              <span>——</span>
              <?php echo $pamphlet->bibliography()->kirbytext(); ?>
            </div>
          <?php endif ?>
        </div>


      <?php else: ?>
        <article class="<?php if($pamphlet->para_two()->bool()): ?>para-break<?php endif ?>">
          <h1>Event</h1>
          <?php if(!$pamphlet->long_title()->empty()): ?>
            <span class="pamphlet-title__long">
              <?php echo $pamphlet->long_title(); ?>
            </span>
          <?php else: ?>
            <span class="pamphlet-title">
              <?php echo $pamphlet->title(); ?>
            </span>
          <?php endif ?>
          <?php if(!$pamphlet->event_date()->empty() || !$pamphlet->event_venue()->empty() || !$pamphlet->event_address()->empty()): ?>
            <dl>
                <dt>Details</dt>
                <dd><?php echo $pamphlet->event_date(); ?></dd>
                <dd><?php echo $pamphlet->event_venue()->kirbytext(); ?></dd>
                <dd><?php echo $pamphlet->event_address()->kirbytext(); ?></dd>
            </dl>
          <?php endif ?>
          <?php echo $pamphlet->text()->kirbytext(); ?>
          <a class="url-link" href="<?php echo $pamphlet->link(); ?>" target="_0"><?php echo $pamphlet->link(); ?></a>

          <?php if(!$pamphlet->bibliography()->empty()): ?>
            <div class="pamphlet-bibliography">
              <p>——</p>
              <?php echo $pamphlet->bibliography()->kirbytext(); ?>
            </div>
          <?php endif ?>
        </article>
      <?php endif ?>
    </div>
  <?php endforeach ?>
<?php endforeach ?>

<a href="#" class="pamphlet-close"></a>
