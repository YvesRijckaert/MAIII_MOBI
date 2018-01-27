<main>
  <?php if(!empty($_GET['activity_id'])){
    echo $test;
  } ?>
  <section class="about">
    <div class="wrap">
      <h2 class="section-title">Week van de mobiliteit?</h2>
      <p>Elk jaar zet de Week van de Mobiliteit (16 – 22 september) Vlaanderen #goedopweg om mee(r) te autominderen. Tal van acties tijdens de Week doen ons stil staan bij ons verplaatsingsgedrag en laten proeven van de alternatieven. Want wie de overstap maakt ontdekt zelf de voordelen van het stappen, trappen, trein/tram/bus of autodelen.</p>
    </div>
  </section>
  <section class='newsletter'>
    <header>
      <h1>Schrijf je in</h1>
    </header>
    <form action="index.php" method="post">
      <input class='newsletter-input' type='email' name='email' id='email' placeholder='johndoe@email.com' />
      <input class='submit-button' type="submit" value="Go!"/>
      <p class="error"></p>
    </form>
  </section>
</main>
