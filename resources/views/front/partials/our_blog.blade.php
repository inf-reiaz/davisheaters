
			<section class="sec-blog slide">
				<div class="col-sm-12 blog">
					<h2 class="text-center">From Our Blog</h2>
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
				</div>
			</section>