<style>
	.sub1_div1 { background: url("/m/images/sub1_1/sub1_1.jpg") no-repeat center top; height: 1019px; padding-bottom: 40px; }

	.swiper-sub1 {margin:0 auto; width:590px; height:400px; position:relative; left:0; top:0; right:0; z-index:1; overflow:hidden; }
	.swiper-sub1 .swiper-slide { width:100%; height:100%; position:relative; margin:0 auto; }

	.RightArea { position:absolute; top:0; right:0; height:100%; z-index:2; }
	.LeftArea { position:absolute; top:0; left:0; height:100%; z-index:2; }
	.RightArea > img { position:absolute; top:50%; transform:translateY(-50%); right:0; }
	.LeftArea > img { position:absolute; top:50%; transform:translateY(-50%); left:0; }

	.sub1_div2 { background: url("/m/images/sub1_1/sub1_2.jpg") no-repeat center top; height: 370px; }

</style>

<div class="sub1_div1">
</div>

<div class="swiper-container swiper-sub1" >
	<div class="swiper-wrapper">
		<?for($i=1; $i<=8; $i++){?>
			<div style="background:url('/m/images/sub1_1/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
				<div class="RightArea"><img class="subRight" src="/m/images/right.png" alt="서브페이지 다음버튼"></div>
				<div class="LeftArea"><img class="subLeft" src="/m/images/left.png" alt="서브페이지 이전버튼"></div>
			</div>
		<?}?>
	</div>
</div>

<div class="sub1_div2">
</div>

<div class="sub1_div3">
	<div class="sub1_div3">
	<!-- * 카카오맵 - 지도퍼가기 -->
	<!-- 1. 지도 노드 -->
	<div id="daumRoughmapContainer1609293700263" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%;"></div>

	<!--
		2. 설치 스크립트
		* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
	-->
	<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

	<!-- 3. 실행 스크립트 -->
	<script charset="UTF-8">
		new daum.roughmap.Lander({
			"timestamp" : "1609293700263",
			"key" : "23oyw",
			"mapWidth" : "640",
			"mapHeight" : "350"
		}).render();
	</script>
</div>

</div>

<script>

	var swiper_mainvisual = null;

	$(function(){

		swiper_mainvisual = new Swiper('.swiper-sub1', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 4000,
						},
						disableOnInteraction: false,
						effect:'fade',
						speed: 1000,
						loop:true,
						loopAdditionalSlides:1,
						loopedSlides:1,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: false,
						on:{
						transitionEnd:function(){
							this.autoplay.stop();
							this.autoplay.start();
							}
						},
						touchRatio:1,
						navigation: {
							nextEl: '.subRight',
							prevEl: '.subLeft',
						},				
		});

	});

</script>