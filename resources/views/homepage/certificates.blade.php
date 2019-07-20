<div class="container clearfix">
	<div class="heading-block center">
		<h3>Our <span>Certificates</span></h3>
	</div>
	<div id="oc-portfolio" class="owl-carousel portfolio-carousel portfolio-nomargin carousel-widget" data-margin="1" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">
		@foreach ($fpc as $fpc)
		
		<div class="oc-item">
			<div class="iportfolio">
				<div class="portfolio-image">
					<a href="#">
						<img src="{{URL('/certificates/',$fpc->img)}}" alt="{{ $fpc->title }}" height="150px">
					</a>
					<div class="portfolio-overlay">
						<a href="{{URL('/certificates/',$fpc->img)}}" class="center-icon " data-lightbox="image"><i class="icon-line-zoom-in"></i></a>
					</div>
				</div>
				<div class="portfolio-desc">
					<h3><a href="#">{{ $fpc->title }}</a></h3>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>