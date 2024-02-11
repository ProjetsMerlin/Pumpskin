Intro
=====
Pumpskin est mon framework CSS perso. Vous pouvez avoir un aperçu des éléments ici : <a target="_blank" href="https://pumpskin.lintermediaire.be/" title="pumpskin" >https://pumpskin.lintermediaire.be/</a>

Ce dépôt contient un ensemble de fichiers et dossier organisés et qui permettront de donner un aperçu du framework css dont il est question.
Vous trouverez ci-dessous sa structure

Installation
============
https://pumpskin.lintermediaire.be/style/css/style.css


Structure
=========

js
---
  vendor : 3 librairies externes
  + jQuery : pour écrire plus facilement le Javascript : https://jquery.com/
  + beerSlider : qui permet de réaliser un "avant-après" -> https://github.com/pehaa/beerslider
  + SlickSlider : pour la mise en place de sliders -> https://kenwheeler.github.io/slick/

  et 3 fichiers distincts
  + filter.js : le filtre du blog
  + map.js : la config de la GoogleMap
  + main.js : la config générale


style
-----
  + css : les fichiers compilés
    + vendor : styles des librairies externes précitées
      + reset css : afin de mettre à zéro les styles HTML par défaut : -> https://meyerweb.com/eric/tools/css/reset/

  + scss
    + pumpskin : le framework en question et que je divise en trois catégories qui parlent d'elles-mêmes
      + base
      + elements
      + position
    
    + theme
        + my_theme: c'est ici qu'il est possible de customiser votre propre thème