<!--IT15529732-->
<?php
require_once 'Token.php';
require_once 'loginToken.php';

if(isset($_POST['from'],$_POST['to'],$_POST['amount'],$_POST['csrftoken']))
{
	$From=$_POST['from'];
	$To=$_POST['to'];
	$Amount=$_POST['amount'];
	$CSRF=$_POST['csrftoken'];

	
	if(!empty($From)&& !empty($To)&& !empty($Amount)&& !empty($CSRF))
	{
		//get the value of csrftoken cookie received
		$cookiecsrf=Token::getCSRFcookie();

		//check the csrf token value from the request body with the CSRFtoken cookie value.
		if($CSRF === $cookiecsrf)
		{
			echo "Success";
		}
		else
		{
			echo "Error";
		}
	}
	else
	{
	}
}
else
{
	echo "Please fill all fields";
}

?>

