<?php 
  $site_root = $_SERVER['DOCUMENT_ROOT'];
  $functions_path = $site_root . "/functions.php";
  $include_data   = $site_root . "/data/data_home.php";
  require $include_data;
  require $functions_path;

  $include_header = $site_root . "/includes/header.php";
  $include_footer = $site_root . "/includes/footer.php";
  $include_opening_times = $site_root . "/includes/opening_times.php";
  include_once($include_header);
  
?>

	<div class="col-md-12">
		<div class="home-banner tac">
			<img src="/images/492603492-small.jpg" alt="Arabella Hair &amp; Beauty Salon"  />
			<div class="home-banner__inner">
				<h1><?php echo $page_name; ?></h1>
				<h2>Sed quia non numquam eius modi tempora incidunt</h2>
			</div>
		</div>
	</div>
</div>
<div class="home-band marb_d">
	<div class="container">
		<div class="col-md-6 col-sm-6">
			<h2 class="tac">Where to Find Us</h2>
			<div class="tac marb_d">
				33a The Parade<br />
				Leamington Spa<br />
				Warwickshire<br />
				CV32 4BL
			</div>
			<a href="/contact.php" class="contact__form-button">Get in touch</a>
		</div>

		<div class="col-md-6 col-sm-6">
			<h2 class="tac">Opening Times</h2>
			<div class="row">
				<?php include_once($include_opening_times); ?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="home-text">
		<h2 class="tac">Arabella.<br />Hairs. Nails. Beauty.</h2>
		<p>Arabella Hair and Beauty welcomes you to our stylish, comfortable, unpretentious and friendly salon. We have operated from Leamington Spa's main Parade since 2010 and pride ourselves in offering quality treatments and services  combined with value. All delivered by our professional and experienced team.</p>

		<p>Our highly trained therapists are committed to offering you the very best service. Their skills, knowledge and training will ensure that you receive the best possible advice regarding treatments and home care products.</p>

		<p>We value are clients greatly and always want to ensure that you enjoy every moment of your visit to our salon and that you feel relaxed and comfortable in the surroundings. Feel free to call in for a consultation or call us if you require further information regarding any treatment or product.</p>

	</div>
	<div class="col-md-12">
		<h2 class="tac">Treatments</h2>
	</div>

	<div class="col-md-6 col-sm-6 marb_d">
		<div class="tac">
			<a href="caci-toning.php">
				<img src="/images/home/caci.png" width="600" height="200" alt="CACI">
			</a>
		</div>
	</div>

	<div class="col-md-6 col-sm-6 marb_d marb_d">
		<div class="tac">
			<a href="dermalogica.php">
				<img src="/images/home/dermalogica.png" width="600" height="200" alt="Dermalogica">
			</a>
		</div>
	</div>

<?php
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


<?php include_once($include_footer); ?>



