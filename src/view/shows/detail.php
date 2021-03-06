<header class="bg">
<div class="logo-nav__container nav__programma container">
<a href="index.php"><img class="logo" src="././assets/img/logo.png" alt="Logo"></a>
  <nav class="navigation">
    <ul class="navigation__list">
      <li role="menuitem" class="navigation__list__item">
        <a class="navigation__list__item__a" href="index.php">Home</a>
      </li>
      <li role="menuitem" class="navigation__list__item">
        <a class="navigation__list__item__a" href="index.php?page=programma">Programma</a>
      </li>
      <li role="menuitem" class="navigation__list__item">
        <a class="navigation__list__item__a" href="">Praktisch</a>
      </li>
      <li role="menuitem" class="navigation__list__item">
        <a class="navigation__list__item__a" href="">Contact</a>
      </li>
    </ul>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn">&times;</a>
        <div class="overlay-content">
          <a href="index.php?">Home</a>
          <a href="index.php?page=programma">Programma</a>
          <a href="#">Praktisch</a>
          <a href="#">Contact</a>
        </div>
  </div>
<span class="testje">Menu &#9776;</span>
  </nav>
  </div>
  </header>
  <section class="detail">
    <div class="container">
    <h2 aria-hidden="true" class="hidden">Detail</h2>
  <div class="detail-grid-container">
    <h3 class="detail-titel">
      <a class="detail-back__button" href="index.php?page=programma"><div class="test"></div></a>
      <span class="detail-titel__span"><?php echo $programmas['show_name'];?></span></h3>
      <div class="detail-img">
          <p class="datum"><?php echo $programmas['dag'];?></p>
          <p class="datum rechts"><?php echo $programmas['hour'];?></p>
        <img class="foto foto-twee" src="././assets/img/<?php echo $programmas['pic'];?>" alt="Detail foto van de act '<?php echo $programmas['pic'];?>'">
      </div>
      <div class="detail-tekst">
      <div class="detail-tekst__social">
      <a href=""><img class="" src="././assets/img/facebook.png" alt="Link naar Facebook"></a>
      <a href=""><img class="pad" src="././assets/img/twitter.png" alt="Link naar Twitter"></a>
      <a href=""><img class="pad" src="././assets/img/instagram.png" alt="Link naar Instagram"></a>
      </div>
        <p class="data">Locatie: <br><?php echo $programmas['location_name'];?></p>
        <a class="data-twee" href="https://"><?php echo $programmas['site'];?></a>
        <p><?php echo $programmas['info'];?></p>
      </div>
      <div class="detail-para">
        <a class="website" href="https:/<?php echo $programmas['site'];?>"><?php echo $programmas['site'];?></a>
        <p class="detail-para__locatie gelijkaardige-act-date-grid">Locatie: <br>
        <span class="detail-para__fontsize gelijkaardige-act-date-grid"><?php echo $programmas['location_name'];?></span></p>
      </div>
      <?php
          if($programmas['showid'] == '18' || $programmas['showid'] == '1') {
            ?>
              </div>
              <div class="extra-content-grid-tekst"><p><?php echo $programmas['extra_info'];?></p></div>
              <div class="extra-content-grid-container">
              <div class="extra-content-foto-een extra"><img class="extra_img" src="././assets/img/<?php echo $programmas['extra_pic_een'];?>" alt="Extra foto van de act '<?php echo $programmas['extra_pic_een'];?>'"></div>
              <div class="extra-content-foto-twee extra"><img class="extra_img" src="././assets/img/<?php echo $programmas['extra_pic_twee'];?>" alt="Extra foto van de act '<?php echo $programmas['extra_pic_een'];?>'"></div>
              <div class="extra-content-foto-drie extra"><img class="extra_img" src="././assets/img/<?php echo $programmas['extra_pic_drie'];?>" alt="Extra foto van de act '<?php echo $programmas['extra_pic_een'];?>'"></div>
            </div>
            <?php
        }
      ?>
      </div>
  </section>
   <section class="gelijkaardige-acts container">
    <h2 class="gelijkaardige-acts__titel">Misschien bevallen deze acts u beter?</h2>
    <div class="gelijkaardige-grid-container">
    <?php
          foreach($randomActs as $randomAct){
            ?>
      <a class="act" href="index.php?page=detail&amp;id=<?php echo $randomAct['id'];?>">
        <article class="gelijkaardige-act-grid-container">
          <div class="gelijkaardige-act-foto"><img class="foto" src="././assets/img/<?php echo $randomAct['pic'];?>" alt="Foto van de voorgestelde act '<?php echo $randomAct['pic'];?>'"></div>
            <div class="gelijkaardige-act-tekst">
              <h3 class="gelijkaardige-act-titel"><?php echo $randomAct['show_name'];?></h3>
              <div class="gelijkaardige-act-para">
                <p class=""><?php echo $randomAct['date'];?></p>
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
