Intro
=====
Pumpskin est mon framework CSS perso. Vous pouvez avoir un aperçu des éléments ici : https://pumpskin.lintermediaire.be/

Ce dépôt contient un ensemble de fichiers et dossier organisés et qui permettront de donner un aperçu du framework css dont il est question.
Vous trouverez ci-dessous sa structure.

Installation
============
Placez ce code à la bonne place dans votre HTML ;
```
<link rel="stylesheet" href="https://pumpskin.lintermediaire.be/style/css/style.css" />

<script src="https://pumpskin.lintermediaire.be/js/main.js"></script>
<script src="https://pumpskin.lintermediaire.be/js/filter.js"></script>
```

Et éventuellement les dépendances* si vous souhaitez vous en servir.


Structure
=========

js
---
  vendor : 3 librairies externes *
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
      + base (Où vous trouverez les variables, le style de base de la typo & les variables)
      + elements
      + position (Le positionnement et la taille des éléments. C'est aussi là que vous trouverez les propriétés des flex-boxes)
    
    + theme
        + my_theme: c'est ici qu'il est possible de customiser votre propre thème