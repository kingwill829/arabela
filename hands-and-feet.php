<?php 
  $site_root = $_SERVER['DOCUMENT_ROOT'];
  $functions_path = $site_root . "/functions.php";
  $include_data   = $site_root . "/data/data_hands_and_feet.php";
  
  require $include_data;
  require $functions_path;

  $include_header = $site_root . "/includes/header.php";
  $include_sidebar = $site_root . "/includes/treatments_sidebar.php";
  $include_footer = $site_root . "/includes/footer.php";
  $include_opening_times = $site_root . "/includes/opening_times.php";
  include_once($include_header);
  
?>

	<div class="col-md-12 mart_d">
		<h1><?php echo $page_name; ?></h1>
	</div>
	<div class="col-md-8">
		<?php
			echo "<h2>File and Polish</h2>";
			treatment_table($treatment_list_1);
			echo "<h2>Gel and Polish</h2>";
			treatment_table($treatment_list_2);
			echo "<h2>Semilac</h2>";
			treatment_table($treatment_list_3);
			echo "<h2>Acrylic</h2>";
			treatment_table($treatment_list_4);
		?>
	</div>

	<?php
		include_once($include_sidebar);
		include_once($include_footer); 
	?>



