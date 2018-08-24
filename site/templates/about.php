<?php snippet('header') ?>

  <main data-template="bio-cv">
    <?php $about = $pages->find('bio-cv') ?>
    <section class="biography">
      <aside>
        b.<?php echo $about->born() ?><br />
        <?php echo $about->location() ?>
      </aside>
      <div class="biography-details">
        <div class="inner">
          <?php echo $about->biography()->kirbytext() ?>
        </div>
      </div>
    </section>
    <section class="cv">
      <div class="inner">
        <?php foreach($about->cv()->toStructure() as $cv): ?>
          <div class="item-wrap">
            <h2><?php echo $cv->cv_type() ?></h2>
            <div class="item-wrap_entries">
              <?php echo $cv->entries()->kirbytext() ?>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </section>
  </main>

<?php snippet('footer'); ?>
