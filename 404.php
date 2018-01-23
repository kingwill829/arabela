<?php 
  $site_root = $_SERVER['DOCUMENT_ROOT'];
  $functions_path = $site_root . "/functions.php";
  require $functions_path;

  $include_header = $site_root . "/includes/header.php";
  $include_footer = $site_root . "/includes/footer.php";
  include_once($include_header);
  
?>

<h1 class="mart_d">Sorry the page you are looking for can not be found</h1>
<?php create_sidebar(); ?>