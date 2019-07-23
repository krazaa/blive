
		<!-- Header  -->
		<header id="header">
			<div id="header-wrap">
				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
					<!-- Logo ============================================= -->
					<div id="logo">
						<a href="{{ url('/') }}"><img src="{{ asset('logo/'. $config->logo) }}"></a>
						</div><!-- #logo end -->
						<!-- Primary Navigation
						============================================= -->
						<nav id="primary-menu" class="sub-title">
							<ul>
								<li class="current"><a href="{{ url('/') }}"><div>Home</div></a>
							</li>
							<li><a href="{{ route('about', "About US") }}"><div>About Us</div></a>
							<ul>
								<li><a href="{{ route('page', "Vision") }}"><div>Vision</div></a></li>
								<li><a href="{{ route('page', "Mission") }}"><div>Mission</div></a></li>
								<li><a href="{{ route('page', "Who we are") }}"><div>Who we are</div></a></li>
								<li><a href="{{ route('page', "What we do") }}"><div>What we do?</div></a></li>
						</ul>
					</li>
					 @auth
					<li><a href="#"><div>Packages</div></a>
						<ul>
				@foreach ($packagse as $package)
				<li>
					<a href="{{ route('package', $package->id) }}"><div>{{ $package->title }}</div></a>
				</li>
			@endforeach
			</ul>
				</li>
				<li class="mega-menu"><a href="{{ route('ranks', 1) }}"><div>Ranks</div></a>
			</li>
			@endauth
			<li><a href="#"><div>Our Projects</div></a>
				<ul>
					@foreach ($projects as $project)
					<li><a href="{{ route('project', $project->id) }}"><div>{{ $project->title }}</div></a></li>
					@endforeach
				</ul>
		</li>
		<li><a href="#"><div>Products </div></a>
			<ul>
				@foreach ($products as $products)
				<li>
					<a href="{{ route('product',$products->id) }}"><div>{{ $products->title }}</div></a>
				</li>
			@endforeach
			</ul>
	</li>
	<li class="mega-menu"><a href="{{ url('contact') }}"><div>Contact Us</div></a>
</li>
</ul>
<!-- Top Cart ============================================= -->
</nav><!-- #primary-menu end -->
</div>
</div>
</header><!-- #header end -->
