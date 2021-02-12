<style>
.swiper-mainvisual { width:100%; min-width:1200px; max-width:1919px; height: 1000px; position:relative; margin:0 auto; z-index:1; }
.swiper-mainvisual .swiper-slide { width:100%; min-width:1200px; max-width:1919px; height:1000px; position:relative; margin:0 auto; }

.RightArea { position:absolute; top:0; right:0; width:300px; height:100%; z-index:2; }
.LeftArea { position:absolute; top:0; left:0; width:300px; height:100%; z-index:2; }
.RightArea > img { visibility: hidden; position:absolute; top:50%; transform:translateY(-50%); right:50px; }
.LeftArea > img { visibility: hidden; position:absolute; top:50%; transform:translateY(-50%); left:50px; }

.RightArea:hover > img,
.LeftArea:hover > img { visibility: visible; }

.MainCopy { background-color: #010101; transition:1s; position:absolute; height:160px; bottom:-160px; width: 100%; margin: 0 auto; z-index:3; }
.MainCopy.on { bottom:0; }

.copy_up { position: absolute; top:-80px; transform:translateX(-50%); right:50%; }

.MainCopy_div { width: 1200px; margin: 0 auto; color: #818181; }

.MainCopy_div1 { border-bottom: 1px solid #353535; padding: 22px 0; }
.MainCopy_div1 > ul { display: flex; }
.MainCopy_div1 > ul > li { float: left; position: relative; padding: 0 11px; }
.MainCopy_div1 > ul > li:first-child { padding-left:0; }
.MainCopy_div1 > ul > li:not(:first-child)::before { content:""; position:absolute; left:0; top:50%; transform:translateY(-50%); width:2px; height:2px; border-radius:100%; background:#818181; }
.MainCopy_div1 > ul > li > a { color : #818181; }
.MainCopy_div1 > ul > li:last-child { color: #ed1c24; }

.MainCopy_div2 { display: flex; justify-content: space-between; margin-top: 24px; }
.MainCopy_div2 > div > p { color: #818181; }
.MainCopy_div2 > div > p > span { padding: 0 10px; }
.MainCopy_div2 > div > span { display: inline-block; margin: 10px 0 36px 0; }
</style>

<div class="swiper-container swiper-mainvisual" >
	<div class="swiper-wrapper">
		<?for($i=1; $i<=4; $i++){?>
			<div style="background:no-repeat url('/res/images/mainvisual/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
			</div>
		<?}?>
	</div>

	
	<div class="RightArea"><img class="MainRight" src="/res/images/mainvisual/right.png" alt="메인비주얼 다음버튼" /></div>
    <div class="LeftArea"><img class="MainLeft" src="/res/images/mainvisual/left.png" alt="메인비주얼 이전버튼" /></div>

	<div class="MainCopy">
		<a href="#copybtn" onclick="CopyOpen();"><img src="/res/images/mainvisual/copy_up.png" alt="카피 업 버튼" class="copy_up" /></a>
		
		<div class="MainCopy_div">
			<div class="MainCopy_div1">
				<ul>
					<li><a href="#">오시는 길</a></li>
					<li><a href="javascript:adm()">관리자 페이지</a></li>
					<li>예약문의 064)794-4555</li>
				</ul>
			</div>
			<div class="MainCopy_div2">
				<div>
					<p>
						강남 참숯구이<span>|</span>
						제주특별자치도 서귀포시 안덕면 서광동로 103<span>|</span>
						대표자:강남훈, 김선미<span>|</span>
						TEL:064)794-4555<span>|</span>
						사업자번호:616-26-87175
					</p>
					<span>Copyright &copy; 2020. <?=$g4['title']?>. All Right Reserved.</span>
				</div>
				<div>
					<a href="javascript:it9()"><img src="/res/images/mainvisual/it9.png" alt="아이티나인 홈페이지 버튼" /></a>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	function CopyOpen(){
		$(".MainCopy").addClass("on");
		$(".copy_up").attr({"src" : "/res/images/mainvisual/copy_down.png"});
		$(".copy_up").parent().attr({"onclick" : "CopyClose()"});
	}

	function CopyClose(){
		$(".copy_up").attr({"src" : "/res/images/mainvisual/copy_up.png"});
		$(".copy_up").parent().attr({"onclick" : "CopyOpen()"});
		$(".MainCopy").removeClass("on");
	}

	var swiper_mainvisual = null;
	$(function(){
		swiper_mainvisual = new Swiper('.swiper-mainvisual', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 4000,
						},
						disableOnInteraction: false,
						effect:'fade',
						speed: 1000,
						loop:true,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: true,
						on:{
							transitionStart:function(){ },
							transitionEnd:function(){
								this.autoplay.stop();
								this.autoplay.start();
							}
						},
						navigation: {
							nextEl: '.MainLeft',
							prevEl: '.MainRight',
						},
			});
		});
</script>