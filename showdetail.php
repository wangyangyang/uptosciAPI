<?php
session_start();

include_once( 'config.php' );
include_once( 'oauth2.class.php' );

$c = new uptosciClient( CLINET_KEY , CLINET_SKEY , $_SESSION['token']['access_token'] );

?>

<p>获取最新报道信息</p>
<?php
	$search	=	$c->showdetail('24627898');
	
	echo '<pre>';
	print_r($search);
	exit;
	
?>
