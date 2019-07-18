@extends('theme')

<!-- Page Title-->
		@section('content')
		<section id="page-title">

			<div class="container clearfix">
				<h1>{{ $data->title }}</h1>
				
			</div>

		</section><!-- #page-title end -->
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					{!! $data->detail !!}
					

				</div>

			</div>

		</section><!-- #content end -->
	@endsection