			<?php
			    $location = \App\Location::find(1);
			?>
			
			<footer class="sec-footer slide">
				<div class="col-xs-12 footer">
					<div class="col-sm-4 col-xs-12">
						<div class="col-sm-4 col-xs-6">
							<h5>Sitemap</h5>
							<ul class="sitemap">
								<li><a href="{{ URL::to('/') }}">- Home</a></li>
								<li><a href="" data-toggle="modal" data-target="#myModal">- About us</a></li>
								<li><a href="{{ action('PublicPagesController@getProduct') }}">- Product</a></li>
							</ul>
							
						</div>
						<div class="col-sm-8 col-xs-6">
							
							
							<ul class="footer-product">
								<li><a href="{{ action('PublicPagesController@getCtgProduct',1) }}">- Silicone Rubber Heater</a></li>
								<li><a href="{{ action('PublicPagesController@getCtgProduct',2) }}">- Kapton Flexible Heating</a></li>
								<li><a href="{{ action('PublicPagesController@getCtgProduct',3) }}">- Industrial Tapes</a></li>
								<li><a href="{{ action('PublicPagesController@getCtgProduct',4) }}">- Jackets & Blankets</a></li>
							</ul>
						</div>
						<p> <span><a href="{{ route('login') }}" target="_blank" style="color: #fff;margin-left: 12px;text-decoration: none;">Admin Login ||</a></span> Copyright&copy;2017</p>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="col-sm-6 col-xs-6">
							<h5>Address</h5>
							<address>
								{{ $location->company_name }} <br />
								{{  $location->p_o}} <br />
								{{  $location->address }}
							</address>
						</div>
						<div class="col-sm-6 address-email col-xs-6">
							{{  $location->info }} <br />
							{{  $location->phone }}
						</div>
						
					</div>
					<div class="col-sm-4 newsletter col-xs-12">
						<h5>Newsletter</h5>
						     @if (Session::has('success'))
						      <div class="">
						         {{ Session::get('success') }}
						      </div>
						    @endif
						<form class="form-horizontal question-form" action="{{ action('NewsletterController@postNewslatter') }}" method="post">
							  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
							<div class="form-group">
								<div class="col-sm-9 col-md-10 col-xs-10 no-padding">
									<input type="email" name="email" class="form-control footer-form" id="email" placeholder="simple@gmail.com" style="padding-left: 10px;">
								</div>
								<div class="col-sm-3 col-md-2 col-xs-2 no-padding">
									<button type="submit" class="btn footer-btn">Send</button>
								</div>
							</div>
						</form>
						
						
						<ul>
							<li>
								<a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
							</li>
							<li>
								<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a> 
							</li>
							<li>
								<a href=""><i class="fa fa-camera" aria-hidden="true"></i></a> 
								</li>
							<li>
								<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a> 
							</li>
						</ul>
					</div>
				</div>
			</footer>