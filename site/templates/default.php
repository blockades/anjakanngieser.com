<?php snippet('header') ?>

  <main>
    <div class="table-header">
      <span>Category</span><span>Title</span><span>Publisher</span><span>Year</span>
    </div>
    <div class="table">
      <?php
        $items = page('work')->children()->visible();
        if($c = get('c')):
          $items = $items->filterBy('category', $c);
        endif;
        if($s = get('s')):
          $items = $items->filterBy('subcategory', $s);
        endif;
      ?>
      <?php foreach($items as $item): ?>
        <a class="row" href="<?php echo $item->url() ?>">
          <span class="category">
            <span class="shapes">
              <?php foreach($item->category()->split(',') as $cat): ?>
                <?php if($cat == 'research') snippet('circle'); ?>
                <?php if($cat == 'fieldwork') snippet('triangle'); ?>
                <?php if($cat == 'art') snippet('rectangle'); ?>
              <?php endforeach ?>
            </span>
            <?php echo $item->subcategory() ?>
          </span>
          <span class="title"><?php echo preg_replace('/<br[^>]*>/', '', $item->title()) ?></span>
          <span class="publisher"><?php echo $item->publisher() ?></span>
          <span class="year"><?php echo $item->year() ?></span>
        </a>
      <?php endforeach ?>
    </div>


<?php snippet('footer'); ?>
