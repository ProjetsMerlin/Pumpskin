<?php require_once('data/config.php');?>
<!DOCTYPE html>
<html lang="fr-BE">
<head>
  <meta charset="UTF-8">
  <title><?= $titre;?></title>
  <meta name="viewport" content="width=device-width, initial-scale=0.9,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?= $description;?>">
  <meta name="robots" content="all">
  <meta name="author" content="lintermediaire.be">
  <!--Balises OG-->
  <meta property="og:title" content="<?= $titre;?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $url;?>">
  <meta property="og:image" content="<?= $favicon;?>">
  <!---->
  <link rel="shortcut icon" type="image/x-icon" href="<?= $favicon;?>">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/vendor/print.min.css" type="text/css" media="print">
  <link rel="stylesheet" type="text/css" href="css/main.css?v=<?= $version;?>">
</head>
<body>
  <?php if(!empty($ga)):?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', '<?= $ga;?>', 'auto');
  ga('send', 'pageview');
</script>
<?php endif;?>