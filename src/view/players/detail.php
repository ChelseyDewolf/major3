<header class="bg">
<div class="logo-nav__container nav__programma container">
  <img class="logo" src="././assets/img/logo.png" alt="">
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
        <div>
        <p class="datum"><?php echo $programmas['dag'];?></p>
        <img class="foto" src="././assets/img/stock-foto.jpg" alt="">
        </div>
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
    <h2 class="gelijkaardige-acts__titel"><span class="highlight">Gelijkaardige</span> voorstellingen op dezelfde dag</h2>
    <a class="button gelijkaardige-acts__button" href="index.php?page=programma">Programma</a>
  </section>
