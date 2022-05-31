<?php include('includes/header.php');?>
<div class="container" data-url="<?= linter_url();?>" data-version="<?= $config['version'];?>">
  <?php include('includes/menu.php');?>
  <main>
    <?php include('elements/card.php');?>
  </main>
</div>
<?php include('includes/footer.php');?>