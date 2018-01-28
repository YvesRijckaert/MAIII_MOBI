<main>
  <?php if(!empty($_GET['activity_id'])){
    echo $test;
  } ?>
  <section class="about">
    <div class="wrap">
      <header class="about-header">
        <h2 class="section-title">Week van de mobiliteit?</h2>
      </header>
      <img class="about-image" height="434" width="578" src="assets/img/vrouwen-markt-fiets.jpg" alt="Vrouwen op de markt met hun fiets" />
      <p class="about-text">Elk jaar zet de Week van de Mobiliteit (16 – 22 september) Vlaanderen #goedopweg om mee(r) te autominderen. Tal van acties tijdens de Week doen ons stil staan bij ons verplaatsingsgedrag en laten proeven van de alternatieven. Want wie de overstap maakt ontdekt zelf de voordelen van het stappen, trappen, trein/tram/bus of autodelen.</p>
      <a class="button" href="#">vorige edities</a>
      <a class="button" href="#">&#35;goedopweg</a>
    </div>
  </section>

  <section class="uitgelicht">
    <div class="wrap">
      <header>
        <h2 class="section-title">In de kijker</h2>
      </header>
      <article class="uitgelicht-content">
        <picture class="uitgelicht-image">
          <img height="434" width="578" src="assets/img/man-fiets.jpg" alt="Man fietst aan het MAS in Antwerpen" />
        </picture>
        <div class="uitgelicht-events">
          <a data-date="Ma 16" class="uitgelicht-event" href="#">Expo Mobility</a>
          <a data-date="Wo 18" class="uitgelicht-event" href="#">Le beau V</a>
          <a data-date="Do 19" class="uitgelicht-event" href="#">Bike Brussels</a>
          <a class="button" href="index.php?page=events">alle activiteiten</a>
        </div>
      </article>
    </div>
  </section>

  <section class="organiseer">
    <div class="wrap">
      <header>
        <h2 class="section-title">Organiseer mee</h2>
      </header>
      <article class="organiseer-content">
        <picture class="organiseer-image">
          <img class="image" height="434" width="578" src="assets/img/meisje-schmink.jpg" alt="Meisje wordt geschminkt" />
        </picture>
        <p class="organiseer-text">Registreer jouw mobiliteitsactie. Zo kunnen we je initiatief mee promoten en brengen we de dynamiek voor duurzame mobiliteit tijdens de Week hier in beeld. Want samen zijn we #goedopweg! Trouwens, we hebben ook leuk kant-en-klaar promotiemateriaal voor je klaar!</p>
      </article>
    </div>
  </section>

  <section class="wistjes">
    <div class="wrap">
      <header>
        <h2 class="section-title">Wistjedatjes</h2>
      </header>
      <article class="wistjes-content">
        <img class="wistjes-image" height="376" width="452" src="assets/img/auto.svg" alt="Een auto" />
        <div class="weetjes">
          <a data-count="feit 1" class="weetje" href="#">637 verkeersdoden per jaar</a>
          <a data-count="feit 2" class="weetje" href="#">doodsoorzaak nr. 1 bij -35 jarigen</a>
          <a data-count="feit 3" class="weetje" href="#">trein 75&#37; minder CO2 dan auto</a>
          <a data-count="feit 4" class="weetje" href="#">SUV 74&#37; meer uitstoot dan Sedan</a>
          <a data-count="feit 5" class="weetje" href="#">1.200 sterftes door longkanker</a>
          <a data-count="feit 6" class="weetje" href="#">luchtvervuiling slecht voor foetus</a>
        </div>
      </article>
    </div>
  </section>

  <section class='newsletter'>
    <div class="wrap">
      <header>
        <h2 class="section-title">Blijf op de hoogte</h2>
      </header>
      <form action="index.php" method="post">
        <label for="voornaam">Voornaam</label>
        <input class='newsletter-input' type='name' id="voornaam" name='voornaam' placeholder='Voornaam' required />

        <label for="naam">Naam</label>
        <input class='newsletter-input' type='name' id="naam" name='naam' placeholder='Naam' required />

        <label for="email">Email</label>
        <input class='newsletter-input' type='email' id="email" name='email' placeholder='johndoe@email.com' required />

        <input class='submit-button' type="submit" value="Go!"/>
        <p class="error"></p>
      </form>
    </div>
  </section>

  <section class="instagram">
    <div class="wrap">
      <header>
        <h2 class="section-title">Instagram &#35;goedopweg</h2>
      </header>
      <img class="image" height="380" width="380" src="assets/img/zeepkistenrace.jpg" alt="Zeepkistenrace" />
      <img class="image" height="380" width="380" src="assets/img/ganzen.jpg" alt="Meisjes voederen ganzen" />
      <img class="image" height="380" width="380" src="assets/img/bakfiets.jpg" alt="Man met bakfiets" />
    </div>
  </section>
</main>
