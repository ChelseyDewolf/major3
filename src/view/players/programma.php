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
  <section class="programma container">
    <h2 class="hidden">Programma</h2>
      <form action="index.php">
        <input type="hidden" name="page" value="programma" />
          <fieldset>
            <div class="radio-toolbar">
              <div class="radio-toolbar__container">
                <input type="radio" id="alle" name="dag" value="" checked>
                <label for="alle">Alle dagen</label>
              </div>
              <div class="radio-toolbar__container">
                <input type="radio" id="vrijdag" name="dag" value="VR 24 - 08" <?php if(!empty($_GET['dag']) && $_GET['dag'] == 'VR 24 - 08') { echo 'checked';}?>>
                <label for="vrijdag">Vrijdag 24/08</label>
              </div>
              <div class="radio-toolbar__container">
                <input type="radio" id="zaterdag" name="dag" value="ZA 25 - 08"  <?php if(!empty($_GET['dag']) && $_GET['dag'] == 'ZA 25 - 08') { echo 'checked';}?>>
                <label for="zaterdag">Zaterdag 25/08</label>
              </div>
              <div class="radio-toolbar__container">
                <input type="radio" id="zondag" name="dag" value="ZO 26 - 08"  <?php if(!empty($_GET['dag']) && $_GET['dag'] == 'ZO 26 - 08') { echo 'checked';}?>>
                <label for="zondag">Zondag 26/08</label>
              </div>
                </div>
              <div class="filter__search__container">
              <input class="filter__search" type="search" placeholder="Naam voorstelling..." name="search" value="<?php if(!empty($_GET['search'])) {echo $_GET['search'];}?>">
              <div class="filter__button__container">
              <input class="button filter__button" type="submit">
              </div>
            </div>
          </fieldset>
          <fieldset>
            <div class="filter-checkbox container">
            <legend class="filter-checkbox__titel">Filter</legend>
            <label class="filter-checkbox__label" for="">Type</label>
              <div class="test"">
                <input type="checkbox" name="genre" value="voorstelling" <?php if(!empty($_GET['genre']) && $_GET['genre'] == 'voorstelling') { echo 'checked';}?>><span>Voorstelling</span>
              </div>
              <div class="test">
                <input type="checkbox" name="genre" value="straatact" <?php if(!empty($_GET['genre']) && $_GET['genre'] == 'straatact') { echo 'checked';}?>><span>Straatact</span>
              </div>
              <div class="test">
                <input type="checkbox" name="genre" value="familie voorstelling" <?php if(!empty($_GET['genre']) && $_GET['genre'] == 'familie voorstelling') { echo 'checked';}?>><span>Familie-act</span>
              </div>
            <label class="filter-checkbox__label" for="">Locatie</label>
              <div class="test">
            <input type="checkbox" name="locatie1" value="speelplkabsdebever"><span>Speelpl. KA/BS de Bever</span>
              </div>
              <div class="test">
            <input type="checkbox" name="locatie2" value="oudatletiekplein"><span>Oud Atletiekplein</span>
              </div>
              <div class="test">
            <input type="checkbox" name="locatie3" value="locatie3">Locatie 3
              </div>
              <div class="test">
            <input type="checkbox" name="locatie4" value="diedrikvanbevenlaan">Diedrik Van Beverenlaan
              </div>
              <div class="test">
            <input type="checkbox" name="locatie5" value="yzerhand">Yzerhand
              </div>
              <div class="test">
            <input type="checkbox" name="locatie6" value="vrasenstraat">vrasenstraat
              </div>
              <div class="test">
            <input type="checkbox" name="locatie7" value="warande">Warande
              </div>
              <div class="test">
            <input type="checkbox" name="locatie8" value="grotemarkt">Grote Markt
              </div>
              <div class="test">
            <input type="checkbox" name="locatie9" value="locatie9">Locatie 9
              </div>
              <div class="test">
            <input type="checkbox" name="locatie10" value="kloosterstraat">Kloosterstraat
              </div>
              <div class="test">
            <input type="checkbox" name="locatie11" value="olympischzwembad">Olympisch zwembad
              </div>
              <div class="test">
            <input type="checkbox" name="locatie12" value="opdestraat">Op de straat
              </div>
            <input class="button filter-checkbox__button" type="submit">
            </div>
          </fieldset>
      </form>
      <!-- <ul class="programma-grid container">
        <li class="programma-grid__item"">
          <article class="act">
            <img class="act__picture" src="https://source.unsplash.com/random/500x163" alt="">
            <h3 class="act__title">Dit is een test</h3>
            <p class="act__date">ZA 24 - 08</p>
            <p class="act__time"></p>
          </article>
        </li>
      </ul> -->
      <div class="programmatssh">

      </div>

      <div class="programma-grid-container">
      <?php
          foreach($programmas as $programma){
            ?>
          <a href="index.php?page=detail&amp;id=<?php echo $programma['id'];?>"><article class="act-grid-container">
          <div class="act-foto"><img class="foto" src="././assets/img/stock-foto.jpg" alt=""></div>
        <div class="act-tekst">
          <p><?php echo $programma['show_name'];?></p>
          <p><?php echo $programma["date"];?></p>
          <p><?php echo $programma["hour"];?></p>
        </div>
          </article></a>
          <?php
           }
           ?>
      </div>
  </section>

