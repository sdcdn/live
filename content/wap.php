<?php
error_reporting(0);
$rm=include_once('rm.php');
$ys=include_once('ys.php');
$ysqx=include_once('ysqx.php');
$hy=include_once('hy.php');
$ws=include_once('ws.php');
$gt=include_once('gt.php');
$ty=include_once('ty.php');
$gj=include_once('gj.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>电视直播导航</title>
<meta name="keywords" content="智卓星网开发组，高清电视直播，卫视直播频道，央视直播网，手机在线观看直播，直播导航列表">
<meta name="description" content="直播源代理，在线观看电视直播，卫视直播频道">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-control" content="max-age=1700">
<meta name="viewport" content="user-scalable=no, width=device-width">
<meta name="MobileOptimized" content="320">
<meta name="format-detection" content="telephone=no">

<link href="static/css/style.css" rel="stylesheet" type="text/css">
<script src="static/js/jquery.js"></script>
</head>
<body>
<header class="headerbox">
<div class="header">
<div class="return headin inleft"><a href="./"><img src="static/picture/left.png"></a></div>
<div class="headertit">电视直播导航</div>
<div class="bill headin inright"><a href="./"><img src="static/picture/bill.png"></a></div>
</div>
</header>
<section style="height:2.5rem;"></section>
<div class="location"><a href="./">首页</a>&nbsp;>&nbsp;直播列表</div>
<section class="module-boxA">
<div class="module-boxA-hd">
<h3 class="module-boxA-tit">热门频道</h3>
</div>
<div class="module-listA">
<ul>
<b><?php foreach($rm as $k=>$v){ ?><li><a href="play.php?rmid=<?php echo $k;?>"><?php echo $v['name'];?></a></li>                  
          <?php } ?>
</b>
</ul>
</div>
</section>
<section class="module-boxA">
<div class="module-boxA-hd">
<h3 class="module-boxA-tit">央视高清</h3>
</div>
<div class="module-listA">
<ul>
<b><?php foreach($ys as $k=>$v){ ?><li><a href="play.php?ysid=<?php echo $k;?>"><?php echo $v['name'];?></a></li>                  
          <?php } ?>
</b>
</ul>
</div>
</section>
<section class="module-boxA">
<div class="module-boxA-hd">
<h3 class="module-boxA-tit">央视清晰</h3>
</div>
<div class="module-listA">
<ul>
<b><?php foreach($ysqx as $k=>$v){ ?><li><a href="play.php?ysqxid=<?php echo $k;?>"><?php echo $v['name'];?></a></li>                  
          <?php } ?>
</b>
</ul>
</div>
</section>
<section class="module-boxA">
<div class="module-boxA-hd">
<h3 class="module-boxA-tit">轮播频道</h3>
</div>
<div class="module-listA">
<ul>
<b><?php foreach($hy as $k=>$v){ ?><li><a href="huya.php?hyid=<?php echo $k;?>"><?php echo $v['name'];?></a></li>                  
          <?php } ?>
</b>
</ul>
</div>
</section>
<section class="module-boxA">
<div class="module-boxA-hd">
<h3 class="module-boxA-tit">卫视频道</h3>
</div>
<div class="module-listA">
<ul>
<b><?php foreach($ws as $k=>$v){ ?><li class=""><a href="play.php?wsid=<?php echo $k;?>"><?php echo $v['name'];?></a></li>
		  <?php } ?>
		  </b>
</ul>
</div>
</section>
<section class="module-boxA">
<div class="module-boxA-hd">
<h3 class="module-boxA-tit">港澳台频道</h3>
</div>
<div class="module-listA">
<ul>
<b>
<?php foreach($gt as $k=>$v){ ?><li><a href="play.php?gtid=<?php echo $k;?>"><?php echo $v['name'];?></a></li>    
          <?php } ?>
          </b>
</ul>
</div>
</section>
<section class="module-boxA">
<div class="module-boxA-hd">
<h3 class="module-boxA-tit">国际频道</h3>
</div>
<div class="module-listA">
<ul>
<b>
<?php foreach($gj as $k=>$v){ ?><li><a href="play.php?gjid=<?php echo $k;?>"><?php echo $v['name'];?></a></li>    
          <?php } ?>
          </b>
</ul>
</div>
</section>
<section class="module-boxA">
<div class="module-boxA-hd">
<h3 class="module-boxA-tit">天眼频道</h3>
</div>
<div class="module-listA">
<ul>
<b>
<?php foreach($ty as $k=>$v){ ?><li><a href="play.php?tyid=<?php echo $k;?>"><?php echo $v['name'];?></a></li>    
          <?php } ?>
          </b>
</ul>
</div>
</section>
<section style="height:2.5rem;"></section>
<footer class="footbox">
<ul class="flexbox">
<li><a href="./"><img src="static/picture/wkjmqlen7qaaxb2faaaax10n3z8439.svg">首页</a></li>
<li><a href="https://www.2024tv.com"><img src="static/picture/wkjmqlen7seasqfbaaacuuel4vs088.svg">影院</a></li>
<li><a href="http://api.jxvip.top"><img src="static/picture/cgpqvfen7qyafiilaaacd-ka8tw940.svg">搜索</a></li>
<li><a href="http://www.360mb.net"><img src="static/picture/cgpqvfen7r6axbnnaaab5bk_yt0543.svg">论坛</a></li>
</ul>
</footer>
</body>

</html>
