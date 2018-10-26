<!--IT15529732-->
<?php
class Token
{
	public static function generate()
	{
		return base64_encode(openssl_random_pseudo_bytes(32));
	}

	public static function getCSRFcookie()
	{
		$NAME=$_COOKIE['CSRFToken'];
		
		
		return $NAME;
		
	}
}
?>	