<style>
.swiper-subpage1 { width:100%; min-width:1200px; max-width:1919px; height: 650px; position:relative; margin: auto; z-index:1; padding-top: 60px; }
.swiper-subpage1 .swiper-slide { width:100%; min-width:1200px; max-width:1919px; height:650px; position:relative; margin:0 auto; }

.RightArea { position:absolute; top:0; right:0; height:100%; z-index:2; }
.LeftArea { position:absolute; top:0; left:0; height:100%; z-index:2; }
.RightArea > img { position:absolute; top:50%; transform:translateY(-50%); right:409px; }
.LeftArea > img { position:absolute; top:50%; transform:translateY(-50%); left:409px; }

</style>

<div class="sub1_div1">
</div>

<div class="swiper-container swiper-subpage1" >
	<div class="swiper-wrapper">
		<?for($i=1; $i<=8; $i++){?>
			<div style="background:no-repeat url('/res/images/sub1_1/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
			</div>
		<?}?>
	</div>

	
	<div class="RightArea"><img class="SubRight" src="/res/images/subpage/right.png" alt="서브페이지 다음버튼" /></div>
    <div class="LeftArea"><img class="SubLeft" src="/res/images/subpage/left.png" alt="서브페이지 이전버튼" /></div>

</div>

<div class="sub1_div2">
	<img src="/res/images/sub1_1/sub1_2.jpg" alt="강남참숯구이 간판" />
</div>

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
			//"mapWidth" : "1910",
			"mapHeight" : "500"
		}).render();
	</script>
</div>

<script>

	var swiper_mainvisual = null;
	$(function(){
		swiper_mainvisual = new Swiper('.swiper-subpage1', {
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
							nextEl: '.SubRight',
							prevEl: '.SubLeft',
						},
			});
		});
</script>

