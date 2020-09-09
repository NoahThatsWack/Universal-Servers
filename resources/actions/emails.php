<?php
$action = $_GET["action"];
$myText = $_POST["email_form"];

if($action = "save") {
  $targetFolder = "/resources/actions/data.txt";
  file_put_contents($targetFolder."data.txt", $myText);
}
?>  



<!DOCTYPE html>
<html>
<head>
	<title>Universal Server Hosting</title>
	<link rel="stylesheet" type="text/css" href="resources/css/styles.css">
	<link id="favicon" rel="shortcut icon" type="image/x-icon" href="resources/images/favicon.png">
	<link rel="stylesheet" type="text/php" href="resources/actions/emails.php">
	<link rel="stylesheet" type="text/php" href="resources/actions/data.txt">
	    <style>
      input:focus, textarea:focus, select:focus{
         outline: none;
      }
    </style>
</head>
<body>		
	<img id="icon" src="resources/images/uc.svg">

	<div id="elist">
		<div id="alert">
			<form name="alerts" action="?action=save" onsubmit="return validateForm()" method="post" required>
				<h3 class="alert">Alert Me</h3>
				<input type="email" name="email_form" id="email" placeholder="Email">
				<input type="submit" name="submit" id="submit" value="Sign Up">
			</form>
		</div>
		<div id="faq">
			<h3 class="fh3">FAQ</h3>
			<h3 id="fh" class="rainbowbd">What happens with my email?</h3>
			<h4 class="ht1">Our favorite robot will personally send you information.
				Whenever we release a new update, discount code, or news
				you will be the first to receive the information!</h4>
			<h3 id="fh" class="rainbowbd">Do I get any benefits?</h3>
			<h4 class="ht2">Yes, anyone who is on the newsletter before launch
				will receive a post launch prize. All prizes will be linked
				with the email used for the newsletter.</h4>
			<button class="ib2" id="ib2" onclick="buttonClick2()">Close</button>
		</div>

		<div id="faqh">
			<button class="ib" id="ib1" onclick="buttonClick()">FAQ</button>
		</div>
	</div>


<script type="text/javascript">
	function buttonClick() {
		document.getElementById('faq').setAttribute('style', 'display: block;')
		document.getElementById('faqh').setAttribute('style', 'display: none;')
	}
</script>

<script type="text/javascript">
	function buttonClick2() {
		document.getElementById('faq').setAttribute('style', 'display: none;')
		document.getElementById('faqh').setAttribute('style', 'display: block;')
	}
</script>

<script type="text/javascript">
	function validateForm() {
		var x = document.forms["alerts"]["email"].value;
		if (x == "") {
			alert("Email must be filled out before submitting.")


			return false;
		}
	}
</script>

</body>
</html>