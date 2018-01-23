<?php

$treatments_properties  = array(
	array(
		'link'	=>	'waxing.php',
		'name'	=>	'Waxing',
		'image'	=>	'/images/home/waxing.jpg'
		),
	array(
		'link'	=>	'microdermabrasion.php',
		'name'	=>	'Microdermabrasion',
		'image'	=>	'/images/home/Microdermabrasion.jpg'
		),
	array(
		'link'	=>	'eyelashes-and-brows.php',
		'name'	=>	'Eyelashes and Eyebrows',
		'image'	=>	'/images/home/eyelashes.jpg'
		),
	array(
		'link'	=>	'hair-salon.php',
		'name'	=>	'Hair Salon',
		'image'	=>	'/images/home/hair-salon.jpg'
		),
	array(
		'link'	=>	'tanning.php',
		'name'	=>	'Tanning',
		'image'	=>	'/images/home/tanning.jpg'
		),
	array(
		'link'	=>	'for-men.php',
		'name'	=>	'For Men',
		'image'	=>	'/images/home/for-men.jpg'
		),
	array(
		'link'	=>	'hands-and-feet.php',
		'name'	=>	'Manicure, Pedicure and Shellac',
		'image'	=>	'/images/home/manicure.jpg'
		),
	array(
		'link'	=>	'massage.php',
		'name'	=>	'Massage',
		'image'	=>	'/images/home/massage.jpg'
		),
	array(
		'link'	=>	'dermalogica.php',
		'name'	=>	'Dermalogica'
		)
);


function treatment_table($treatment_list) {
		if (isset($treatment_list)) : ?>
			<table class="table">
				<tr>
					<th>
						Treatment
					</th>
					<th>
						Price
					</th>
					<th>
						Description
					</th>
				</tr>		
		<?php	
			foreach ($treatment_list as $treatment_inc) : ?>
				<tr>
					<td><?php echo $treatment_inc["treatment"]; ?></td>
					<td><?php echo $treatment_inc["price"]; ?></td>
					<?php if(isset($treatment_inc["description"])): ?>
						<td rowspan="<?php echo $treatment_inc["row_count"]; ?>"><?php echo $treatment_inc["description"]; ?></td>
					<?php endif; ?>
				</tr>
		<?php 
			endforeach;
			endif;
		?>
		<?php echo "</table>";
}

function treatment_table_duration($treatment_list) {
		if (isset($treatment_list)) : ?>
			<table class="table">
				<tr>
					<th>
						Treatment
					</th>
					<th>
						Price
					</th>
					<th>
						Duration
					</th>
					<th>
						Description
					</th>
				</tr>		
		<?php	
			foreach ($treatment_list as $treatment_inc) : ?>
				<tr>
					<td><?php echo $treatment_inc["treatment"]; ?></td>
					<td><?php echo $treatment_inc["price"]; ?></td>
					<td><?php echo $treatment_inc["duration"]; ?></td>
					<?php if(isset($treatment_inc["description"])): ?>
						<td rowspan="<?php echo $treatment_inc["row_count"]; ?>"><?php echo $treatment_inc["description"]; ?></td>
					<?php endif; ?>
				</tr>
		<?php 
			endforeach;
			endif;
		?>
		<?php echo "</table>";
}

function treatment_table_hair($treatment_list) {
		if (isset($treatment_list)) : ?>
			<table class="table">
				<tr>
					<th>
						Treatment
					</th>
					<th>
						Lucy
					</th>
					<th>
						Jodie
					</th>
					<th>
						Karon
					</th>
					<th>
						Lisa
					</th>
				</tr>		
		<?php	
			foreach ($treatment_list as $treatment_inc) : ?>
				<tr>
					<td><?php echo $treatment_inc["treatment"]; ?></td>
					<td><?php echo $treatment_inc["lucy"]; ?></td>
					<td><?php echo $treatment_inc["jodie"]; ?></td>
					<td><?php echo $treatment_inc["karon"]; ?></td>
					<td><?php echo $treatment_inc["lisa"]; ?></td>
				</tr>
		<?php 
			endforeach;
			endif;
		?>
		<?php echo "</table>";
}

function create_sidebar() {
	global $treatments_properties;
	echo '<ul class="treatment-sidebar">';
	foreach ($treatments_properties as $sidebar_item) {
		echo '<li><a href="' . $sidebar_item['link'] . '">' . $sidebar_item['name'] . '</a></li>';
	}
	echo '</ul>';

}

?>