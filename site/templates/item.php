<?php snippet('header') ?>

  <main data-template="item">
    <div class="table-header">
      <span>Category</span><span>Title</span><span>Publisher</span><span>Year</span>
    </div>
    <div class="table">
      <div>
        <span class="category">
          <span class="shapes">
            <?php foreach($page->category()->split(',') as $cat): ?>
              <?php if($cat == 'research') snippet('circle'); ?>
              <?php if($cat == 'fieldwork') snippet('triangle'); ?>
              <?php if($cat == 'art') snippet('rectangle'); ?>

            <?php endforeach ?>
          </span>
          <?php echo $page->subcategory() ?>
        </span>
        <span class="title"><?php echo $page->title() ?></span>
        <span class="publisher"><?php echo $page->publisher() ?></span>
        <span class="year"><?php echo $page->year() ?></span>
      </div>
    </div>
    <div class="text-field">
      <div class="text-field_spare"></div>
      <div class="text-field_column">
        <?php echo $page->text()->kirbytext() ?>

        <?php if(!$page->biographies()->empty()): ?>
          <div class="text-field_column_bios">
            <?php echo $page->biographies()->kirbytext() ?>
          </div>
        <?php endif ?>
      </div>
      <div class="text-field_details">
        <?php echo $page->details()->kirbytext() ?>
      </div>
    </div>
  </main>

<?php snippet('footer'); ?>
