@extends('theme')
	<!-- Content -->
	@section('content')
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
						@if (session('status'))
							<div class="style-msg successmsg">
							<div class="sb-msg"><i class="icon-thumbs-up"></i> {{ session('status') }}</div>
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							</div>	
							@endif
					<!-- Postcontent -->
					<div class="postcontent nobottommargin">

						<h3>Send us an Email</h3>

						<div class="form-widget">

							<div class="form-result"></div>

							<form class="nobottommargin" action="{{ url('contact') }}" method="post">
								@csrf

								<div class="col_one_third">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Phone <small>*</small></label>
									<input type="text" id="template-contactform-phone" name="phone" value="" class="required phone sm-form-control" />
								</div>

								<div class="clear"></div>

								{{-- <div class="col_two_third">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
								</div> --}}
{{-- 
								<div class="col_one_third col_last">
									<label for="template-contactform-service">Services</label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="Wordpress">Wordpress</option>
										<option value="PHP / MySQL">PHP / MySQL</option>
										<option value="HTML5 / CSS3">HTML5 / CSS3</option>
										<option value="Graphic Design">Graphic Design</option>
									</select>
								</div>

								<div class="clear"></div> --}}

								<div class="col_full">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
								</div>

								

								<div class="col_full">
									<input  class="button button-3d nomargin" type="submit" name="submit" value="submit">Send Message</button>
								</div>

							</form>
						</div>

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar col_last nobottommargin">

						<address>
							<strong>Headquarters:</strong><br>
							F-9 Defence View Phase 2<br>
							Near Iqra University,<br>
							Karachi 75500, Pakistan 
						</address>
						<abbr title="Phone Number"><strong>Phone:</strong></abbr> (92) 92 300 1234567<br>
						<abbr title="Fax"><strong>Fax:</strong></abbr> (92) 300 1234567<br>
						<abbr title="Email Address"><strong>Email:</strong></abbr> info@businesslive4u.com 

						<div class="widget noborder notoppadding">

							{{-- <div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="3" data-animation="slide" data-arrows="false">
								<i class="i-plain i-small color icon-twitter nobottommargin" style="margin-right: 15px;"></i>
								<div class="flexslider" style="width: auto;">
									<div class="slider-wrap">
										<div class="slide"></div>
									</div>
								</div>
							</div>
 --}}
						</div>

						<div class="widget noborder notoppadding">

							<a href="{{ $config->fb }}" class="social-icon si-small si-dark si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="{{ $config->tw }}" class="social-icon si-small si-dark si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="{{ $config->yt }}" class="social-icon si-small si-dark si-youtube">
								<i class="icon-youtube"></i>
								<i class="icon-youtube"></i>
							</a>

							<a href="{{ $config->ig }}" class="social-icon si-small si-dark si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>
						</div>

					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->
		@endsection