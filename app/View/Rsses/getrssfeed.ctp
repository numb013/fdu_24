<?php $index = $this->requestAction('/rsses/index/'); ?>
<?php if ($index) : ?>
  <ul>
  <?php foreach($index as $item) : ?>
    <li><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']?></a></li>
  <?php endforeach; ?>
  </ul>
<?php endif; ?>