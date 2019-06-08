<?php
include_once("../config/config.php");
include_once("../src/User.php");
session_start();
?>
<!doctype html>
<html>
<head>
	<?php include("../includes/layout.php"); ?>
	<title>Home</title>
</head>
<?php include("../includes/header.php"); ?>
<p>Welcome to ReadyChef<?php if(isset($_SESSION['user'])) echo ", " . $_SESSION['user']->getUsernameHTMLSafe(); ?>.</p>
<?php include("../includes/footer.php"); ?>
</html>