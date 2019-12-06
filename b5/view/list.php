<?php if(!empty($info)) : ?>
	<ul>
		<?php foreach ($info as $val): ?>
			<li><?php echo $val; ?></li>
		<?php endforeach; ?>
	</ul>
<?php else : ?>
	<h5>Khong tim thay du lieu</h5>
<?php endif; ?>
