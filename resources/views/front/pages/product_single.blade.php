@extends('front.layout.app')

@section('title')
    product
@endsection


@section('content')
		
			
		<section class="sec-blog">
			<img class="img-responsive blog-banner" src="/public/front/images/blog/banner.jpg" alt="Blog banner">
			<div class="col-sm-12 blog blog-details">
				
				<div class="col-sm-12 blog-page">
					<div class="blog-image">
						@if($p)
						<h2 class="text-center">{{ $p->title }}</h2>
						@endif
					</div>
					
					
					{!! $p->body !!}
					
					
				</div>
				
				
			</div>
		</section>

		
		<section class="sec-blog">
			<div class="col-sm-12 blog product-page">
				<h2 class="text-center">More Products</h2>
				@foreach($products as $p)
				<div class="col-md-3 col-sm-6">
					<div class="blog-image">
						<img src="{{ $p->image_url }}" alt="" class="img-responsive" />
						<div class="blog-img-text">
							<h4>{{ $p->title }}</h4>
						</div>
					</div>
					<p>
						{{ substr(strip_tags($p->body), 0, 150) }}{{ strlen(strip_tags($p->body)) > 150 ? "..." : "" }}
					</p>
					<a href="{{ action('PublicPagesController@getSingleProject',$p->id) }}" class="btn see-details-blog">See Details</a>
				</div>
				@endforeach
			</div>
		</section>
		
		
@endsection