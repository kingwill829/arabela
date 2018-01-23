<?php 
  use PHPMailer\PHPMailer\PHPMailer;
  $site_root = $_SERVER['DOCUMENT_ROOT'];
  require $site_root . '/vendor/phpmailer/src/PHPMailer.php';
  require $site_root . '/vendor/phpmailer/src/Exception.php';
  require $site_root . '/vendor/phpmailer/src/SMTP.php';
  ob_start();
  
  $functions_path = $site_root . "/functions.php";
  $include_data   = $site_root . "/data/data_contact.php";
  $include_header = $site_root . "/includes/header.php";
  $include_footer = $site_root . "/includes/footer.php";

  require $include_data;
  include_once($include_header);
  require $functions_path;


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $phone = trim(filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING));
    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));

    if ($name == "" || $email == "" || $details == "") {
      echo "Please fill in info";
      exit;
    }
    if ($_POST['address'] != "") {
      echo "bad form";
      exit;
    }

    if (!PHPMailer::validateAddress($email)) {
      echo "Invalid Email";
      exit;
    }
    
    $email_body = "";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Phone number: " . $phone . "\n";
    $email_body .= "Details: " . $details . "\n";

    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "willking829@gmail.com";
    //Password to use for SMTP authentication
    $mail->Password = "qprzgsqpfwlommdv";
    //It's important not to use the submitter's address as the from address as it's forgery,
    //which will cause your messages to fail SPF checks.
    //Use an address in your own domain as the from address, put the submitter's address in a reply-to
    $mail->setFrom('will@findmeagift.com', $name);
    $mail->addReplyTo($email, $name);
    // Where the email will be sent to
    $mail->addAddress('willking829@gmail.com', 'Will King');
    $mail->Subject = 'Arabella Enquiry from ' . $name;
    $mail->Body = $email_body;
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        exit;
    } 
    header("location:contact.php?status=thanks");
  }
?>

	<div class="col-md-12 mart_d">
		<h1 class="tac"><?php echo $page_name; ?></h1>
	</div>
	<div class="col-md-12">
    <div class="tac contact">
      <?php 
      if (isset($text_1)) {
        echo "<p>" . $text_1 . "</p>";
        } 

      echo '<h2>Call Us</h2>';
      echo '<div class="marb_d contact__phone"><a href="tel:01926 315 933" class="co " itemprop="telephone">01926 315933</a></div>';
      echo '<hr />';
      echo '<h2>Email Us</h2>';
       if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
        echo '<h1>Thank you</h1>';
        echo '<p>Thanks for sending your email</p>';
      } else { ?>
        <div class="contact__form">
          <form method="post" action="contact.php">
           
              <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" />
             </div>
              <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" />
             </div>
              <div>
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" />
             </div>
              <div>
                <label for="details">Your Message</label>
                <textarea name="details" id="details"></textarea>
             </div>
              <div style="display:none">
                <label for="address">Address</label>
                <input type="text" name="address" id="address"></input>
                  <p>Please leave blank</p>
              </div>
            <input type="submit" value="Send" class="contact__form-button" />
          
          </form>
        </div>
       <?php } ?>

    </div>
	</div>
  <?php
    include_once($include_footer); 
  ?>
