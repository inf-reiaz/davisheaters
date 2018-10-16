<?php
    $about = \App\Aboutus::find(1);
?>
			<section class="about-us">
				<div class="container-fluid">
					<h2 class="text-center">About Us</h2>
					<div class="col-md-4 col-sm-5 col-md-offset-1 about-us-left">
						<div class="item active">
							<img src="{!! $about->image_url !!}" alt="about us">
						</div>
					</div>
					<div class="col-md-5 col-sm-6 col-sm-offset-1 col-md-offset-1 about-us-right">
						<p>
							{!! $about->body !!}
						</p>
					</div>
				</div>
			</section>