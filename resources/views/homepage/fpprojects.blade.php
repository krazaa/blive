<h4>Our Projects</h4>
<div class="tabs tabs-bordered clearfix" id="tab-3">
	<ul class="tab-nav tab-nav2 clearfix">
		@foreach ($projects as $project)
			<li><a href="#{{ $project->id }}">{{ $project->title }}</a></li>	
		@endforeach		
	</ul>
	<div class="tab-container">
		@foreach ($projects as $pd)
		<div class="tab-content clearfix" id="{{ $pd->id}}">
			{!! $pd->description !!}
		</div>
		@endforeach
	</div>
</div>
<div class="clear"></div>