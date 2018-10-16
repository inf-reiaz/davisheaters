@extends('front.layout.app')

@section('title')
    product
@endsection

@section('css')
    <style>
    	.kapton-flexible p {
		    color: #fff;
		    /*padding-right: 200px;*/
		    font-size: 15px;
		}
		
		.kapton-flexible>p{
			color: #fff;
		}
		
		.blog p {
		    color: #000;
		    font-size: 15px;
		    margin: 0px 0 0px;
		    text-align: justify;
		}
		
		.see-details{
			color: #fff;
		}
    </style>
@endsection

@section('content')
		
		
		
		
		<section class="sec-blog">
			<div class="col-sm-12 blog product-page">
				@if($ctg)
								
					@if($ctg->id % 2 !== 0 )
						<section class="sec-kaption slide">
							<div class="container-fluid no-padding">
								<div class="col-sm-6 no-padding">
									<div id="carousel-example-generic{{$ctg->id}}" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<img src="{{ $ctg->image_url }}" alt="Product_One">
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 kapton-flexible">
									<h2>{{ $ctg->name }}</h2>
									<p style="color: #fff;">{!! $ctg->body !!} </p>
									<a class="btn see-details" href="#tearget_id" style="margin-top: 25px;">See Products</a>
								</div>
								
							</div>
						</section>
					@else	
						<section class="sec-silicon slide">
							<div class="col-sm-6 silicon-rubber no-padding">
									<h2 class="margin-left-15">{{ $ctg->name }}</h2>
									
									<p>{!! $ctg->body !!}</p>
									
									<a class="btn see-details margin-left-15"  href="#tearget_id" style="margin-top: 25px; color: #fff;">See Details</a>
								</div>
							
								<div class="col-sm-6 no-padding">
									<div id="carousel-example-generic{{$ctg->id}}" class="carousel slide" data-ride="carousel">
						
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<img src="{{ $ctg->image_url }}" alt="Product_One">
											</div>
											
										</div>
									</div>
								</div>
							
						</section>
					@endif
				@endif
				<section  id="tearget_id">
				</section>
				<section >
					<h2 class="text-center" >{{ $ctg->name }} Products  </h2>
				</section>
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
				
			</div>
			{{ $products->links() }}
		</section>
			
@endsection