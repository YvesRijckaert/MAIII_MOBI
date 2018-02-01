<main>
<section class="event-filter">
  <form class="filter-tag" action="?page=events" method="post">
    <input type="radio" name="datum" value="alles" checked/>
    <label>Alles</label>
    <input type="radio" name="datum" value="zondag"/>
    <label>Zondag</label>
    <input type="radio" name="datum" value="maandag"/>
    <label>Maandag</label>
    <input type="radio" name="datum" value="dinsdag"/>
    <label>Dinsdag</label>
    <input type="radio" name="datum" value="woensdag"/>
    <label>Woensdag</label>
    <input type="radio" name="datum" value="donderdag"/>
    <label>Donderdag</label>
    <input type="radio" name="datum" value="vrijdag"/>
    <label>Vrijdag</label>
    <input type="radio" name="datum" value="zaterdag"/>
    <label>Zaterdag</label>
    <select name='tag'>
      <option disabled selected>Kies een tag:</option>
      <?php foreach ($tags as $tag): ?>
        <option><?php echo($tag['tag']); ?></option>
      <?php endforeach; ?>
    </select>
    <input class='submit-button' type="submit" name="action" value="Go!"/>
  </form>
</section>
<section class="event-results">
  <header class="event-results-header">
    <h2 class="section-title">Activiteiten</h2>
  </header>
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
        srcset="assets/img/<?php echo $event['code'];?>/full.jpg 1156w,
                assets/img/<?php echo $event['code'];?>/medium.jpg 933w,
                assets/img/<?php echo $event['code'];?>/small.jpg 566w,
                assets/img/<?php echo $event['code'];?>/mini.jpg 411w"
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
