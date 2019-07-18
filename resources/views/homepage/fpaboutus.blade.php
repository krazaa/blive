<div class="row topmargin-sm clearfix">
	<div class="col-lg-12">
		<div class="heading-block fancy-title nobottomborder title-bottom-border">
			<h4>About <span>Us</span>.</h4>
			<p>@foreach ($about as $about)
				{!! $description = str_limit($about->description, 478) !!}
			@endforeach 
			<a href="{{ route('about', "About Us") }}" class="button button-3d button-mini button-rounded button-red"> Readmore>>></a></p>
		</div>
	</div>
</div>
<div class="clear"></div>