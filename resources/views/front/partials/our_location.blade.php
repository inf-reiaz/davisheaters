

			<?php
			    $location = \App\Location::find(1);
			?>

			<section class="sec-address slide">
				<div class="col-sm-10 col-sm-offset-1 partners2 col-xs-12">
					<h2 class="text-center">Our Location</h2>
					<div class="col-sm-10 col-sm-offset-1 douglas-villas text-center col-xs-12">
						<h3 class="">{{ $location->company_name }}</h3>
						<h5>{{  $location->p_o}} <br/>
							{{  $location->address }}
						</h5>
						<br />
						<h5>
							{{  $location->info }} <br/>
							{{  $location->phone }}
						</h5> <br />
					<div class="col-sm-12 partners2">
						<ul class="request-design fix text-center">
							<li><a href="{{ $location->button1_link }}">{{ $location->button1 }}</a></li>
							<li class="hidden-xs">|</li>
							<li><a href="{{ $location->button2_link }}">{{ $location->button2 }}</a></li>
							<li class="hidden-xs">|</li>
							<li><a href="{{ $location->button3_link }}">{{ $location->button3 }}</a></li>
						</ul>
					</div>
					</div>
				
				</div>
			</section>