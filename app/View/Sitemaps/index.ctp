
<?php foreach ($professions as $profession): ?>
	<?php echo '<url>'; ?>
		<?php echo '<loc>'; ?>
			<?php echo $this->Html->url(Array('controller' => 'events', 'action' => 'detail', h($profession['Profession']['id'])), true); ?>
			<?php echo '</loc>';?>
		<?php echo '<lastmod>';?><?php echo date('Y-m-d', strtotime($profession['Profession']['modified'])); ?><?php echo '</lastmod>';?>
		<?php echo '<changefreq>';?>monthly<?php echo '</changefreq>';?>
		<?php echo '<priority>';?>0.8<?php echo '</priority>';?>
	<?php echo '</url>';?>
<?php endforeach; ?>
