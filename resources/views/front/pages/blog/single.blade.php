@extends('front.layout.app')

@section('title')
    Blog Single
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
				
				<div class="col-sm-8 blog-page">
					<div class="blog-image">
						
						<div class="">
							<h3 class="">{{ $blog->title }}</h3>
						</div>
					</div>
					<ul class="blog-details">
						<!--<li>Category</li>-->
						<li>{{ $blog->date }}</li>
						<li>{{ $blog->user->username }}</li>
					</ul>
					
					{!! $blog->body !!}
					
					
				</div>
				
				<div class="col-sm-4 blog-page blog-details-sidebar">
					<div class="username col-sm-4-12 no-padding">
						
                        <?php $author = $blog->user; ?>
						<div class="col-sm-4 no-padding">
							<sapn>
								<img src="{{$author->user_image}}"  style="height: 100%;margin-top: 10px;">
							</sapn>
						</div>
						<div class="col-sm-8 no-padding col-xs-8 col-xs-offset-2 col-sm-offset-0">
							<h5>{{ $author->username }}</h5>
							
                              <?php $blogCount = $author->blogs()->count() ?>
							<p style="text-decoration: underline;">
							{{ $blogCount }} {{ str_plural('blog', $blogCount) }}	
							</p>
							<p>{{ $author->date }}</p>
						</div>
					</div>
					<h3>Popular Blogs</h3>
					@foreach($blogs as $blog)
					<div>
						<div class="blog-image">
							<img src="{{ $blog->image_url}}" alt="" class="img-responsive" />
							<div class="blog-img-text ">
								<h4>{{ $blog->title }}</h4>
							</div>
							
						</div>
						<ul class="">
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
							<h4>{{ $blog->title }}</h4>
						</div>
					</div>
					<ul class="blog-view">
						<li>{{ $blog->date }}</li>
						<li>{{ $blog->user->username }}</li>
						<li>{{  $blog->view_count }} view</li>
					</ul>
					<p>
						{!! substr(strip_tags($blog->body), 0, 100) !!}{!! strlen(strip_tags($blog->body)) > 100 ? "..." : ""  !!}
					</p>
					<a href="{{ action('PublicPagesController@getSingleBlog',$blog->id) }}" class="text-right read-more">Read more</a>
				</div>
				@endforeach
			</div>
		</section>
	
@endsection