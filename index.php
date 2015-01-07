<?php
session_start();

include_once( 'config.php' );
include_once( 'oauth2.class.php' );

$o = new UptosciOAuth2( CLINET_KEY , CLINET_SKEY );
$url	=	CALLBACK_URL;
$code_url = $o->getAuthorizeURL( $url );

$login_url = $o->getAuthorizeURL( $url.'?login=1','code',TRUE );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uptosci Oauth2 Demo</title>
</head>

<body>
	<p>本DEMO演示了PHP SDK的授权及接口调用方法，开发者可以在此基础上进行灵活多样的应用开发。</p>
    
	<p><a href="<?php echo $code_url;?>" target='_blank'>点击进入授权页面</a></p>


	<p>使用博文网帐号登录</p>
    
	<p><a href="<?php echo $login_url;?>" target='_blank'>点击进入登录</a></p>
</body>
</html>
