<header class="bg">
<div class="logo-nav__container nav__programma container">
<a href="index.php"><img class="logo" src="././assets/img/logo.png" alt=""></a>
  <nav class="navigation">
    <ul class="navigation__list">
      <li class="navigation__list__item">
        <a class="navigation__list__item__a" href="index.php">Home</a>
      </li>
      <li class="navigation__list__item">
        <a class="navigation__list__item__a" href="index.php?page=programma">Programma</a>
      </li>
      <li class="navigation__list__item">
        <a class="navigation__list__item__a" href="">Praktisch</a>
      </li>
      <li class="navigation__list__item">
        <a class="navigation__list__item__a" href="">Contact</a>
      </li>
    </ul>
  </nav>
  </div>
  </header>
  <section class="detail container">
    <h2 class="hidden">Detail</h2>
  <div class="detail-grid-container">
    <h3 class="detail-titel">
      <a class="detail-back__button" href="index.php?page=programma"><div class="test"></div></a>
      <span class="detail-titel__span"><?php echo $programmas['show_name'];?></span></h3>
      <div class="detail-img">
          <p class="datum"><?php echo $programmas['dag'];?></p>
          <p class="datum rechts"><?php echo $programmas['hour'];?></p>
        <img class="foto" src="././assets/img/<?php echo $programmas['pic'];?>" alt="">
      </div>
      <div class="detail-tekst">
      <div class="detail-tekst__social">
      <a href=""><img class="" src="././assets/img/facebook.png" alt=""></a>
      <a href=""><img class="pad" src="././assets/img/twitter.png" alt=""></a>
      <a href=""><img class="pad" src="././assets/img/instagram.png" alt=""></a>
      </div>
        <p><?php echo $programmas['info'];?></p>
      </div>
      <div class="detail-para">
        <a class="website" href="https:/<?php echo $programmas['site'];?>"><?php echo $programmas['site'];?></a>
        <p class="detail-para__locatie">Locatie: <br>
        <span class="detail-para__fontsize"><?php echo $programmas['location_name'];?></span></p>
      </div>
      <?php
          if($programmas['showid'] == '18' || $programmas['showid'] == '1') {
            ?>
              </div>
              <div class="extra-content-grid-container">
              <div class="extra-content-grid-tekst"><p><?php echo $programmas['extra_info'];?></p></div>
              <div class="extra-content-foto-een extra"><img class="extra_img" src="././assets/img/<?php echo $programmas['extra_pic_een'];?>" alt=""></div>
              <div class="extra-content-foto-twee extra"><img class="extra_img" src="././assets/img/<?php echo $programmas['extra_pic_twee'];?>" alt=""></div>
              <div class="extra-content-foto-drie extra"><img class="extra_img" src="././assets/img/<?php echo $programmas['extra_pic_drie'];?>" alt=""></div>
            </div>
            <?php
        }
      ?>
  </section>
   <section class="gelijkaardige-acts container">
    <h2 class="gelijkaardige-acts__titel">Misschien <strong class="highlight">&nbsp;bevallen&nbsp;</strong> deze acts u beter?</h2>
    <div class="gelijkaardige-grid-container">
    <?php
          foreach($randomActs as $randomAct){
            ?>
      <a class="act" href="index.php?page=detail&amp;id=<?php echo $randomAct['id'];?>">
        <article class="gelijkaardige-act-grid-container">
          <div class="gelijkaardige-act-foto"><img class="foto" src="././assets/img/<?php echo $randomAct['pic'];?>" alt=""></div>
            <div class="gelijkaardige-act-tekst">
              <h3 class="gelijkaardige-act-titel"><?php echo $randomAct['show_name'];?></h3>
              <div class="gelijkaardige-act-para">
                <p><?php echo $randomAct['date'];?></p>
                <p class="gelijkaardige-act-para__uur"><?php echo $randomAct['hour'];?></p>
            </div>
          </div>
        </article>
      </a>
      <?php
        }
      ?>
    </div>
    <a class="button gelijkaardige-acts__button" href="index.php?page=programma">Programma</a>
  </section>
