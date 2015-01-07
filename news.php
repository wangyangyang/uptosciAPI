<?php
session_start();

include_once( 'config.php' );
include_once( 'oauth2.class.php' );

$c = new uptosciClient( CLINET_KEY , CLINET_SKEY , $_SESSION['token']['access_token'] );

?>

<p>获取业内新闻信息</p>
<?php
	$data	=	$c->news();
	
	if( $data['info'] && !isset($data['error'])){
		foreach( $data['info'] AS $v ){
?>
<h2><a href='/demo/weboauth/newsshow.php?id=<?php echo $v['id']?>' target='_blank'><?php echo $v['title'];?></a></h2>

<p><?php echo $v['description']?></p>

<?php
		}
	}elseif(isset($data['error'])){
		echo $data['error'];
	}
?>