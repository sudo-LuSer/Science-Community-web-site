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

		<a href="Phone_menu.php"><img src="Images/menu-512.png" height="60px" width="60px" id="menuX"></a>

		<nav id="nav" class="nav">

			<ul>

				<a href="index_.php"><li>Most Sciences Projects</li></a>

				<a href="contact.php"><li>Send us a science project</li></a>

				<a href="contact_forum.php"><li  style="border-bottom: 5px  var(--red) solid;">Contact_Forum</li></a>

			</ul>

		</nav>

			<br>

			<br>

			<h1 class="contactTitle">Contact Me</h1>
			
			<button class="mailBTN" onclick="window.open('mailto:hhitar9485@gmail.com');">My Email</button>

			<br>

		<form class="form" form action="" method="post" >

			<input type="text" name="name" placeholder="Enter your name :" required>

			<br>

			<input type="email" name="email" placeholder="your email please !" required class="inputemail">

			<br>

			<label>

			<h4 style="color: var(--territory-text);"> Enter your file here :</h4> 
			<input type="file" name="file" class="File" id="File"></label>
			
			<BR>

			<textarea class="text" placeholder="Enter your message here :" name="message"></textarea>

			<br>

			<button id="Share" name="submit" value="Submit">Submit</button>

			<br>

			<br>

			<br>

		</form>

		<button class="MyPhoneNum" onclick="window.open('tel:+212622622225');">My Phone Number</button>
		
	</body>

	<script type="text/javascript" src="script/DarkModeScript.js"></script>

</html>



<?php 

function Send___(){
  	
  	sleep(5);

  	header('Location: <ital>messageSent.php</ital>');

}

if(isset($_POST['submit'])){
    $to = "hhitar9485@gmail.com"; // this is your Email address

    $from = $_POST['email']; // this is the sender's Email address
    
    $subject = "Form submission";
    
    $subject2 = "Copy of your form submission";
    
    $message = $_POST['name'] . " wrote the following:" . "\n\n" . $_POST['message'];
    
    $message2 = "Here is a copy of your message " . $_POST['name'] . "\n\n" . $_POST['message'];

    
    $headers = "From:" . $from;
    
    $headers2 = "From:" . $to;
    
    mail($to,$subject,$message,$headers);
    
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $POST['name'] . ", we will contact you shortly.";
    }

    Send___(); 
?>