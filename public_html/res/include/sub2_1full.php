<div class="sub2_div1">
	<img src="/res/images/sub2_1/sub2_1.jpg" alt="메인메뉴 글자" />
</div>

<style>
.swiper-subpage2 { width:100%; min-width:1200px; max-width:1919px; height:1000px; position:relative; margin: auto; z-index:1; padding-top: 60px; }
.swiper-subpage2 .swiper-slide { width:100%; min-width:1200px; max-width:1919px; height:1000px; position:relative; margin:0 auto; }

.RightArea { position:absolute; top:0; left:0; height:100%; z-index:2; }
.LeftArea { position:absolute; top:0; left:0; height:100%; z-index:2; }
.RightArea > img { position:absolute; top:50%; transform:translateY(-50%); left:180px; }
.LeftArea > img { position:absolute; top:50%; transform:translateY(-50%); left:105px; }

</style>

<div class="swiper-container swiper-subpage2" >
	<div class="swiper-wrapper">
		<?for($i=1; $i<=3; $i++){?>
			<div style="background:no-repeat url('/res/images/sub2_1/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
			</div>
		<?}?>
	</div>

	
	<div class="RightArea"><img class="SubRight" src="/res/images/subpage/right.png" alt="서브페이지 다음버튼" /></div>
    <div class="LeftArea"><img class="SubLeft" src="/res/images/subpage/left.png" alt="서브페이지 이전버튼" /></div>

</div>

<div class="sub2_div2">

</div>

<script>

	var swiper_mainvisual = null;
	$(function(){
		swiper_mainvisual = new Swiper('.swiper-subpage2', {
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