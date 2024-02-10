Content
=======

Pumpskin contient un ensemble de fichier et dossier organisés et qui permettront de donner un aperçu du framework css dont il est question.
Vous trouverez ci-dessous sa strucutre

Structure
=========
img
  les images du template

js
  /vendor : 3 librairies externes
    beerSlider : qui permet de réaliser un "avant-après" -> https://github.com/pehaa/beerslider
    SlickSlider : pour la mise en place de sliders -> https://kenwheeler.github.io/slick/
    YTPlayer : qui permet l'affichage de vidéos -> https://github.com/pupunzi/jquery.mb.YTPlayer

  + 3 fichiers distincts
    filter.js : le filtre du blog
    map.js : la config de la GoogleMap
    main.js : la congig générale

  style
  /css : les fichiers compilés
    /vendor : styles des librairies externes précitées
      + reset css : afin de mettre à zéro les styles HTML par défaut : -> https://meyerweb.com/eric/tools/css/reset/

  /scss
    /pumpskin : le framework en question et que je divise en trois catégories qui parlent d'elles-mêmes
      /base
      /elements
      /position
    
    theme : et c'est ici qu'il est possible de customiser vos propores thèmes
      my_theme