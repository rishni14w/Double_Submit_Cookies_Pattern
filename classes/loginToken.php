<!--IT15529732-->
<?php

require_once 'Token.php';


if(isset($_POST['username'],$_POST['Password']))
{
	$Password=$_POST['Password'];
	$username=$_POST['username'];

	if(!empty($Password)&& !empty($username))
	{
		if($username === 'user' && $Password === 'user123')
		{
			session_start();
			$expiry=time()+60*60*24;
			//set session id as a cookie
			setcookie("sessionId",session_id(),$expiry); 
			
			//generate CSRF token and set to a cookie
			setcookie("CSRFToken",Token::generate(),$expiry,"/"); 
			//echo '<script>alert(document.cookie);</script>'; 
			header('Location: ../Transaction.php');
			
		}
		else
		{
			if(isset($_COOKIE["sessionId"]))
			{
				
				unset($_COOKIE["sessionId"]);
				
			}
			
			echo "invalid username or pwd";
		}
		
	}
}
?>
