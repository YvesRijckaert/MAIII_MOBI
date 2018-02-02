<main>
  <header class="events-header">
    <h2 class="section-title">Activiteiten</h2>
  </header>
  <section class="event-filter">
    <h3 class="hide">Activiteit filters</h3>
    <form class="filter-tag" action="?page=events" method="post">
      <ul class="days">
        <li class="day">
          <input class="radio-input hide" type="radio" name="datum" id="alles" value="alles" checked/>
          <label class="day-label" for="alles">
             <span class="label-item">alles</span>
             <span class="label-item">16/09 - 22/09</span>
          </label>
        </li>
        <li class="day">
          <input class="radio-input hide" type="radio" name="datum" id="zondag" value="zondag"/>
          <label class="day-label" for="zondag">
            <span class="label-item">zondag</span>
            <span class="label-item">16/09</span>
          </label>
        </li>
        <li class="day">
          <input class="radio-input hide" type="radio" name="datum" id="maandag" value="maandag"/>
          <label class="day-label" for="maandag">
            <span class="label-item">maandag</span>
            <span class="label-item">17/09</span>
          </label>
        </li>
        <li class="day">
          <input class="radio-input hide" type="radio" name="datum" id="dinsdag" value="dinsdag"/>
          <label class="day-label" for="dinsdag">
            <span class="label-item">dinsdag</span>
            <span class="label-item">18/09</span>
          </label>
        </li>
        <li class="day">
          <input class="radio-input hide" type="radio" name="datum" id="woensdag" value="woensdag"/>
          <label class="day-label" for="woensdag">
            <span class="label-item">woensdag</span>
            <span class="label-item">19/09</span>
          </label>
        </li>
        <li class="day">
          <input class="radio-input hide" type="radio" name="datum" id="donderdag" value="donderdag"/>
          <label class="day-label" for="donderdag">
            <span class="label-item">donderdag</span>
            <span class="label-item">20/09</span>
          </label>
        </li>
        <li class="day">
          <input class="radio-input hide" type="radio" name="datum" id="vrijdag" value="vrijdag"/>
          <label class="day-label" for="vrijdag">
            <span class="label-item">vrijdag</span>
            <span class="label-item">21/09</span>
          </label>
        </li>
        <li class="day">
          <input class="radio-input hide" type="radio" name="datum" id="zaterdag" value="zaterdag"/>
          <label class="day-label" for="zaterdag">
            <span class="label-item">zaterdag</span>
            <span class="label-item">22/09</span>
          </label>
        </li>
      </ul>
      <select class="select-tag" name='tag'>
        <option disabled selected>Kies een categorie:</option>
        <?php foreach ($tags as $tag): ?>
          <option><?php echo($tag['tag']); ?></option>
        <?php endforeach; ?>
      </select>
      <input class="city-search" type="search" name="city" placeholder="Waar woon je?" />
      <input class='submit-button filter-submit' type="submit" name="action" value="Go!"/>
    </form>
  </section>
  <section class="event-results">
    <h3 class="hide">Resultaten</h3>
    <?php
    $totalEvents = count($events);
    echo '<p class="event-count">Aantal resultaten: ' . $totalEvents . '</p>';
    if (empty($events)) {?>
      <p class="event-count">Geen evenementen.<p>
    <?php } else {
      foreach($events as $event): ?>
      <a class="activity-link" href="index.php?page=detail&id=<?php echo $event['id'];?>">
      <article class="activity-item">
        <picture class="activity-image">
          <source media="(min-width: 1440px)" srcset="assets/img/<?php echo $event['code'];?>/full.webp" type="image/webp"/>
          <source media="(min-width: 1440px)" srcset="assets/img/<?php echo $event['code'];?>/full.jpg" />
          <source media="(min-width: 1024px)" srcset="assets/img/<?php echo $event['code'];?>/medium.webp"  type="image/webp" />
          <source media="(min-width: 1024px)" srcset="assets/img/<?php echo $event['code'];?>/medium.jpg" />
          <source media="(min-width: 768px)" srcset="assets/img/<?php echo $event['code'];?>/small.webp"  type="image/webp" />
          <source media="(min-width: 768px)" srcset="assets/img/<?php echo $event['code'];?>/small.jpg" />
          <source media="(min-width: 320px)" srcset="assets/img/<?php echo $event['code'];?>/mini.webp"  type="image/webp" />
          <source media="(min-width: 320px)" srcset="assets/img/<?php echo $event['code'];?>/mini.jpg" />
          <img class="activity-image"
          srcset="assets/img/<?php echo $event['code'];?>/full.jpg,
                  assets/img/<?php echo $event['code'];?>/medium.jpg,
                  assets/img/<?php echo $event['code'];?>/small.jpg,
                  assets/img/<?php echo $event['code'];?>/mini.jpg"
          alt="<?php echo $event['title'];?>" />
        </picture>
        <ul class="activity-tags">
          <?php foreach(array_slice($event['tags'], 0, 3) as $tag): ?>
            <li class="activity-tag"><?php echo $tag['tag'];?></li>
          <?php endforeach;?>
        </ul>
          <div class="activity-info">
            <h3 class="activity-title"><?php echo $event['title']; ?></h3>
            <p class="activity-time"><?php echo date('d/m', strtotime($event['start'])); ?><?php if(date('d/m', strtotime($event['start'])) != date('d/m', strtotime($event['end']))) {echo ' tot ' . date('d/m', strtotime($event['end']));} ?></p>
            <p class="activity-place"><?php echo $event['city'];?></p>
          </div>
      </article>
      </a>
    <? endforeach; } ?>
  </section>
</main>
