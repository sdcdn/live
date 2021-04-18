<?php
error_reporting(0);
$hy=include_once('hy.php');
$hyid=intval($_GET['hyid']);
$hyname=$hy[$hyid]['name'];
?>

<iframe src="https://api.qianqi.net/tv/huya/?id=<?php echo $hy[$hyid]['url']; ?>" width="100%" height="100%" scrolling="no" frameborder="0"></iframe>

