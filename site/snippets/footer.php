<?php if($page->isHomePage() || $page->template() == 'item'): ?>
<?php
  $subcats = array_unique(page('work')->children()->visible()->toArray(function($p) {
    return $p->subcategory();
  }));

  function nameforsubcat($subcat) {
    if($subcat == 'EP') return 'Experimental Politics';
    if($subcat == 'LA') return 'Labour';
    if($subcat == 'SS') return 'Sound and Space';
    if($subcat == 'R')  return 'Radio';
    if($subcat == 'FR') return 'Field Recording';
    if($subcat == 'S')  return 'Sound';
    if($subcat == 'V')  return 'Video';
    if($subcat == 'LI') return 'Listening';
    if($subcat == 'CS') return 'Creative Strategies';
  }
?>

  <div class="filters">
    <div class="col">
      <div>
        <a href="<?php echo url() ?>?c=research"><?php snippet('circle') ?> Research</a>
      </div>
      <div>
        <a href="<?php echo url() ?>?c=fieldwork"><?php snippet('triangle') ?> Fieldwork</a>
      </div>
      <div>
        <a href="<?php echo url() ?>?c=art"><?php snippet('rectangle') ?> Art</a>
      </div>
    </div>

    <div class="col">
      <?php foreach($subcats as $subcat): ?>
        <div>
          <a href="<?php echo url() ?>?s=<?php echo $subcat ?>">
            <span class="initial"><?php echo $subcat ?></span> <?php echo nameforsubcat($subcat); ?>
          </a>
        </div>
      <?php endforeach ?>
    </div>

    <div class="col"></div>
  </div>

  <style>
    body {
      padding-bottom: 12rem;
    }
    .table-header {
      position: sticky;
      top: -1px;
      background: white;
    }
    .filters {
      border-top: 1px solid;
      padding: 1.2rem 3.6rem 2.4rem;
      display: flex;
      background: white;
      position: fixed;
      bottom: 0; left: 0;
      width: 100%;
      max-width: 1480px;
    }
    .filters .col {
      flex: 1;
    }
    .filters .col:nth-child(1) {
    }
    .filters .col:nth-child(2) {
      margin-left: 2.5rem;
      flex: 5;
      column-count: 3;
    }
    .filters .col:nth-child(2) div {
      break-inside: avoid;
    }
    .initial {
      display: inline-block;
      width: 2em;
    }
    .shapes {
      display: inline-block;
      width: 2em;
    }
    .triangle, .circle, .rectangle {
      width: auto;
      height: 0.8em;
    }
</style>
<?php endif ?>
</main>
</body>
</html>
