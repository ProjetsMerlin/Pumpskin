<?php
/*FUNCTIONS*/
/*créé un exerpt*/
function linter_exerpt($content,$nbr_characters) {
  $content_excerpt = substr($content,0,$nbr_characters);
  return $content_excerpt;
}

/*créé un slug*/
function linter_slug($slug_titre) {
  /*ajout du tiret*/
  $slug_titre = preg_replace('~[^\pL\d]+~u', '-', $slug_titre);
  /*utf8*/
  $slug_titre = iconv('utf-8', 'us-ascii//TRANSLIT', $slug_titre);
  /*suppression des caractères spéciaux*/
  $slug_titre = preg_replace('~[^-\w]+~', '', $slug_titre);
  /*suppression des espaces*/
  $slug_titre = trim($slug_titre, '-');
  /*suppression des tiraits en double*/
  $slug_titre = preg_replace('~-+~', '-', $slug_titre);
  /*suppression des majuscule*/
  $slug_titre = strtolower($slug_titre);
  return $slug_titre;
}

/*URL DU SITE*/
function linter_url() {
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://";
  }
  else {
    $url = "http://";
  }
  $url .= $_SERVER['HTTP_HOST'];

  $url .= $_SERVER['REQUEST_URI'];

  return $url;
}

/*GALLERY*/
function linter_show($repository='img/gallery') {
  if($_GET['repository']) {
    $repository = $_GET['repository'];
  }
  $open_repository = opendir($repository);
  while($file = readdir($open_repository)) {
    if($file != '.' && $file != '..' && !is_dir($dirname.$file)) {
      $results .= '
      <a class="linter_gallery__linter_gallery linter_gallery_item" href="'.$repository.''.$dirname.'/'.$file.'">
      <img class="linter_gallery__linter_gallery linter_gallery_img" src="'.$repository.''.$dirname.'/'.$file.'" alt="'.$dirname.'" title="'.$dirname.'">
      </a>'.'';
    }
  }
  closedir($open_repository);
  return $results;
}