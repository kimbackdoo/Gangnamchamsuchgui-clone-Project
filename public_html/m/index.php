<?
/*
 * author	: 김재훈
 * date		: 2020-12-31
 * desc	    : 모바일사이트
 */
include_once("./_common.php");
include_once("{$g4["path"]}/lib/thumb.lib.php");
define("__INDEX",TRUE);
include_once("./head.php");

?>

<section>

	<?include_once("{$g4["path"]}/m/include/mainvisual.php");?>

</section>

<style>
.product_box { width:250px; height:90px; box-sizing:border-box; padding:22px 0 0 10px; background:#fff; position:relative; }
.pro_info { width:180px; height:100%; text-align:left; }

.Mainlist { width:100%; height:1011px; text-align:center; background:url('/m/images/main_product_bg.jpg') no-repeat center top; box-sizing:border-box; padding-top:171px; }
.Mainlist ul { display:inline-block; width:540px; }
.Mainlist ul li {position:relative; float:left; width:250px; height:36 5px; margin:0px 0 30px 40px;}
.Mainlist ul li:nth-child(2n+1) { margin-left:0; }
.Mainlist ul li span.Thum { display:inline-block; }
.Mainlist ul li span.Tit { font-size:16px; color:#000; display:block; }
.Mainlist ul li span.Price { font-size:16px; color:#111; display:block; }
.Mainlist ul li span.Line {position:absolute;top:326px;left:0;background:#d9d9d9;width:289px;height:1px;}
.Mainlist ul li span.Btn {position:absolute;top:25px;right:10px;}

.Mainlist2 {float:left;}
.Mainlist2 ul {float:left;margin-bottom:40px;}
.Mainlist2 ul li {position:relative;float:left;width:289px;height:375px;margin:0px 0 0 21px;}
.Mainlist2 ul li div span.Thum {position:absolute;top:0;left:0;}
.Mainlist2 ul li div span.Tit {position:absolute;color:#717171;top:254px;left:0px;font-size:22px;}
.Mainlist2 ul li div span.Price {position:absolute;color:#e70a0a;top:344px;right:127px;font-size:22px;font-weight:bold;}
.Mainlist2 ul li div span.Line {position:absolute;top:326px;left:0;background:#d9d9d9;width:289px;height:1px;}
.Mainlist2 ul li div span.Btn {position:absolute;top:346px;right:0;}
</style>


<?
include_once("./tail.php");
?>
