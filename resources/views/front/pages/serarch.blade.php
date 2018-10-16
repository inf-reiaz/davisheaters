@extends('front.layout.app')

@section('title')
    product
@endsection

@section('content')
		
		<section class="sec-blog">
			<div class="col-sm-12 blog product-page">
				@if($products->count()>0)
				@foreach($products as $p)
				<div class="col-md-3 col-sm-6">
					<div class="blog-image">
						<!--<img src="/public/front/images/product_details/product_details_thumbnail_one.jpg" alt="" class="img-responsive" />-->
						<img src="{{ $p->image_url }}" alt="" class="img-responsive" />
						<div class="blog-img-text">
							<h4>{{ $p->title }}</h4>
						</div>
					</div>
					<p>
						{{ substr(strip_tags($p->body), 0, 200) }}{{ strlen(strip_tags($p->body)) > 200 ? "..." : "" }}
					</p>
					<a href="{{ action('PublicPagesController@getSingleProduct',$p->id) }}" class="btn see-details-blog">See Details</a>
				</div>
				@endforeach
				@else
					<div class="col-sm-12 blog product-page" style="margin-top:20px;margin-bottom: 18%">
						<div class="alert alert-danger">
						  No Data found.
						</div>
					</div>
				@endif
				
			</div>
		</section>
			
@endsection