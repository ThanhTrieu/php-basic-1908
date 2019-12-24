<?php if(!empty($infoWeather)): ?>
	<ul>
		<?php foreach ($infoWeather as $key => $item): ?>
			<li>
				<p>- Ngay : <?php echo $item['dt_txt']; ?></p>
				<p>- Thong tin thoi tiet</p>
				<div class="info-weather">
					<p>- Nhiet do: <?php echo $item['main']['temp']; ?></p>
					<p>- Do am: <?php echo $item['main']['humidity']; ?></p>
					<p>- Mieu ta: <?php echo $item['weather'][0]['description']; ?></p>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
<?php else: ?>
	<h5 class="text-center">Khong co du lieu</h5>
<?php endif; ?>
