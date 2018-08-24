<section>
  <div class="editions-pane__page" id="editions-pane__page">
    <div class="editions-pane__page__header">
      <div class="editions-pane__page__header__first">
        <h1 class="center">Events</h1>
        <h2 class="center"><?php echo $section->parent()->title() ?></h2>
        <span class="cart-update">Cart (<span class="cart-update--amount">0</span>)</span>
      </div>
      <div class="editions-pane__page__header__next">
        <?php if($section->parent()->slug() == 'fall-of-the-derwent'): ?>
          <?php
            $data_file = '/var/www/FOTD/data/percent';
            $FOTD_VALUE = $section->percent();
            if(file_exists($data_file)) {
              $FOTD_VALUE = file_get_contents($data_file);
            }
          ?>
          <div class="long-content">
            <!-- <span class="center"><?php echo $section->parent()->head() ?></span> -->
            <span class="center percent"><?php echo $FOTD_VALUE ?><sup>&#37;</sup></span>
            <a class="button center" href="http://128.199.225.255:3000" target="_blank">Download <span>hydrographic</span> score</a>

            <div>
              <?php echo $section->parent()->intro()->kirbytext(); ?>
            </div>
          </div>

        <?php endif ?>
      </div>
    </div>
      <?php foreach($section->children()->visible()->filterBy('minor', '!=', '1') as $edition): ?>
        <div class="editions-pane__page__inner">
          <article class="edition-file">
            <a class="edition-file__toggle" href="<?php echo $edition->url() ?>"></a>
            <span class="edition-file__title"><?php echo $edition->title() ?> <?php if(!$edition->author()->empty()): ?>&ndash; <?php echo $edition->author() ?></span><?php endif ?>
            <div class="edition-file__content">
              <div class="edition-file__content__left">
                <?php if(!$edition->product_spread()->empty()): ?>
                  <figure>
                    <img src="<?php echo $edition->product_spread()->toFile()->url() ?>">
                  </figure>
                <?php endif ?>
              </div>
              <div class="edition-file__content__details">
                <h1><?php echo $edition->title() ?></h1>
                <?php echo $edition->text()->kirbytext() ?>

                <?php if(!$edition->price()->empty()): ?>
                  <div class="edition-file__content__details__list">
                    <ul>
                      <li><?php echo $edition->details() ?></li>
                      <li><?php echo $edition->size() ?></li>
                    </ul>
                    <ul>
                      <li>English</li>
                      <li>$<?php echo $edition->price() ?> (aud)</li>
                    </ul>
                    <ul>
                      <li class="button">Buy This</li>
                      <li></li>
                    </ul>
                  </div>
                <?php endif ?>
              </div>
            </div>
          </article>
        </div>
      <?php endforeach ?>
  </div>
</section>
