<?php
$serveur_bdd = "localhost";
$nom_bdd = "le_mas_emile";
$login_bdd = "root";
$pass_bdd = "root";
$bdd_inscrits = "le_mas_emile_users";

try {
  $bdd = new PDO (
    'mysql:host='.$serveur_bdd.';
    dbname='.$nom_bdd.';
    charset=utf8',
    ''.$login_bdd.'',
    ''.$pass_bdd.''
  );
  $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
  $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}
catch (PDOException $e) {
  exit('Erreur de connexion: '.$e->getmessage());
}

$cols_title = array('ID','Date','Nom','Prénom','Email','Téléphone','Statut');

function linter_run_data($donnes,$html) {
  foreach ($donnes as $key => $value) {
    $outside .= '<'.$html.'>';
    $outside .= $value;
    $outside .= '</'.$html.'>';
  }
  return $outside;
}

$inscrits = $bdd->prepare('SELECT * FROM '.$bdd_inscrits.' ORDER BY subscribe_date');
$inscrits->execute();
$inscriptions = $inscrits->fetchAll();