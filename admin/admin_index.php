<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  require_once('phpscripts/config.php');
  confirm_logged_in();



?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal</title>
 <link rel="stylesheet" type="text/css" href="../admin/css/main.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="top_section">
  <h1>Welcome Company Name to your admin page</h1>
  <?php echo "<h2>Hi {$_SESSION['user_name']} </h2>";

//  displayLogin();

  ?>
</div>

  <div id="welcome_message_div">
    <i id="x" class="fa fa-close" style="font-size:24px"></i>
    <p class="welcome_message"> </p>
  </div>


</body>
<script src="../admin/js/main.js"></script>
</html>
