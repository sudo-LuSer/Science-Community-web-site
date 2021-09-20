<!DOCTYPE html>
<html>
	
	<head>

		<title>Sciences Community</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">

		 <meta name="viewport" content="width=device-width, initial-scale=1">

	</head>

	<script src="script/jq.min.js"></script>
	
	<body>

		<label for="darkMode" class="dlabel" style="color: var(--red);">Other Design Mode
			<img src="Images/dark-mode.png" height="50px" width="50px" class="DarkBtn">
		</label>

		<a href="Phone_menu.html"><img src="Images/menu-512.png" height="60px" width="60px" id="menuX"></a>

		<nav id="nav" class="nav">

			<ul>

				<a href="index_.html"><li>Most Sciences Projects</li></a>

				<a href="contact.html"><li>Send us a science project</li></a>

				<a href="contact_forum.php"><li  style="border-bottom: 5px  var(--red) solid;">Contact_Forum</li></a>

			</ul>

		</nav>

			<br>

			<br>

			<h1 class="contactTitle">Contact Me</h1>
			
			<button class="mailBTN" onclick="window.open('mailto:hhitar9485@gmail.com');">My Email</button>

			<br>

		<form class="form" action="messageSent.html">

			<input type="text" name="name" placeholder="Enter your name :" required>

			<br>

			<input type="email" name="emaill" placeholder="your email please !" required class="inputemail">

			<br>

			<label>

			<h4 style="color: var(--territory-text);"> Enter your file here :</h4> 
			<input type="file" name="file" class="File" id="File"></label>
			
			<BR>

			<textarea class="text" placeholder="Enter your message here :" name="msg"></textarea>

			<br>

			<button id="Share" onclick="">Submit</button>

			<br>

			<br>

			<br>

		</form>

		<button class="MyPhoneNum" onclick="window.open('tel:+212622622225');">My Phone Number</button>
		
	</body>

	<script type="text/javascript" src="script/DarkModeScript.js"></script>

</html>

<?php
	
	$name;$eml;$msg;
	
	if(isset($_GET['name'])){

		$name=$_GET['name'];

	}

	if(isset($_GET['emaill'])){

		$eml=$_GET['emaill'];

	}

	if(isset($_GET['msg'])){

		$msg=$_GET['msg'];

	}

	 $to      = 'hhitar9485@gmail.com';
     $subject = 'Sciences';
     $message = $msg;
     $headers = 'From: '.$eml. "\r\n" .
     'Reply-To: '.$eml. "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);

    $success = mail($to, $subject, $message, $headers);

	if (!$success) {

	    header("Location: messageSent.html");
	
	}

?>