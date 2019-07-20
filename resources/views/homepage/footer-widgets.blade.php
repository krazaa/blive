<div class="footer-widgets-wrap clearfix">
	<div class="col_two_third">
		<div class="col_one_third">
			<div class="widget clearfix">
				<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
					<address>
						<strong>Headquarters:</strong><br>
						F-9 Defence View  Phase 2 <br>
					Near Iqra University, </br>
					Karachi 75500, Pakistan
					</address>
				<abbr title="Phone Number"><strong>Phone:</strong></abbr> 92 300 1234567<br>
			<abbr title="Fax"><strong>Fax:</strong></abbr> 92 300 1234567<br>
		<abbr title="Email Address"><strong>Email:</strong></abbr> info@businesslive4u.com 
	</div>
</div>
</div>

<div class="col_one_third">
<div class="widget widget_links clearfix">
	<h4>Packages</h4>
	<ul>@foreach ($packagse as $package)
		<li><a href="{{ route('package', $package->id) }}">{{ $package->title }}</a></li>
		@endforeach
	</ul>
</div>
</div>
<div class="col_one_third col_last">
<div class="widget widget_links clearfix">
	<h4>New Ranks System</h4>
	<a href="{{ route('ranks', 1) }}">
	<img alt="" src="http://bl4u:8888/photos/1/new_ranks.jpg" style="float:left; margin:10px; width:180px">
	</a>
</div>
</div>
</div>
<div class="col_one_third col_last">

<div class="widget subscribe-widget clearfix">
<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
<div class="widget-subscribe-form-result"></div>
<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin">
	<div class="input-group divcenter">
		<div class="input-group-prepend">
			<div class="input-group-text"><i class="icon-email2"></i></div>
		</div>
		<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
		<div class="input-group-append">
			<button class="btn btn-success" type="submit">Subscribe</button>
		</div>
	</div>
</form>
</div>

<div class="widget clearfix" style="margin-bottom: -20px;">
<div class="row">
	<div class="col-lg-6 clearfix bottommargin-sm">
		<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
			<i class="icon-facebook"></i>
			<i class="icon-facebook"></i>
		</a>
		<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
	</div>
	<div class="col-lg-6 clearfix">
		<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
			<i class="icon-rss"></i>
			<i class="icon-rss"></i>
		</a>
		<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
	</div>
</div>
</div>
</div>
</div>