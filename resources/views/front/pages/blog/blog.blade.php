@extends('front.layout.app')

@section('title')
    Blog
@endsection

@section('content')
	

		<section class="sec-blog">
			<img class="img-responsive blog-banner" src="/public/front/images/blog/banner.jpg" alt="Blog banner">

		</section>
		
		<!--<section class="sec-blog">-->
		<!--	<div class="col-sm-12 blog">-->
		<!--		<div class="col-md-3 col-sm-6">-->
		<!--			<div class="blog-image">-->
		<!--				<img src="/public/front/images/blog/BlogPhoto1.jpg" alt="" class="img-responsive" />-->
		<!--				<div class="blog-img-text">-->
		<!--					<h4>Lorem Ipsum is simply dummytext of the printing.</h4>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--			<ul class="blog-view">-->
		<!--				<li>22 hourrs age</li>-->
		<!--				<li>username</li>-->
		<!--				<li>256 view</li>-->
		<!--			</ul>-->
		<!--			<p>typesetting industry. Lorem Ipsum-->
		<!--				has been the industry's standard-->
		<!--				dummy text ever since the 1500s;-->
		<!--				been the industry's standard dummy-->
		<!--				text ever since the Lorem Ipsum has-->
		<!--				been the industry's standard...</p>-->
		<!--			<a href="/blog-details.html" class="text-right read-more">Read more</a>-->
		<!--		</div>-->
		<!--		<div class="col-md-3 col-sm-6">-->
		<!--			<div class="blog-image">-->
		<!--				<img src="/public/front/images/blog/BlogPhoto1.jpg" alt="" class="img-responsive" />-->
		<!--				<div class="blog-img-text">-->
		<!--					<h4>Lorem Ipsum is simply dummytext of the printing.</h4>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--			<ul class="blog-view">-->
		<!--				<li>22 hourrs age</li>-->
		<!--				<li>username</li>-->
		<!--				<li>256 view</li>-->
		<!--			</ul>-->
		<!--			<p>typesetting industry. Lorem Ipsum-->
		<!--				has been the industry's standard-->
		<!--				dummy text ever since the 1500s;-->
		<!--				been the industry's standard dummy-->
		<!--				text ever since the Lorem Ipsum has-->
		<!--				been the industry's standard...</p>-->
		<!--			<a href="/blog-details.html" class="text-right read-more">Read more</a>-->
		<!--		</div>-->
		<!--		<div class="col-md-3 col-sm-6">-->
		<!--			<div class="blog-image">-->
		<!--				<img src="/public/front/images/blog/BlogPhoto1.jpg" alt="" class="img-responsive" />-->
		<!--				<div class="blog-img-text">-->
		<!--					<h4>Lorem Ipsum is simply dummytext of the printing.</h4>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--			<ul class="blog-view">-->
		<!--				<li>22 hourrs age</li>-->
		<!--				<li>username</li>-->
		<!--				<li>256 view</li>-->
		<!--			</ul>-->
		<!--			<p>typesetting industry. Lorem Ipsum-->
		<!--				has been the industry's standard-->
		<!--				dummy text ever since the 1500s;-->
		<!--				been the industry's standard dummy-->
		<!--				text ever since the Lorem Ipsum has-->
		<!--				been the industry's standard...</p>-->
		<!--			<a href="/blog-details.html" class="text-right read-more">Read more</a>-->
		<!--		</div>-->
		<!--		<div class="col-md-3 col-sm-6">-->
		<!--			<div class="blog-image">-->
		<!--				<img src="/public/front/images/blog/BlogPhoto1.jpg" alt="" class="img-responsive" />-->
		<!--				<div class="blog-img-text">-->
		<!--					<h4>Lorem Ipsum is simply dummytext of the printing.</h4>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--			<ul class="blog-view">-->
		<!--				<li>22 hourrs age</li>-->
		<!--				<li>username</li>-->
		<!--				<li>256 view</li>-->
		<!--			</ul>-->
		<!--			<p>typesetting industry. Lorem Ipsum-->
		<!--				has been the industry's standard-->
		<!--				dummy text ever since the 1500s;-->
		<!--				been the industry's standard dummy-->
		<!--				text ever since the Lorem Ipsum has-->
		<!--				been the industry's standard...</p>-->
		<!--			<a href="/blog-details.html" class="text-right read-more">Read more</a>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</section>-->
		
		<section class="sec-blog">
			<div class="col-sm-12 blog">
				@foreach($blogs as $blog)
				<div class="col-md-3 col-sm-6">
					<div class="blog-image">
						<img src="{{ $blog->image_url }}" alt="" class="img-responsive" />
						<div class="blog-img-text">
							<h4>{{ $blog->title }}</h4>
						</div>
					</div>
					<ul class="blog-view">
						<li>{{ $blog->date }}</li>
						<li>{{ $blog->user->username }}</li>
						<li>{{ $blog->view_count }} view</li>
					</ul>
					<p>
						{!! substr(strip_tags($blog->body), 0, 100) !!}{!! strlen(strip_tags($blog->body)) > 100 ? "..." : ""  !!}
					</p>
						<a href="{{ action('PublicPagesController@getSingleBlog',$blog->id) }}" class="text-right read-more">Read more</a>
				</div>
				@endforeach
				
            
    			<div class="text-center">
    				{!! $blogs->links(); !!}
    			</div>
			</div>
		</section>
			
@endsection