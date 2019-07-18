<!-- Top Bar  -->
<div id="top-bar">
	<div class="container clearfix">
		<div class="col_half nobottommargin">
			<!-- Top Links ============================================= -->
			<div class="top-links">
				<ul>
					<li><a href="{{ url('faqs') }}">FAQs</a></li>
					<li><a href="{{ url('contact') }}">Contact</a></li>
					<li><a href="#">Login</a>
					<div class="top-link-section">
						<form id="top-login">
							<div class="input-group" id="top-login-username">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="icon-user"></i></div>
								</div>
								<input type="email" class="form-control" placeholder="Email address" required="">
							</div>
							<div class="input-group" id="top-login-password">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="icon-key"></i></div>
								</div>
								<input type="password" class="form-control" placeholder="Password" required="">
							</div>
							<label class="checkbox">
								<input type="checkbox" value="remember-me"> Remember me
							</label>
							<button class="btn btn-danger btn-block" type="submit">Sign in</button>
						</form>
					</div>
				</li>
			</ul>
		</div>
		<!-- .top-links end -->
	</div>
	<div class="col_half fright col_last nobottommargin">
		<!-- Top Social ============================================= -->
		<div id="top-social">
			<ul>
				<li><a href="{{ $topnav->fb }}" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
				<li><a href="{{ $topnav->tw }}" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
				<li><a href="{{ $topnav->yt }}" class="si-youtube"><span class="ts-icon"><i class="icon-youtube"></i></span><span class="ts-text">Youtube</span></a></li>
				<li><a href="{{ $topnav->ig }}" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
				<li><a href="tel:{{ $topnav->contact }}" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">{{ $topnav->contact }}</span></a></li>
				<li><a href="mailto:{{ $topnav->email }}" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">{{ $topnav->email }}</span></a></li>
			</ul>
		</div>
		<!-- #top-social end -->
	</div>
</div>
</div>
<!-- #top-bar end -->