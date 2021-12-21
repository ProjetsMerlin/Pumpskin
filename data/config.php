<?php
$titre = "Pupmskin";
$description = "Pupmskin est un template html-css-js de base pour commencer tout projet web optant pour une strucure simple, performante et accessible au plus grand nombre";
$version = 5;
$favicon = "favicon.png";

if($_SERVER['SERVER_NAME'] === 'localhost') {
  $url = "htt://localhost/Site/v5/";
  $map_key = "AIzaSyDuiSMyJ5DOMLl39CI9OLnRJUz94cVLXpw";
  $cle_site = '6Ldqy9UZAAAAACvXBVPnrlFRmwwzkyI8oKN7fQC8';
  $ga = "";
}
else {
  $url = 'https://pumpskin.lintermediaire.be/';
  $map_key = 'AIzaSyA0wre-eaoqvUnakdX2y5FzS3uFEGlLiXo';
  $cle_site = '6Le7bcQUAAAAAK-47NXDjYLa3EbVSt0F26QRREfx';
  $ga = "UA-...";
}

/* items Portfolio */
$items = array('20','20','20','20','20','25','25','25','25','50','50');