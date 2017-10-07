<?php
	session_start();
	if(!isset($_SESSION['log']))
		$_SESSION['log']=0;
	if(!isset($_SESSION['user']))
		$_SESSION['user']=0;
	if(!isset($_SESSION['sign']))
		$_SESSION['sign']=0;
	$_SESSION['signup']=0;
	if($_SESSION['log']==0){
		include 'unlogged.php';
	}else if($_SESSION['log']==2){
		echo "<script>alert('You have been successfully logged out');</script>";
		$_SESSION['log']=0;
		include 'unlogged.php';
	}else if($_SESSION['log']==1){
		echo "<script>alert('Logged in as : ".$_SESSION['user']." ');</script>";
		include 'logged.php';
	}else if($_SESSION['log']==4){
		echo "<script>alert('Invalid username or password');</script>";
		$_SESSION['log']=0;
		include 'unlogged.php';
	}
	else{
		echo "<script>alert('Did you try accessing pages that requires previleges?');</script>";
		$_SESSION['log']=0;
		include 'unlogged.php';
	}
	if($_SESSION['sign']==1){
		$_SESSION['sign']=0;
		echo "<script>alert('Successfully registered.Login with the same');</script>";
	}else if($_SESSION['sign']==2){
		$_SESSION['sign']=0;
		echo "<script>alert('OOPS there was an error while registering');</script>";
	}

?>
