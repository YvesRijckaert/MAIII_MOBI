<main>
<p><?php echo $event['title']; ?></p>
<p><?php echo date('l d F', strtotime($event['start'])); ?></p>
<p>vanaf <?php echo date('G', strtotime($event['start']));?>u - <?php echo date('G', strtotime($event['end']));?>u</p>
</main>
