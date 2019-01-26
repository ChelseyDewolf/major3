<header class="header">
  <h1><span class="hidden">Internationaal Straattheater Beveren</span></h1>
  <div class="logo-nav__container container">
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
    <div class="container slogan-button__container">
      <p class="slogan">Internationaal <br> Straattheaterfestival <br> Beveren</p>
      <a href="#countdown" class="button">Ontdek</a>
    </div>
  <div class="header__design-element container">
    <img src="././assets/img/design-element.png" alt="">
  </div>
  <div class="header__date container">
    <p>AUG <br> 24 - 25 - 26</p>
  </div>
</header>
<section class="countdown container" id="countdown">
  <h2 class="hidden">Countdown</h2>
    <div class="countdown__digites">
      <p class="countdown__digit"><strong class="highlight"><span class="remaining-days"></span></strong> days</p>
      <p class="countdown__digit"><strong class="highlight"><span class="remaining-hours"></span></strong> hours</p>
      <p class="countdown__digit"><strong class="highlight"><span class="remaining-minutes"></span></strong> min</p>
    </div>
  <p class="countdown__title">Strecht your legs, it's almost that time of the year again</p>
</section>
<section class="about container">
  <h2 class="hidden">Wat is het Internationaal Straattheaterfestival?</h2>
  <p class="about__text">Dit jaar vindt het jaarlijkse Internationaal Straattheaterfestival terug plaats. <br> Zoals gewoonlijk zijn er terug een tal van activiteiten, voorstellingen, straatacts en nog veel meer. <br>
  Er zullen dit jaar ook terug activiteiten zijn voor het gehele zin. <br> Meer weten? Bekijk dan zeker onze volledige site!</p>
</section>
<section class="uitgelicht">
  <h2 class="hidden">Uitgelicht</h2>
  <p class="uitgelicht__titel container">Uitgelicht</p>
  <div class="uitgelicht__bg container">
    <div class="uitgelicht-grid-container">
    <?php
          foreach($acts as $act){
            ?>
     <a class="act" href="index.php?page=detail&amp;id=<?php echo $act['id'];?>">
      <article class="act-grid-container">
        <div class="act-foto"><img class="foto" src="././assets/img/<?php echo $act['pic'];?>" alt=""></div>
          <div class="act-tekst">
            <h3 class="act-titel"><?php echo $act['show_name'] ?></h3>
            <div class="act-para">
              <p><?php echo $act['date'] ?></p>
              <p class="act-para__uur"><?php echo $act['hour'] ?></p>
          </div>
        </div>
          </article>
    </a>
      <?php
           }
           ?>
    </div>
  </div>
</section>
<section class="gratis">
  <h1 class="hidden">Gratis, voor het gehele gezin</h1>
  <div class="gratis__foto">
    <p class="container"><span class="gratis__foto__titel container">Gratis</span> <br> <span class="gratis__foto__text">Sfeer verzekerd voor het gehele gezin</span> </p>
  </div>
</section>
<section class="hoofdlocaties container">
  <h2 class="hidden">Hoofdlocaties</h2>
  <div class="locatie-grid-container">
  <div class="locatie-foto">
    <img class="locatie-foto__img" src="././assets/img/kaart.png" alt="">
  </div>
  <div class="locatie-padding"></div>
  <div class="locatie-padding-top"></div>
  <div class="locatie-padding-bottom"></div>
  <div class="locatie-titel uitgelicht__titel">Hoofdlocaties</div>
  <div class="locatie-adress">
   <div class="locatie">
    <p>Locatie 1 <br>
      Kolverikstraat 31 <br>
      8560 Wevelgem</p>
    </div>
    <p>Locatie 2 <br>
      Kolverikstraat 31 <br>
      8560 Wevelgem</p>
  </div>
  <div class="loactie-ways">
    <p class="ways">Gebruik <strong class="highlight">ways</strong> ter ere van <br> dit event!</p>
    <a href=""><img src="././assets/img/appstore.png" alt=""></a>
    <a href=""><img src="././assets/img/playstore.png" alt=""></a>
  </div>
</div>
  <div class="locatie-design">
    <img src="././assets/img/twee-design.png" alt="">
  </div>
</section>
<section class="vrijwilliger container">
  <h2 class="hidden">Schrijf je in als vrijwilliger</h2>
  <div class="grid-container">
  <div class="padding-top"></div>
  <div class="padding-bottom"></div>
  <div class="titel uitgelicht__titel">Help jij ook mee?</div>
  <div class="text vrijwilliger__text">Ons gehele festival wordt georganiseerd door vrijwilligers. <br>
    Daarom willen wij een warme oproep doen om extra <br>
    vrijwilligers aan te werven. Wil jij meehelpen aan dit fantastische event? <br>
    Schrijf je dan nu in!</div>
  <div class="emaileninput">
    <form action="" class="footer-form">
    <span class="error"></span>
    <div class="email-container">
      <input class="vrijwilliger__email" type="email" placeholder="E-mail" required>
      <input class="button vrijwilliger__button" type="submit" value="Verstuur">
      </div>
    </form>
  </div>
  <div class="img"><img src="././assets/img/volunteer.png" alt=""></div>
</div>
</div>

</section>


