<main>
  <section class="event-detail">
    <h2 class="detail-title"><?php echo $event['title']; ?></h2>
    <ul class="detail-tags">
      <?php foreach($tags as $tag): ?><li class="detail-tag"><?php echo $tag['tag']; ?></li>
      <?php endforeach;?>
    </ul>

    <section class="detail-content">
      <h3 class="detail-section-title">Ontdek</h3>
      <?php echo $event['content']; ?>
    </section>

    <section class="detail-info">
      <h3 class="detail-section-title hide">Info</h3>
      <article class="detail-wanneer">
        <h4 class="detail-section-title">Wanneer</h4>
        <p class="detail-date"><?php echo date('d/m/Y', strtotime($event['start'])); ?><?php if(date('d/m/Y', strtotime($event['start'])) != date('d/m/Y', strtotime($event['end']))) {echo ' tot ' . date('d/m/Y', strtotime($event['end']));} ?></p>
        <p class="detail-time">van <?php echo date('G', strtotime($event['start']));?>u tot <?php echo date('G', strtotime($event['end']));?>u</p>
      </article>
      <article>
        <h4 class="detail-section-title">Waar</h4>
        <p class="detail-city"><?php echo $event['postal'] . ' ' . $event['city']; ?></p>
        <p class="detail-address"><?php echo $event['address']; ?></p>
      </article>
      <a class="detail-button button" href="<?php echo $event['link']; ?>">meer info</a>
    </section>

    <section class="detail-practical">
      <h3 class="detail-section-title">Praktisch</h3>
      <?php echo $event['practical']; ?>
    </section>
  </section>
</main>
