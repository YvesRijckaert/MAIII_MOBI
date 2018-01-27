<main>
  <?php if(!empty($_GET['activity_id'])){
    echo $test;
  } ?>
  <section class="about">
    <div class="wrap">
      <header class="about-header">
        <h2 class="section-title">Week van de mobiliteit?</h2>
      </header>
      <img class="about-image" height="434" width="578" src="assets/img/vrouwen-markt-fiets.jpg" alt="Vrouwen op de markt met hun fiets">
      <p class="about-text">Elk jaar zet de Week van de Mobiliteit (16 – 22 september) Vlaanderen #goedopweg om mee(r) te autominderen. Tal van acties tijdens de Week doen ons stil staan bij ons verplaatsingsgedrag en laten proeven van de alternatieven. Want wie de overstap maakt ontdekt zelf de voordelen van het stappen, trappen, trein/tram/bus of autodelen.</p>
      <a class="about-button-1" href="#">Vorige edities</a>
      <a class="about-button-2" href="#">&#35;goedopweg</a>
    </div>
  </section>

  <section class="uitgelicht">
    <div class="wrap">
      <header>
        <h2 class="section-title">In de kijker</h2>
      </header>
      <img class="image" height="434" width="578" src="assets/img/man-fiets.jpg" alt="Man fietst aan het MAS in Antwerpen">
      <ul>
        <li>Expo Mobility</li>
        <li>Le beau V</li>
        <li>Bike Brussels</li>
      </ul>
    </div>
  </section>

  <section class="organiseer">
    <div class="wrap">
      <header>
        <h2 class="section-title">Organiseer mee</h2>
      </header>
      <img class="image" height="434" width="578" src="assets/img/meisje-schmink.jpg" alt="Meisje wordt geschminkt">
      <p>Registreer jouw mobiliteitsactie. Zo kunnen we je initiatief mee promoten en brengen we de dynamiek voor duurzame mobiliteit tijdens de Week hier in beeld. Want samen zijn we #goedopweg! Trouwens, we hebben ook leuk kant-en-klaar promotiemateriaal voor je klaar!</p>
    </div>
  </section>

  <section class="wistjes">
    <div class="wrap">
      <header>
        <h2 class="section-title">Wistjedatjes</h2>
      </header>
      <ul>
        <img class="image" height="376" width="452" src="assets/img/auto.svg" alt="Een auto">
        <li><a href="#">637 verkeersdoden per jaar</a></li>
        <li><a href="#">doodsoorzaak nr. 1 bij -35 jarigen</a></li>
        <li><a href="#">trein 75&#37; minder CO<sub>2</sub> dan auto</a></li>
        <li><a href="#">SUV 74&#37; meer uitstoot dan Sedan</a></li>
        <li><a href="#">afwijkend sperma door luchtvervuiling</a></li>
        <li><a href="#">luchtvervuiling slecht voor foetus</a></li>
      </ul>
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
      <img class="image" height="380" width="380" src="assets/img/zeepkistenrace.jpg" alt="Zeepkistenrace">
      <img class="image" height="380" width="380" src="assets/img/ganzen.jpg" alt="Meisjes voederen ganzen">
      <img class="image" height="380" width="380" src="assets/img/bakfiets.jpg" alt="Man met bakfiets">
    </div>
  </section>
</main>
