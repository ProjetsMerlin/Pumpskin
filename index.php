<?php require_once('include/head.php');?>
<div class="progess_bar"></div>
<main class="main test">
  <?php require_once('include/header.php');?>
  <section id="Home" class="bg_primary">
    <div class="container_block center">
      <h1><?= $titre;?></h1>
    </div>
  </section>
  <section id="Introduction" class="bg_primary container_block-lr">
    <div class="container container--lg row jc_bet ai_cen">
      <div class="container_block-r col--50">
        <h2>h2 titre</h2>
        <p class="text">
          Le titre ci-dessus à la classe "<em>bold</em>" "<em>upper</em>" et "<em>familySerif</em>"
          <br><br>
          Quand au texte, il a une line-height 150% et à la classe <em>familSans</em><br><br>
          Lorem <strong>balise strong</strong> avec la classe "<em>bold</em>", eget id Strasbourg météor yeuh. munster leverwurscht ac geht's lacus barapli ch'ai réchime Racing. rossbolla <span class="under">mot souligné</span> avec la classe "<em>under</em>" amet, hopla rhoncus et voici <a href="#">un lien</a>.
        </p>
      </div>
      <div class="container_block-tb col--50">
        <img class="w--100" src="images/image_02_300x200.jpg" alt="<?= $titre;?>" title="<?= $titre;?>"/>
      </div>
    </div>
  </section>
  <section id="About" class="bg_primary container_block-lr">
    <div class="container container--lg row-r jc_bet ai_cen">
      <div class="container_block-tb col--50">
        <h2>Row reverse</h2>
        <p class="text text--secondary">
          Lorem Elsass ipsum dignissim vulputate aliquam wie DNA, eget id Strasbourg météor yeuh. munster leverwurscht ac geht's lacus barapli ch'ai réchime Racing. rossbolla flammekueche Pellentesque amet, hopla rhoncus schpeck semper libero! hoplageiss Wurschtsalad sed lotto-owe gal libero, s'guelt eleifend Morbi Gal. Commodo non gewurztraminer salu bredele baeckeoffe elementum et sed sit.
        </p>
      </div>
      <div class="container_block-tb container_block-r col--50">
        <img class="w--100" src="images/image_01_600x400.jpg" alt="<?= $titre;?>" title="<?= $titre;?>"/>
      </div>
    </div>
  </section>
  <section id="Slider" class="bg_primary container_block-tb">
    <div class="container_block-tb center">
      <h2 class="main_title">Slider</h2>
    </div>
    <div class="container container--lg slider">
      <?php for ($i=0; $i < 7; $i++):?>
        <a href="#" class="col--30 card">
          <div class="card__img">
            <img class="w--100" src="images/image_02_300x200.jpg" title="<?= $titre;?>" alt="<?= $titre;?>">
          </div>
          <div class="container_block card__content">
            <h4 class="title__card">Titre Card <?= $i + 1;?></h4>
            <strong class="subtitle__card">1<?= $i;?>/0<?= $i;?>/2020</strong>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ab error saepe, dolor, magnam ipsum accusamus tempore veritatis cum aperiam! Numquam maiores rerum, ex officia omnis nesciunt, odit deserunt cupiditate?</p>
          </div>
        </a>
      <?php endfor;?>
    </div>
  </section>
  <section id="Popup" class="bg_secondary">
    <div class="container_block center">
      <h3 class="color_light">CTA</h3>
      <p class="container container--sm color_light">
        Lorem Elsass ipsum dignissim vulputate aliquam wie DNA, eget id Strasbourg météor yeuh. munster leverwurscht ac geht's lacus barapli ch'ai réchime Racing. rossbolla flammekue.
      </p>
      <br><br>
      <div class="container container--sm center">
        <a class="btn btn--large js_popup" href="#">Test popup</a>
      </div>
    </div>
  </section>
  <section id="Services" class="container_block">
    <div class="container_block center">
      <h2 class="main_title">Services</h2>
    </div>
    <div class="container container--lg row jc_bet ai_sta">
      <?php for ($i=0; $i < 3; $i++):?>
        <a href="#" class="col--30 card">
          <div class="card__img">
            <img class="w--100" src="images/image_02_300x200.jpg" title="<?= $titre;?>" alt="<?= $titre;?>">
          </div>
          <div class="container_block card__content">
            <h4 class="title__card">Titre Card <?= $i + 1;?></h4>
            <strong class="subtitle__card">1<?= $i;?>/0<?= $i;?>/2020</strong>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ab error saepe, dolor, magnam ipsum accusamus tempore veritatis cum aperiam! Numquam maiores rerum, ex officia omnis nesciunt, odit deserunt cupiditate?</p>
          </div>
        </a>
      <?php endfor;?>
    </div>
  </section>
  <section id="video">
    <div class="center container_block">
      <h2 class="main_title">Test media</h2>
    </div>
    <div class="container container-lg row jc_bet ai_cen">
      <div class="container_block col--50">
        <h4>Example Video</h4>
        <p class="text">
          Lorem Elsass ipsum dignissim vulputate aliquam wie DNA, eget id Strasbourg météor yeuh. munster leverwurscht ac geht's lacus barapli ch'ai réchime Racing. rossbolla flammekueche Pellentesque amet, hopla rhoncus schpeck semper libero. Pfourtz ! hoplageiss Wurschtsalad sed lotto-owe gal libero, s'guelt eleifend Morbi Gal. pellentesque morbi quam, varius nullam knepfle quam. commodo non gewurztraminer salu bredele Yo<br><br>
          <strong>Before</strong><br>
          vielmols ornare baeckeoffe elementum et sed sit id, hopla adipiscing leo placerat ullamcorper suspendisse dolor risus, hopla consectetur nüdle
          <br><br>
          <strong>After</strong><br>
          vielmols ornare baeckeoffe elementum et sed sit id, hopla adipiscing leo placerat ullamcorper suspendisse dolor risus, hopla consectetur nüdle blottkopf, dui kougelhopf Chulien Mauris picon
        </p>
      </div>
      <div class="col--50">
        <div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/K0GxmnFdjfE'}"></div>
      </div>
    </div>
  </section>
  <section id="Faq" class="container_block accordion">
    <div class="center">
      <h3 class="main_title">FAQ</h3>
    </div>
    <div class="container container--lg container_block-tb">
      <div id="accordion_1" class="accordion_items">
        <h3 class="accordion_title js_title_accordion">Accordeon</h3>
        <div data-accordion="accordion_1" class="accordion_content">
          <p >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum placeat doloremque minus, cum deleniti ab quia sequi reprehenderit ex quo saepe nobis, magnam eos error dolor quas, necessitatibus in expedita?
          </p>
        </div>
      </div>
      <div id="accordion_2" class="accordion_items">
        <h3 class="accordion_title js_title_accordion">Accordéon II</h3>
        <div data-accordion="accordion_2" class="accordion_content">
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicins error dolor quas, necessitatibus in expedita?
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="Portfolio" class="bg_primary container_block portfolio filter">
    <div class="container_block-b center">
      <h2 class="main_title">Portoflio</h2>
      <div class="container container--sm container_block-tb">
        <a class="js_filter" data-filter="all" href="#All">All</a>
        <?php foreach (array_unique($items) as $item):?>
          <a class="js_filter" data-filter="<?= $item;?>" href="#<?= $item;?>"><?= $item;?></a>
        <?php endforeach;?>
      </div>
    </div>
    <div class="container container--lg row jc_bet ai_sta">
      <?php foreach ($items as $key => $item):?>
        <a data-type="<?= $item;?>" id="<?= $key;?>_<?= $item;?>" href="#" class="col--<?= $item;?> link_portfolio js_filter_items">
          <img class="img_portfolio" src="images/image_03_300x300.jpg" alt="<?= $titre;?>" title="<?= $titre;?>"/>
        </a>
      <?php endforeach;?>
    </div>
  </section>
  <section id="Before-after">
    <div class="center container_block">
      <h2 class="main_title">Test media</h2>
    </div>
    <div class="container container-lg row jc_bet ai_cen">
      <div class="col--50">
        <div id="beer-slider" class="beer-slider" data-beer-label="" data-beer-start="50">
          <img class="w--100" src="images/image_01_1920-1441.jpg" title="" alt="">
          <div class="beer-reveal" data-beer-label="">
            <img class="w--100 black-and-white" src="images/image_01_1920-1441.jpg">
          </div>
        </div>
      </div>
      <div class="container_block col--50">
        <h4>Example Text</h4>
        <p class="text">
          Lorem Elsass ipsum dignissim vulputate aliquam wie DNA, eget id Strasbourg météor yeuh. munster leverwurscht ac geht's lacus barapli ch'ai réchime Racing. rossbolla flammekueche Pellentesque amet, hopla rhoncus schpeck semper libero. Pfourtz ! hoplageiss Wurschtsalad sed lotto-owe gal libero, s'guelt eleifend Morbi Gal. pellentesque morbi quam, varius nullam knepfle quam. commodo non gewurztraminer salu bredele Yo<br><br>
          <strong>Before</strong><br>
          vielmols ornare baeckeoffe elementum et sed sit id, hopla adipiscing leo placerat ullamcorper suspendisse dolor risus, hopla consectetur nüdle
          <br><br>
          <strong>After</strong><br>
          vielmols ornare baeckeoffe elementum et sed sit id, hopla adipiscing leo placerat ullamcorper suspendisse dolor risus, hopla consectetur nüdle blottkopf, dui kougelhopf Chulien Mauris picon
        </p>
      </div>
    </div>
  </section>
  <section id="Contact">
    <div class="container row jc_bet ai_str">
      <div class="col--50">
        <form class="container_block form" action="index.php" method="get">
          <div class="container_block">
            <h3>Contact</h3>
          </div>
          <div class="row container_block">
            <div class="row col--50 input__form">
              <label class="w--100" for="name">Name</label>
              <input id="name" class="input w--90" type="text" placeholder="Your Name" required name="name">
            </div>

            <div class="row col--50 input__form">
              <label class="w--100" for="firstName">First Name</label>
              <input id="firstName" class="input w--90" type="text" placeholder="Your First Name" required name="firstName">
            </div>

            <div class="row col--50 input__form">
              <label class="w--100" for="name">Email</label>
              <input id="email" class="input w--90" type="email" placeholder="Your Email" required name="email">
            </div>

            <div class="row col--50 input__form">
              <label class="w--100" for="phone">Phone</label>
              <input id="phone" class="input w--90" type="phone" placeholder="Your Phone" required name="phone">
            </div>

            <div class="row w--100 input__form">
              <label class="w--100" for="message">Message</label>
              <textarea id="message" class="textarea w--95" placeholder="Your message" required name="message"></textarea>
            </div>
            <div class="w--100 input__form">
              <button type="submit" class="btn btn--large">Envoyer</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col--50">
        <div id="map" class="map"></div>
      </div>
    </div>
  </section>
  <?php require_once('include/aside.php');?>
  <?php require_once('include/cookies.php');?>
</main>
<?php require_once('include/footer.php');?>