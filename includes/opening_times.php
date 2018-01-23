<?php 
	$opening_times = array(
		array(
			'day' 	=> 'Monday',
			'times' => '09:00 - 18:00'
			),
		array(
			'day' 	=> 'Tuesday',
			'times' => '09:00 - 18:00'
			),
		array(
			'day' 	=> 'Wednesday',
			'times' => '09:00 - 18:00'
			),
		array(
			'day' 	=> 'Thursday',
			'times' => '09:00 - 20:00'
			),
		array(
			'day' 	=> 'Friday',
			'times' => '09:00 - 18:00'
			),
		array(
			'day' 	=> 'Saturday',
			'times' => '09:00 - 16:00'
			),
		array(
			'day' 	=> 'Sunday',
			'times' => 'Closed'
			),
		);

	foreach ($opening_times as $opening_time): ?>
		<div class="col-md-6 col-sm-6 col-xs-6 tar">
			<?php echo $opening_time['day']; ?>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<?php echo $opening_time['times']; ?>
		</div>
	<?php endforeach;?>
			
