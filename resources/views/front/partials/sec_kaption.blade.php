	@foreach($categories as $p)
		@if($p->id % 2 !== 0 )
			<section class="sec-kaption slide">
				<div class="container-fluid no-padding">
					<div class="col-sm-6 no-padding">
						<div id="carousel-example-generic{{$p->id}}" class="carousel slide" data-ride="carousel">
							
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="{{ $p->image_url }}" alt="Product_One">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 kapton-flexible">
						<h2>{{ $p->name }}</h2>
						<p>{!! $p->body !!} </p>
						<a class="btn see-details" href="{{ action('PublicPagesController@getCtgProduct',$p->id) }}" style="margin-top: 25px;">See Details</a>
					</div>
					
				</div>
			</section>
		@else	
			<section class="sec-silicon slide">
				<div class="col-sm-6 silicon-rubber no-padding">
						<h2 class="margin-left-15">{{ $p->name }}</h2>
						
						<p>{!! $p->body !!}</p>
						
						<a class="btn see-details margin-left-15" href="{{ action('PublicPagesController@getCtgProduct',$p->id) }}" style="margin-top: 25px;">See Details</a>
					</div>
				
					<div class="col-sm-6 no-padding">
						<div id="carousel-example-generic{{$p->id}}" class="carousel slide" data-ride="carousel">
			
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="{{ $p->image_url }}" alt="Product_One">
								</div>
								
							</div>
						</div>
					</div>
				
			</section>
		@endif
	@endforeach