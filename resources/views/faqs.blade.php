@extends('theme')
<!-- Page Title-->
@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>Faqs</h1>
		<span>All your Questions answered in one place</span>
	</div>
</section>
<!-- #page-title end -->
<!-- Content -->
<section id="content">
	<div class="content-wrap notopmargin">
		<div class="container notopmargin clearfix">
			<div class="postcontent nobottommargin clearfix">
				<div class="clear"></div>
				<div id="faqs" class="faqs">
					@foreach ($data as $faq)
					<div class="toggle faq faq-marketplace faq-authors">
						<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-question-sign"></i>{{ $faq->q }}</div>
						<div class="togglec" style="display: none;">{!! $faq->a !!}</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	</section><!-- #content end -->
	@endsection