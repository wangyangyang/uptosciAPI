<?php
session_start();

include_once( 'config.php' );
include_once( 'oauth2.class.php' );

$c = new uptosciClient( CLINET_KEY , CLINET_SKEY , $_SESSION['token']['access_token'] );

?>

<p>获取用户信息</p>
<?php
	$data	=	$c->showuserinfo();
	
	echo '<pre>';
	print_r($data);
	exit;
	
?>
