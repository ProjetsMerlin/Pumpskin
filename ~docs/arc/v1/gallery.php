<?php include('includes/header.php');?>
  <!-- CSS lightgallery -->
<link rel="stylesheet" type="text/css" href="<?=$config['url'];?>vendor/lightgallery/dist/css/lightgallery.min.css">
<div class="container" data-url="<?=$config['url'];?>" data-version="<?= $config['version'];?>">
  <?php include('includes/menu.php');?>
  <div id="lightgallery" class="linter_gallery">
    <?php echo linter_show('img/gallery');/*"./".$_GET['repository']."/"*/?>
  </div>
  <!-- JS lightgallery -->
  <script src="<?=$config['url'];?>vendor/lightgallery/dist/js/lightgallery.min.js"></script>
  <script>
    lightGallery(document.getElementById('lightgallery'));
  </script>
</div>
<?php include('includes/footer.php');?>