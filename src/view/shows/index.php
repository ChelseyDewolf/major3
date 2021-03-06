<header class="header">
  <h1><span aria-hidden="true" class="hidden">Internationaal Straattheater Beveren</span></h1>
  <div class="logo-nav__container container">
  <img class="logo" src="././assets/img/logo.png" alt="Logo">
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
        <a href="javascript:void(0)" class="closebtn"">&times;</a>
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
  <div class="header-content__responsive">
    <div class="container slogan-button__container">
      <p class="slogan">Internationaal <br> Straattheaterfestival <br> Beveren</p>
      <a href="#countdown" class="button">Ontdek</a>
    </div>
  <div class="header__design-element container">
    <img src="././assets/img/design-element.png" alt="Desing element">
  </div>
  <div class="header__date container">
    <p>AUG <br> 24 - 25 - 26</p>
  </div>
  </div>
</header>
<section class="countdown container" id="countdown">
  <h2 aria-hidden="true" class="hidden">Countdown</h2>
    <div class="countdown__digites">
      <p class="countdown__digit"><strong class="highlight"><span class="remaining-days"></span></strong><span class="countdown__para">days</span></p>
      <p class="countdown__digit__punt">:</p>
      <p class="countdown__digit"><strong class="highlight"><span class="remaining-hours"></span></strong><span class="countdown__para">hours</span></p>
      <p class="countdown__digit__punt">:</p>
      <p class="countdown__digit"><strong class="highlight"><span class="remaining-minutes"></span></strong><span class="countdown__para">min</span></p>
    </div>
    <div class="border"></div>
  <p class="countdown__title">Strecht your legs, it's almost that time of the year again</p>
</section>
<section class="about container">
  <h2 aria-hidden="true" class="hidden">Wat is het Internationaal Straattheaterfestival?</h2>
  <p class="about__text">Dit jaar vindt het jaarlijkse Internationaal Straattheaterfestival terug plaats. <br> Zoals gewoonlijk zijn er terug een tal van activiteiten, voorstellingen, straatacts en nog veel meer. <br>
  Er zullen dit jaar ook terug activiteiten zijn voor het hele gezin. <br> Meer weten? Bekijk dan zeker onze volledige site!</p>
</section>
<section class="uitgelicht">
  <h2 aria-hidden="true" class="hidden">Uitgelicht</h2>
  <p class="uitgelicht__titel container">Uitgelicht</p>
  <div class="uitgelicht__bg container">
    <div class="uitgelicht-grid-container">
    <?php
          foreach($acts as $act){
            ?>
     <a class="act" href="index.php?page=detail&amp;id=<?php echo $act['id'];?>">
      <article class="act-grid-container">
        <div class="act-foto"><img class="foto" src="././assets/img/<?php echo $act['pic'];?>" alt="Afbeelding van de act '<?php echo $act['pic'];?>'"></div>
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
  <div class="uitgelicht-button">
    <a href="index.php?page=programma" class="button">Programma</a>
    </div>
</section>
<section class="gratis">
  <h1 aria-hidden="true" class="hidden">Gratis, voor het hele gezin</h1>
  <div class="gratis__foto">
    <p class="container"><span class="gratis__foto__titel container">Gratis</span> <br> <span class="gratis__foto__text">Sfeer verzekerd voor het gehele gezin</span> </p>
  </div>
</section>
<section class="hoofdlocaties container">
  <h2 aria-hidden="true" class="hidden">Hoofdlocaties</h2>

  <div class="responsive-locatie-grid-container">
    <div class="responsive-locatie-titel uitgelicht__titel">Hoofdlocaties</div>
    <div class="responsive-locatie-adress">
    <div class="responsive-locatie">
      <p>Locatie 1 <br>
        Donkvijverstraat 30 <br>
        9120 Bevern</p>
      </div>
      <p class="responsive-locatie-een">Locatie 2 <br>
        Diedrik Van Bevernlaan <br>
        9120 Beveren</p>
    </div>
    <div class="responsive-loactie-ways">
      <p class="responsive-ways">Gebruik <strong class="highlight">ways</strong> ter ere van <br> dit event!</p>
      <a class="responsive-ways__img" href=""><img src="././assets/img/appstore.png" alt="Link naar de Appstore"></a>
      <a href=""><img src="././assets/img/playstore.png" alt="Link naar de Playstore"></a>
    </div>
  </div>

  <div class="locatie-grid-container">
  <div class="locatie-foto">
    <img class="locatie-foto__img" src="././assets/img/kaart.png" alt="Detailkaart van het centrum van Beveren">
  </div>
  <div class="locatie-padding"></div>
  <div class="locatie-padding-top"></div>
  <div class="locatie-padding-bottom"></div>
  <div class="locatie-titel uitgelicht__titel">Hoofdlocaties</div>
  <div class="locatie-adress">
   <div class="locatie">
    <p>Locatie 1 <br>
      Donkvijverstraat 30 <br>
      9120 Bevern</p>
    </div>
    <p>Locatie 2 <br>
      Diedrik Van Bevernlaan <br>
      9120 Beveren
  </div>
  <div class="loactie-ways">
    <p class="ways">Gebruik <strong class="highlight">ways</strong> ter ere van <br> dit event!</p>
    <a href=""><img src="././assets/img/appstore.png" alt="Link naar de Appstore"></a>
    <a href=""><img src="././assets/img/playstore.png" alt="Link naar de Playstore"></a>
  </div>
</div>
  <div class="locatie-design">
    <img class="locatie-design__img" src="././assets/img/twee-design.png" alt="Etra design element">
  </div>
</section>
<section class="vrijwilliger container">
  <h2 aria-hidden="true" class="hidden">Schrijf je in als vrijwilliger</h2>

  <div class="responsive-grid-container">
  <div class="responsive-titel uitgelicht__titel">Help jij ook mee?</div>
  <div class="responsive-text vrijwilliger__text">Ons hele festival wordt georganiseerd door vrijwilligers. <br>
    Daarom willen wij een warme oproep doen om extra <br>
    vrijwilligers aan te werven. Wil jij meehelpen aan dit fantastische event? <br>
    Schrijf je dan nu in!</div>
  <div class="responsive-emaileninput">
    <form action="" class="footer-form">
    <span class="error zwart"></span>
    <div class="responsive-email-container">
      <input class="responsive-vrijwilliger__email" type="email" placeholder="E-mail" required>
      <input class="button responsive-vrijwilliger__button" type="submit" value="Verstuur">
      </div>
    </form>
  </div>
</div>
</div>

  <div class="grid-container">
  <div class="padding-top"></div>
  <div class="padding-bottom"></div>
  <div class="titel uitgelicht__titel">Help jij ook mee?</div>
  <div class="text vrijwilliger__text">Ons hele festival wordt georganiseerd door vrijwilligers. <br>
    Daarom willen wij een warme oproep doen om extra <br>
    vrijwilligers aan te werven. Wil jij meehelpen aan dit fantastische event? <br>
    Schrijf je dan nu in!</div>
  <div class="emaileninput">
    <form action="" class="footer-form">
    <span class="error zwart"></span>
    <div class="email-container">
      <input class="vrijwilliger__email" type="email" placeholder="E-mail" required>
      <input class="button vrijwilliger__button" type="submit" value="Verstuur">
      </div>
    </form>
  </div>
  <div class="img"><img src="././assets/img/volunteer.png" alt="Foto van vrijwilligers"></div>
</div>
</div>

</section>


