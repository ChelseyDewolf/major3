<header class="bg">
<div class="logo-nav__container nav__programma container">
<a href="index.php"><img class="logo" src="././assets/img/logo.png" alt=""></a>
  <nav class="navigation">
    <ul class="navigation__list">
      <li class="navigation__list__item">
        <a href="index.php">Home</a>
      </li>
      <li class="navigation__list__item">
        <a href="index.php?page=programma">Programma</a>
      </li>
      <li class="navigation__list__item">
        <a href="">Praktisch</a>
      </li>
      <li class="navigation__list__item">
        <a href="">Contact</a>
      </li>
    </ul>
  </nav>
  </div>
  </header>
  <section class="detail container">
    <h2 class="hidden">Detail</h2>
  <div class="detail-grid-container">
    <h3 class="detail-titel"><a class="detail-back__button" href="index.php?page=programma"></a><span class="detail-titel__span"><?php echo $programmas['show_name'];?></span></h3>
      <div class="detail-img">
          <p class="datum"><?php echo $programmas['dag'];?></p>
          <p class="datum rechts"><?php echo $programmas['hour'];?></p>
        <img class="foto" src="././assets/img/<?php echo $programmas['pic'];?>" alt="">
      </div>
      <div class="detail-tekst">
      <a href=""><img class="" src="././assets/img/facebook-white.png" alt=""></a>
     <a href=""> <img class="" src="././assets/img/twitter-white.png" alt=""></a>
      <a href=""><img class="" src="././assets/img/instagram-white.png" alt=""></a>
        <p><?php echo $programmas['info'];?></p>
      </div>
      <div class="detail-para">
        <a class="website" href="https:/<?php echo $programmas['site'];?>"><?php echo $programmas['site'];?></a>
        <p class="detail-para__locatie">Locatie: <br>
        <?php echo $programmas['location_name'];?></p>
      </div>
  </div>
  </section>
  <section class="gelijkaardige-acts container">
    <h2 class="gelijkaardige-acts__titel">Misschien <strong class="highlight">bevallen</strong> deze acts u beter?</h2>
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
