<div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
	<div class="container clearfix">
		<span class="badge badge-primary bnews-title">Breaking News:</span>
		<div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
			<div class="flexslider">
				@foreach ($news as $new)
					<div class="slider-wrap">
					<div class="slide"><a href="#"><strong>{{ $new->title }}</strong></a></div>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>
</div>
