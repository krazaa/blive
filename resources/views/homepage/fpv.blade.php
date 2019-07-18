<div class="clear"></div>
<div class="container notopmargin clearfix">
	<div class="row">
		@foreach ($fpv as $v)
		<div class="col-md">
			<div class="feature-box media-box">
				<div class="fbox-media">
					{{-- <img src="images/services/1.jpg" alt="Why choose Us?"> --}}
					

					<iframe width="500" height="300" src="https://www.youtube.com/embed/{{ $v->ytlink }}?feature=oembed&showinfo=1&controls=1&modestbranding=0" frameborder="0" allowfullscreen></iframe>
					
				</div>
				<div class="fbox-desc">
					<h3>{{ $v->title }}</h3>
					<p>{!! $description = str_limit($v->description, 140) !!} <a href="/{{ $v->plink }}" class="button button-3d button-mini button-rounded button-blue"> Readmore>>></a></p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
<div class="clear"></div>
