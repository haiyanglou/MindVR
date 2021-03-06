

<?php session_start();?>

<html>

<?php

require "db.php";

require "head.php";

?>

<body>

<?php 


include "header.php";
?>

<?php

	if(isset($_GET['pagetype']))
	{
		$pagetype = $_GET['pagetype'];
		
		if($pagetype=="home")
		{
			include "home.php";
		}
		else if($pagetype=="login")
		{			
			if(!isset($_SESSION['username']))
			{
			include "login.php";
			}
			else header('Location: index.php?pagetype=home');
		}
		else if($pagetype=="signup")
		{			
			if(!isset($_SESSION['username']))
			{
			include "signup.php";
			}
			else header('Location: index.php?pagetype=home');
		}
		
		else if($pagetype=="profile")
		{
			if(isset($_SESSION['username']))
			{
			include "profile.php";
			}
		}
		else if($pagetype=="environments")
		{
			include "environments.php";
		}
		else if($pagetype=="library")
		{
			include "library.php";
		}
		
		else if($pagetype=="logout")
		{
			if(isset($_SESSION['username']))
			{
				include "logout.php";
			}
			else header('Location: index.php?pagetype=login');
		}
		else if($pagetype=="profile")
		{
			require "profile.php";
		}
		else if($pagetype=="landing")
		{
			header('Location: landing.php');	
		}
		
		else
		{
				include "oops.php";
		}
	
	//other page types also come here.
	}
	else
	{
		header('Location: landing.php');	
	}

include "footer.php";

?>


</body>

<script>

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})


</script>


</html>