<?php 
  $site_root = $_SERVER['DOCUMENT_ROOT'];
  $functions_path = $site_root . "/functions.php";
  $include_data   = $site_root . "/data/data_treatments.php";
  require $include_data;
  require $functions_path;


  $include_header = $site_root . "/includes/header.php";
  $include_footer = $site_root . "/includes/footer.php";
  $include_opening_times = $site_root . "/includes/opening_times.php";
  include_once($include_header);
  
?>

	<div class="col-md-12 mart_d">
		<h1><?php echo $page_name; ?></h1>

		<?php
		
			if (isset($text_2)) {
				echo $text_2;
				}

			$treatment_grid  = array(
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
					)
				);


			foreach ($treatment_grid as $treatment): ?>
				<div class="col-md-3 col-sm-3 col-xs-6 marb_d">
					<div class="treatment-container">
						<a href="<?php echo $treatment['link']; ?>">
							<div class="treatment-holder"><span><?php echo $treatment['name']; ?></span></div>
							<img src="<?php echo $treatment['image']; ?>" width="400" height="400" alt="<?php echo $treatment['name']; ?>" />
						</a>
					</div>
				</div>
			<?php endforeach;?>
		
	</div>

<?php include_once($include_footer); ?>