@extends('front.layout.app')

@section('title')
    Ask Question
@endsection

@section('content')
	

			<section class="sec-ask-question full-height">
				<div class="col-sm-12 partners">
					<div class="col-sm-5 ask-question full-height">
						<h2>Ask a Question</h2>
						@include('admin.messages.messages')
						<form class="form-horizontal question-form" method="POST" action="{{ action('PublicPagesController@postAskQuestion') }}">
							
							<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
							
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="email" class="form-control" id="email"  name="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<textarea rows="5" cols="5" class="form-control" name="question"  placeholder="Question"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="email_copy"> <span class="check">Email me a copy</span>
										</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="checkbox">
										<label>
											<input type="checkbox"> <span class="check">I am a human</span> 
										</label>
									</div>
								</div>
							</div>
							<button type="submit" class="btn see-details">Send Question</button>
						</form>
						<ul class="request-design fix">
							<li><a href="{{ action('PublicPagesController@getRequest') }}">Request a design consultation</a></li>
							<li>|</li>
							<li><a href="{{ action('PublicPagesController@getQuote') }}">Request a Quote</a></li>
						</ul>
					</div>
					<div class="col-sm-5 col-sm-offset-2 douglas-villas">
						<?php $address = App\Location::find(1);?>
						<h3>{{ $address->company_name }}</h3>
						<h5>{{ $address->p_o }}<br/>
							{{ $address->address }}
						</h5>
						<br />
						<h5>
							{{ $address->info }}<br/>
							{{ $address->phone }}
						</h5>
					</div>
				</div>
			</section>
			
@endsection