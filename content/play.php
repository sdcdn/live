<?php
error_reporting(0);
$rm=include_once('rm.php');
$ws=include_once('ws.php');
$ys=include_once('ys.php');
$ysqx=include_once('ysqx.php');
$gt=include_once('gt.php');
$ty=include_once('ty.php');
$gj=include_once('gj.php');

$rmid=intval($_GET['rmid']);
$wsid=intval($_GET['wsid']);
$ysid=intval($_GET['ysid']);
$ysqxid=intval($_GET['ysqxid']);
$gtid=intval($_GET['gtid']);
$tyid=intval($_GET['tyid']);
$gjid=intval($_GET['gjid']);

$rmname=$ws[$rmid]['name'];
$wsname=$ws[$wsid]['name'];
$ysname=$ys[$ysid]['name'];
$ysqxname=$ysqx[$ysqxid]['name'];
$gtname=$gt[$gtid]['name'];
$tyname=$ty[$tyid]['name'];
$gjname=$ty[$gjid]['name'];
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<meta name="renderer"  content="webkit">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>cyberplayer</title>
    <script type="text/javascript" src="https://bce.bdstatic.com/jwplayer/3.5.2/cyberplayer.js"></script>
      <style type="text/css">
      html, body {width:100%;height:100%;margin:auto;overflow: hidden;}
    </style>
<!--统计代码开始-->
<script>
!function(p){"use strict";!function(t){var s=window,e=document,i=p,c="".concat("https:"===e.location.protocol?"https://":"http://","sdk.51.la/js-sdk-pro.min.js"),n=e.createElement("script"),r=e.getElementsByTagName("script")[0];n.type="text/javascript",n.setAttribute("charset","UTF-8"),n.async=!0,n.src=c,n.id="LA_COLLECT",i.d=n;var o=function(){s.LA.ids.push(i)};s.LA?s.LA.ids&&o():(s.LA=p,s.LA.ids=[],o()),r.parentNode.insertBefore(n,r)}()}({id:"JHmOWmYgYr0mXIry",ck:"JHmOWmYgYr0mXIry"});
</script>
<!--统计代码结束-->
</head>
<body>
<div id="playercontainer"></div>
<script type="text/javascript">
    var player = cyberplayer("playercontainer").setup({
    	width: "100%", // 宽度，也可以支持百分比(不过父元素宽度要有)
        height: "100%", // 高度，也可以支持百分比
        title: "百度点播/直播",
        file: "<?php echo $rm[$rmid]['url']; ?><?php echo $ws[$wsid]['url']; ?><?php echo $ys[$ysid]['url']; ?><?php echo $ysqx[$ysqxid]['url']; ?><?php echo $gt[$gtid]['url']; ?><?php echo $ty[$tyid]['url']; ?><?php echo $gj[$gjid]['url']; ?>", // 
        image: "https://cdn.jsdelivr.net/gh/cc963020001/image/30f07120fcc36c44a7e9edd99d9581a5.jpg", // 视频截图
        autostart: true,// 是否自动播放
        stretching: "uniform",// 拉伸设置
        repeat: true,// 是否重复播放
        volume: 98,//默认音量
        controls: true, // controlbar是否显示
        starttime: 0, 
        rightclick: [ // 右键配置
            {
                title: "Web/Android/iOS",
                link: "https://www.360mb.net"
            },
            {
                title: "由360模板吧提供服务", // 标题1
                link: "https://www.360mb.net/313.html" // 跳转链接
            }
        ],
        ak: "41707430fa52422f83b8efdc797f90c1"// 公有云平台注册即可获得accessKey
    });
</script>
</body>
</html>