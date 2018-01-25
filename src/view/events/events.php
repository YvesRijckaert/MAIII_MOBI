<section>
  <form class="filter-tag" action="?page=events" method="post">
    <select name='tag'>
      <option disabled selected>Kies een tag:</option>
      <?php foreach ($tags as $tag): ?>
        <option><?php echo($tag['tag']); ?></option>
      <?php endforeach; ?>
    </select>
    <input class='submit-button' type="submit" name="action" value="Go!"/>
  </form>
</section>

<section class="event-section">
  <h1>Events</h1>
  <?php
  $totalEvents = count($events);
  echo '<p>Aantal resultaten: ' . $totalEvents . '</p>';
  if (empty($events)) {?>
    <p>Geen evenementen.<p>
  <?php } else {
    foreach($events as $event): ?>
    <article>
      <header>
        <h2><?php echo $event['title']; ?></h2>
        <a href='index.php?page=detail&amp;id=<?php echo($event['id']); ?>'>Meer info</a>
      </header>
      <dl>
        <dt>code</dt><dd><?php echo $event['code'];?></dd>
        <dt>content</dt><dd><?php echo $event['content'];?></dd>
        <dt>practical</dt><dd><?php echo $event['practical'];?></dd>
        <dt>location</dt><dd><?php echo $event['location'];?></dd>
        <dt>address</dt><dd><?php echo $event['address'];?></dd>
        <dt>postal</dt><dd><?php echo $event['postal'];?></dd>
        <dt>city</dt><dd><?php echo $event['city'];?></dd>
        <dt>start</dt><dd><?php echo $event['start'];?></dd>
        <dt>end</dt><dd><?php echo $event['end'];?></dd>
        <dt>link</dt><dd><?php echo $event['link'];?></dd>
        <dt>organisers</dt><dd><ul><?php foreach($event['organisers'] as $organiser): ?><li><?php echo $organiser['name'];?></li><?php endforeach;?></ul></dd>
        <dt>tags</dt><dd><ul><?php foreach($event['tags'] as $tag): ?><li><?php echo $tag['tag'];?></li><?php endforeach;?></ul></dd>
      </dl>
    </article>
  <? endforeach; } ?>
</section>
