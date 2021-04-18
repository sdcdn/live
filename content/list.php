<?php include("config.php");?> 
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
<meta charset="utf-8" />
<title>直播列表</title>
<style type="text/css">
* {margin: 0;padding: 0;outline: none;}
html {height: 100%; }
*html{background-image:url(style/images/img/-1blank);background-attachment:fixed;}
body{height:100%;background:#232323;}
body, h1, h2, h3, h4, h4, h6, hr, p, blockquote, dl, dt, dd, ul, ol, li, pre, form, fieldset, legend, button, input, textarea, th, td { margin:0; padding:0; }
h1, h2, h3, h4, h4, h6 { font-size:100%; }
/*定位*/
.none { display:none }
/*通用*/
.bingdoutv{ width:100%;height:100%;}
.main {overflow:hidden; zoom:1 }
.main .left-sider { float:left; width:100%; }
.operate h3 { font-family: "Microsoft YaHei",微软雅黑; font-size:16px; background:#232323 url("style/images/img/U8d891af2b286481fbc35903efb3ee265n.png") 15px center no-repeat;_background:#232323 url("style/images/img/Ub0afd996eae24cfeb0466bae31f9a699r.png") 15px center no-repeat; height:43px; line-height:43px; padding-left:12px;color:#888;text-indent:30px; }
.operate ul li { display:inline; margin-bottom:1px;}
.operate ul li a { text-decoration:none; font-size:14px; color:#888; display:block;  height:43px;  line-height:43px;  }
.operate ul li a.noline { border-bottom:none; }
.operate ul li a:hover{ color:#eee;text-decoration:none;background:url("style/images/img/U595f8142ce3e4314941810ff113678b7B.png") 10px 10px no-repeat;_background:url("style/images/img/U71f799fe9d7d46e3a18399a5325d3da0R.png") 10px 10px no-repeat;}
.operate ul li a.sel{ color:#eee;text-decoration:none;background:url("style/images/img/U61b89571da6d4ff99488b9e36e382822q.png") 10px 10px no-repeat;_background:url("style/images/img/Uf76af22c42c54c86997cf97b5dbe85eb8.png") 10px 10px no-repeat;}
.operate ul li a.selected:hover { color:#fff; }
.operate ul li .selected { background-color:#eee;  background-position:200px -9px; color:#fff; }
.operate ul li {  display:inline-block; width:100%; position: relative; min-height:43px; _height:43px; z-index: 10; zoom:1 }
.operate ul li h4 { cursor:pointer; background:#2e2e2e url(style/images/img/U89f8a8d3280442909ba9b3f42ece14835.png) no-repeat 10px 18px; padding-left:30px; text-decoration:none; font-size:14px; color:#999; display:block;  line-height:43px; font-weight:normal; }
.operate ul li.noline { border-bottom:none; }
.operate ul li h4:hover { color:#eee; text-decoration:none; }
.operate ul li.selected h4 { background-position:10px -37px; }
.operate ul li a { }
.operate ul li .on a { color:#eee; font-weight:bold; }
.operate ul li a:hover { color:#eee; text-decoration:none;}
.bg-color { background-color:#8caf00; }
.operate li .list-item { padding:5px 0; position:relative; zoom:1;background:#232323; }
.operate li .list-item p { padding-left:8px;white-space:nowrap;}
.operate li .list-item a { background:none;  border:none; color: #888; display:block; height:32px; line-height: 32px; margin: 0 -1px 0 1px; padding-left: 30px;  position: relative; text-decoration: none; font-size:12px;background:url("style/images/img/U211e4a0c3e6445d48f81f97643ca6d39Q.png") 10px 10px no-repeat;_background:url("style/images/img/U83dc719bbd484e6588bd244bd461bc7bb.png") 10px 10px no-repeat; }
</style>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
<script>
// JavaScript Document
function navList(id) {
    var $obj = $("#J_navlist"), $item = $("#J_nav_" + id);
    $item.addClass("on").parent().removeClass("none").parent().addClass("selected");
    $obj.find("h4").hover(function () {
        $(this).addClass("hover");
    }, function () {
        $(this).removeClass("hover");
    });
    $obj.find("p").hover(function () {
        if ($(this).hasClass("on")) { return; }
        $(this).addClass("hover");
    }, function () {
        if ($(this).hasClass("on")) { return; }
        $(this).removeClass("hover");
    });
    $obj.find("h4").click(function () {
        var $div = $(this).siblings(".list-item");
        if ($(this).parent().hasClass("selected")) {
            $div.slideUp(600);
            $(this).parent().removeClass("selected");
        }
        if ($div.is(":hidden")) {
            $("#J_navlist li").find(".list-item").slideUp(600);
            $("#J_navlist li").removeClass("selected");
            $(this).parent().addClass("selected");
            $div.slideDown(600);

        } else {
            $div.slideUp(600);
        }
    });
}
</script>
</head>
<body oncontextmenu="return false" onselectstart="return false">
<div class="bingdoutv">
<div class="main">
<div class="left-sider">
<div class="operate">
<h3>直播列表<a style="margin-left:5px;color:#888;text-decoration:none;font-size:13px;" rel="nofollow" href='javascript:location.reload()'>(刷新)</a></h3>
<ul id="J_navlist">
<li>
<h4>热门频道</h4>
<div class="list-item">
<?php foreach($rm as $k=>$v){ ?><p><a href="play.php?rmid=<?php echo $k;?>" target="iframe-player"><?php echo $v['name'];?></a></p> <?php } ?>
</div>
</li>
<li>
<h4>央视高清</h4>
<div class="list-item none">
<?php foreach($ys as $k=>$v){ ?><p><a href="play.php?ysid=<?php echo $k;?>" target="iframe-player"><?php echo $v['name'];?></a></p> <?php } ?>
</div>
</li>
<li>
<h4>央视清晰</h4>
<div class="list-item none">
<?php foreach($ysqx as $k=>$v){ ?><p><a href="play.php?ysqxid=<?php echo $k;?>" target="iframe-player"><?php echo $v['name'];?></a></p> <?php } ?>
</div>
</li>
<li>
<h4>港澳台频道</h4>
<div class="list-item none">
<?php foreach($gt as $k=>$v){ ?><p><a href="play.php?gtid=<?php echo $k;?>" target="iframe-player"><?php echo $v['name'];?></a></p> <?php } ?>
</div>
</li>
<li>
<h4>卫视直播</h4>
<div class="list-item none">
<?php foreach($ws as $k=>$v){ ?><p><a href="play.php?wsid=<?php echo $k;?>" target="iframe-player"><?php echo $v['name'];?></a></p> <?php } ?>
</div>
</li>
<li>
<h4>影视轮播</h4>
<div class="list-item none">
<?php foreach($hy as $k=>$v){ ?><p><a href="huya.php?hyid=<?php echo $k;?>" target="iframe-player"><?php echo $v['name'];?></a></p> <?php } ?>
</div>
</li>
<li>
<h4>国际频道</h4>
<div class="list-item none">
<?php foreach($gj as $k=>$v){ ?><p><a href="play.php?gjid=<?php echo $k;?>" target="iframe-player"><?php echo $v['name'];?></a></p> <?php } ?>
</div>
</li>
<li>
<h4>天眼直播</h4>
<div class="list-item none">
<?php foreach($ty as $k=>$v){ ?><p><a href="play.php?tyid=<?php echo $k;?>" target="iframe-player"><?php echo $v['name'];?></a></p> <?php } ?>
</div>
</li>
<script type="text/javascript" language="javascript">
			navList(12);
		</script>
</div>
</div>
</div>
</div>
<script type="text/javascript">
        window.onload = function(){
            document.onkeydown = function (){
                var e = window.event || arguments[0];
                //F12
                if(e.keyCode == 123){
                    return false;
                //Ctrl+Shift+I
                }else if((e.ctrlKey) && (e.shiftKey) && (e.keyCode == 73)){
                    return false;
                //Shift+F10
                }else if((e.shiftKey) && (e.keyCode == 121)){
                    return false;
                //Ctrl+U
                }else if((e.ctrlKey) && (e.keyCode == 85)){
                    return false;
                }
            };
            document.oncontextmenu = function (){
                return false;
            }
        }
    </script>
<script type="text/javascript"  src="style/js/su_new.js"></script>
</body>
</html>