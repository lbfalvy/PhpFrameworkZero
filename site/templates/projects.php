<?php extend("base.php"); ?>
<?php startblock("content"); ?>
	<?php foreach ($projects as $proj): ?>
		<a href="<?= $prepath.$proj ?>">
			<?= $proj ?>
		</a><br/>
	<?php endforeach; ?>
<?php endblock(); ?>
