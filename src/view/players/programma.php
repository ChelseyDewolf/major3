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
          <div class="filter-acts-container">
          <fieldset>
            <div class="filter-checkbox container">
            <legend class="filter-checkbox__titel">Filter</legend>
            <label class="filter-checkbox__label" for="">Type</label>
              <div class="test"">
                <input type="checkbox" name="genre[]" value="voorstelling" <?php if(!empty($_GET['genre']) && $_GET['genre'] == 'voorstelling') { echo 'checked';}?>><span>Voorstelling</span>
              </div>
              <div class="test">
                <input type="checkbox" name="genre[]" value="straatact" <?php if(!empty($_GET['genre']) && $_GET['genre'] == 'straatact') { echo 'checked';}?>><span>Straatact</span>
              </div>
              <div class="test">
                <input type="checkbox" name="genre[]" value="familie voorstelling" <?php if(!empty($_GET['genre']) && $_GET['genre'] == 'familie voorstelling') { echo 'checked';}?>><span>Familie-act</span>
              </div>
            <label class="filter-checkbox__label" for="">Locatie</label>
              <div class="test">
            <input type="checkbox" name="loactie[]" value="1" <?php if(!empty($_GET['locatie']) && $_GET['locatie'] == '1') { echo 'checked';}?>><span>Speelpl. KA/BS de Bever</span>
              </div>
              <div class="test">
            <input type="checkbox" name="loactie[]" value="2" <?php if(!empty($_GET['locatie']) && $_GET['locatie'] == '2') { echo 'checked';}?>><span>Oud Atletiekplein</span>
              </div>
              <div class="test">
            <input type="checkbox" name="loactie[]" value="3" <?php if(!empty($_GET['locatie']) && $_GET['locatie'] == '3') { echo 'checked';}?>>Locatie 3
              </div>
              <div class="test">
            <input type="checkbox" name="loactie[]" value="4" <?php if(!empty($_GET['locatie']) && $_GET['locatie'] == '4') { echo 'checked';}?>>Diedrik Van Beverenlaan
              </div>
              <div class="test">
            <input type="checkbox" name="loactie[]" value="5" <?php if(!empty($_GET['locatie']) && $_GET['locatie'] == '5') { echo 'checked';}?>>Yzerhand
              </div>
              <div class="test">
            <input type="checkbox" name="loactie[]" value="6" <?php if(!empty($_GET['locatie']) && $_GET['locatie'] == '6') { echo 'checked';}?>>vrasenstraat
              </div>
              <div class="test">
            <input type="checkbox" name="loactie[]" value="7" <?php if(!empty($_GET['locatie']) && $_GET['locatie'] == '7') { echo 'checked';}?>>Warande
              </div>
              <div class="test">
            <input type="checkbox" name="loactie[]" value="8 <?php if(!empty($_GET['locatie']) && $_GET['locatie'] == '8') { echo 'checked';}?>">Grote Markt
              </div>
              <div class="test">
            <input type="checkbox" name="loactie[]" value="9" <?php if(!empty($_GET['locatie']) && $_GET['locatie'] == '9') { echo 'checked';}?>>Locatie 9
              </div>
              <div class="test">
            <input type="checkbox" name="loactie[]" value="10" <?php if(!empty($_GET['locatie']) && $_GET['locatie'] == '10') { echo 'checked';}?>>Kloosterstraat
              </div>
              <div class="test">
            <input type="checkbox" name="loactie[]" value="11" <?php if(!empty($_GET['locatie']) && $_GET['locatie'] == '11') { echo 'checked';}?>>Olympisch zwembad
              </div>
              <div class="test">
            <input type="checkbox" name="loactie[]" value="12" <?php if(!empty($_GET['locatie']) && $_GET['locatie'] == '12') { echo 'checked';}?>>Op de straat
              </div>
            <input class="button filter-checkbox__button" type="submit">
            </div>
          </fieldset>
          <div class="programma-grid-container">
      <?php
          foreach($programmas as $programma){
            ?>
          <a href="index.php?page=detail&amp;id=<?php echo $programma['id'];?>">
          <article class="act-grid-container">
          <h3 class="hidden"><?php echo $programma['show_name'];?></h3>
          <div class="act-foto">
          <img class="foto" src="././assets/img/stock-foto.jpg" alt="">
          </div>
          <div class="act-tekst">
            <p class="act-titel"><?php echo $programma['show_name'];?></p>
            <div class="act-para">
            <p><?php echo $programma["date"];?></p>
            <p class="act-para__uur"><?php echo $programma["hour"];?></p>
          </div>
          </div>
          </article>
          </a>
          <?php
           }
           ?>
      </div>
          </div>
      </form>

  </section>

