<?php
	
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$message=$_REQUEST['message'];
	
	//Checking input fields
	if(empty($name) || empty($email) || empty($message))
	{
		echo "<script type='text/javascript'>alert('Please fill all the fields');
			window.history.back();
			</script>";
	}
	else
	{
		mail("ushasrimavuri1999@gmail.com","Requesting to Contact",$message,"From: $name <$email>");
		echo "<script type='text/javascript'>alert('Thank you for reaching us.We will be contacting you shortly!!');
			window.history.back();
			</script>";
	}
	
?>