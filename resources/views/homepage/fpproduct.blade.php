<div class="clear"></div>
<div class="container notopmargin clearfix">
	<h4>Our Products</h4>
	<div class="row">
		@foreach ($products as $v)
		<div class="col-md-3">
			<div class="feature-box media-box">
				<div class="fbox-media">
					<img src="{{URL('/products/',$v->img)}}">
					
				</div>
				<div class="fbox-desc">
					<h4>{{ $v->title }}</h4>
					<p>{!! $description = str_limit($v->description, 130) !!} <a href="{{ route('product',$v->id) }}" class="button button-3d button-mini button-rounded button-amber"> Readmore>>></a></p>
					
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<div class="clear"></div>