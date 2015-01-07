<?php
session_start();

include_once( 'config.php' );
include_once( 'oauth2.class.php' );

$c = new uptosciClient( CLINET_KEY , CLINET_SKEY , $_SESSION['token']['access_token'] );


?>

<p>获取最新报道信息</p>
<?php
	$report	=	$c->reprots_list();
	
	if( $report['info'] && !isset($report['error'])){
		foreach( $report['info'] AS $v ){
?>
<h2><a href='javascript:;'><?php echo $v['title'];?></a></h2>

<p><?php echo $v['description']?></p>

<?php
		}
	}elseif(isset($report['error'])){
		echo $report['error'];
	}
?>