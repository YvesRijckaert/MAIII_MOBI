<main>
  <?php if(!empty($_GET['activity_id'])){
    echo $test;
  } ?>
  <section class="about">
    <div class="wrap">
      <header class="about-header">
        <h2 class="section-title">Week van de mobiliteit?</h2>
      </header>
      <div class="about-content">
        <img class="about-image" height="434" width="578" src="assets/img/vrouwen-markt-fiets.jpg" alt="Vrouwen op de markt met hun fiets" />
        <p class="about-text">Elk jaar zet de Week van de Mobiliteit (16 – 22 september) Vlaanderen #goedopweg om mee(r) te autominderen. Tal van acties tijdens de Week doen ons stil staan bij ons verplaatsingsgedrag en laten proeven van de alternatieven. Want wie de overstap maakt ontdekt zelf de voordelen van het stappen, trappen, trein/tram/bus of autodelen.</p>
      </div>
      <div class="about-buttons">
        <a class="button" href="#">vorige edities</a>
        <a class="button" href="#">&#35;goedopweg</a>
      </div>
    </div>
  </section>

  <section class="uitgelicht">
    <div class="wrap">
      <header>
        <h2 class="section-title">In de kijker</h2>
      </header>
      <div class="uitgelicht-content">
        <picture class="uitgelicht-image">
          <img height="434" width="578" src="assets/img/man-fiets.jpg" alt="Man fietst aan het MAS in Antwerpen" />
        </picture>
        <div class="uitgelicht-events">
          <a data-date="Ma 16" class="uitgelicht-event" href="#">Expo Mobility</a>
          <a data-date="Wo 18" class="uitgelicht-event" href="#">Le beau V</a>
          <a data-date="Do 19" class="uitgelicht-event" href="#">Bike Brussels</a>
          <a class="button" href="index.php?page=events">alle activiteiten</a>
        </div>
      </div>
    </div>
  </section>

  <section class="organiseer">
    <div class="wrap">
      <header>
        <h2 class="section-title">Organiseer mee</h2>
      </header>
      <div class="organiseer-content">
        <picture class="organiseer-image">
          <img class="image" height="434" width="578" src="assets/img/meisje-schmink.jpg" alt="Meisje wordt geschminkt" />
        </picture>
        <div class="organiseer-bodycopy">
          <p class="organiseer-text">Registreer jouw mobiliteitsactie. Zo kunnen we je initiatief mee promoten en brengen we de dynamiek voor duurzame mobiliteit tijdens de Week hier in beeld. Want samen zijn we #goedopweg! Trouwens, we hebben ook leuk kant-en-klaar promotiemateriaal voor je klaar!</p>
          <a class="button" href="#">nu inschrijven</a>
        </div>
      </div>
    </div>
  </section>

  <section class="wistjes">
    <div class="wrap">
      <header>
        <h2 class="section-title">Wistjedatjes</h2>
      </header>
        <div class="weetjes">
          <a data-count="feit 1" class="weetje" href="#">637 verkeersdoden per jaar</a>
          <a data-count="feit 2" class="weetje" href="#">doodsoorzaak nr. 1 bij -35 jarigen</a>
          <a data-count="feit 3" class="weetje" href="#">trein 75&#37; minder CO2 dan auto</a>
          <a data-count="feit 4" class="weetje" href="#">SUV 74&#37; meer uitstoot dan Sedan</a>
          <a data-count="feit 5" class="weetje" href="#">1.200 sterftes door longkanker</a>
          <a data-count="feit 6" class="weetje" href="#">luchtvervuiling slecht voor foetus</a>
          <img class="wistjes-image" height="313" width="376" src="assets/img/auto.svg" alt="Een auto" />
        </div>
    </div>
  </section>

  <section class='newsletter'>
    <div class="wrap">
      <header>
        <h2 class="section-title">Blijf op de hoogte</h2>
      </header>
      <div class="newsletter-content">
        <p class="newsletter-info">Mee(r) autominderen? Blijf op de hoogte van al wat leeft en beweegt in het verduurzamen van mobiliteit. Schrijf je nu in op onze nieuwsbrief!</p>
        <form action="index.php" method="post">
          <div class="form-field">
            <label for="voornaam">Voornaam</label>
            <input class='newsletter-input' type='name' id="voornaam" name='voornaam' placeholder='Voornaam' required />
          </div>
          <div class="form-field">
            <label for="naam">Naam</label>
            <input class='newsletter-input' type='name' id="naam" name='naam' placeholder='Naam' required />
          </div>
          <div class="form-field">
            <label for="email">Email</label>
            <input class='newsletter-input' type='email' id="email" name='email' placeholder='johndoe@email.com' required />
          </div>
          <div class="form-field">
            <input class='button submit-button' type="submit" value="bevestig"/>
          </div>
          <p class="error"></p>
        </form>
      </div>
    </div>
  </section>

  <section class="instagram">
    <div class="wrap">
      <header>
        <h2 class="section-title">Instagram &#35;goedopweg</h2>
      </header>
      <div class="instagram-content">
        <img class="image" height="380" width="380" src="assets/img/zeepkistenrace.jpg" alt="Zeepkistenrace" />
        <img class="image" height="380" width="380" src="assets/img/ganzen.jpg" alt="Meisjes voederen ganzen" />
        <img class="image" height="380" width="380" src="assets/img/bakfiets.jpg" alt="Man met bakfiets" />
        <a target="_blank" class="button" href="https://www.instagram.com/weekvandemobiliteit/">Volg ons op instagram</a>
      </div>
    </div>
  </section>
