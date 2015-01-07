<?php
session_start();

include_once( 'config.php' );
include_once( 'oauth2.class.php' );

$o = new UptosciOAuth2( CLINET_KEY , CLINET_SKEY );

$o->debug = TRUE;
$token = '';
if (isset($_REQUEST['code'])) {
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$url	=	CALLBACK_URL;
	$keys['redirect_uri'] = isset($_REQUEST['login']) ? $url.'?login=1' : $url;


	try {
		$token = $o->getAccessToken( 'code', $keys ) ;
	} catch (OAuthException $e) {
	}
}


if ( $token ) {
	$_SESSION['token'] = $token;
	setcookie( 'uptosci_'.$o->client_id, http_build_query($token) );

	if(!isset($_REQUEST['login'])){

?>
授权完成

<p>报道接口</p>

<p><a href='list.php' target='_blank'>最新报道</a></p>

<p><a href='showdetail.php' target='_blank'>文献详情</a></p>

<p><a href='news.php' target='_blank'>业内新闻</a></p>

<?php 
	} else{
?>
<p><a href='memberinfo.php' target='_blank'>用户信息</a></p>
<?php 

}

} else {
?>
授权失败。
<?php
}
?>
