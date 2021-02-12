<style>

.swiper-mainvisual {margin:0 auto; width:100%; height:980px; position:relative; left:0; top:0; right:0; z-index:1; overflow:hidden; }

</style>

<div class="swiper-container swiper-mainvisual" >

	 <div class="swiper-wrapper">
		<?for($i=1; $i<=4; $i++){?>
			<div style="background:url('/m/images/mainvisual/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
			</div>
		<?}?>
	</div>

</div>


<script>
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
						touchRatio:0,
				});

		});

</script>

