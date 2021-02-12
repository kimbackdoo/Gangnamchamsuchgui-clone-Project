<style>
	.sub2_div1 { background: url("/m/images/sub2_1/sub2_1.jpg") no-repeat center top; height: 210px; }

	.swiper-sub2 {margin:0 auto; width:640px; height:500px; position:relative; left:0; top:0; right:0; z-index:1; overflow:hidden; }
	.swiper-sub2 .swiper-slide { width:100%; height:100%; position:relative; margin:0 auto; }

	.RightArea { position:absolute; top:0; right:0; height:100%; z-index:2; }
	.LeftArea { position:absolute; top:0; left:0; height:100%; z-index:2; }
	.RightArea > img { position:absolute; top:50%; transform:translateY(-50%); right:0; }
	.LeftArea > img { position:absolute; top:50%; transform:translateY(-50%); left:0; }

	.sub2_div2 { background: url("/m/images/sub2_1/sub2_2.jpg") no-repeat center top; height: 2280px; }
</style>

<div class="sub2_div1">
</div>

<div class="swiper-container swiper-sub2" >
	<div class="swiper-wrapper">
		<?for($i=1; $i<=6; $i++){?>
			<div style="background:url('/m/images/sub2_1/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
				<div class="RightArea"><img class="subRight" src="/m/images/right.png" alt="서브페이지 다음버튼"></div>
				<div class="LeftArea"><img class="subLeft" src="/m/images/left.png" alt="서브페이지 이전버튼"></div>
			</div>
		<?}?>
	</div>
</div>

<div class="sub2_div2">
</div>

<script>

	var swiper_mainvisual = null;

	$(function(){

		swiper_mainvisual = new Swiper('.swiper-sub2', {
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