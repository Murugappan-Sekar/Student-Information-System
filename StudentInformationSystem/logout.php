<?php
	
	session_start();
	$_SESSION['user']=0;
	$_SESSION['log']=2;
	$_SESSION['sign']=0;
	function Redirect($url, $permanent = false)
	{
	    if (headers_sent() === false)
	    {
	        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
	    }
	    exit();
	}	
	Redirect('http://localhost/StudentInformationSystem/master.php', false);
?>
