@extends('front.layout.app')

@section('title')
    Single Project
@endsection

@section('css')
    <style type="text/css">
    	.username {
    		width: 200px;
		    float: right;
		    margin-bottom: 20px;
		    padding-bottom: 5px;
    	}
    </style>
@endsection

@section('content')
	
	
		<section class="sec-blog">
			<img class="img-responsive blog-banner" src="/public/front/images/blog/banner.jpg" alt="Blog banner">
			<div class="col-sm-12 blog blog-details">
				
				<div class="col-sm-12 blog-page">
					<div class="blog-image">
						
						<div class="">
							<h3 class="">{{ $projecgt->project_name }}</h3>
						</div>
					</div>
					
					
					{!! $projecgt->body !!}
					
					
				</div>
				
				
			</div>
		</section>
	
		
		<section class="sec-blog">
			<div class="col-sm-12 blog">
				@foreach($blogsOld as $blog)
				<div class="col-md-3 col-sm-6">
					<div class="blog-image">
						<img src="{{ $blog->image_url }}" alt="" class="img-responsive" />
						<div class="blog-img-text">
							<h4>{{ $blog->project_name }}</h4>
						</div>
					</div>
					<p>
						{!! substr(strip_tags($blog->body), 0, 100) !!}{!! strlen(strip_tags($blog->body)) > 100 ? "..." : ""  !!}
					</p>
					<a href="{{ action('PublicPagesController@getSingleProject',$blog->id) }}" class="text-right read-more">Read more</a>
				</div>
				@endforeach
			</div>
		</section>
	
@endsection