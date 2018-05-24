Page for the <?= $proj ?> project
<?php if ($complete): ?>
	which is complete
<?php else: ?>
	which is <?= $progress ?>% finished
	<?php if ($abandoned): ?>
		and is abandoned since <?= $abandoned ?>
	<?php endif; ?>
<?php endif; ?>
