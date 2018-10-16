
			<div class="container-fluid sec-topbar">
				<div class="top-bar">
					<p class="text-right">+44508XR89</p>
				</div>
			</div>
			
			
			<header class="sec-header">	
				<nav class="navbar navbar-default menu-style-1">
					<div class="container-fluid no-padding sec-nav">
						
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="{{ action('PublicPagesController@getIndex') }}"><img src="/public/front/images/logo.svg" height="40" alt="Logo"></a>
						</div>
						<div class="navbar-collapse collapse hover-dropdown">
							<ul class="nav navbar-nav navbar-right mt-2 mt-lg-0 main-menu">
								<li class="nav-item">
									<a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" href="{{ action('PublicPagesController@getIndex') }}">Home</a>
								</li>
								<li class="nav-item dropdown">
									<a class=" 
										{{ Request::path() == 'category/product/1' ? 'active' : '' }}
										{{ Request::path() == 'category/product/2' ? 'active' : '' }}
										{{ Request::path() == 'category/product/3' ? 'active' : '' }}
										{{ Request::path() == 'category/product/4' ? 'active' : '' }}
										{{ Request::path() == 'single-product/1' ? 'active' : '' }}
										{{ Request::path() == 'single-product/2' ? 'active' : '' }}
										{{ Request::path() == 'single-product/3' ? 'active' : '' }}
										{{ Request::path() == 'single-product/4' ? 'active' : '' }}
										{{ Request::path() == 'single-product/5' ? 'active' : '' }}
										" href="">Product
									</a>
									<div class="dropdown-menu animated fadeInUp product-dropdown" aria-label="mh1-dropdown">
										<?php $ctgs = App\Category::all() ?>
										@foreach($ctgs as $ctg)
										<ul class="sub-product-one">
											<li class="menu-category">
												<a class="dropdown-item category category-{{$ctg->id}}" href="{{ action('PublicPagesController@getCtgProduct',$ctg->id) }}"><strong>{{ $ctg->name }}</strong></a>
											</li>
											@foreach($ctg->products as $cp)
											<li>
												<a class="dropdown-item" href="{{ action('PublicPagesController@getSingleProduct',$cp->id) }}">{{ $cp->title }}</a>
											</li>
											@endforeach

										
										</ul>
										@endforeach
										
										
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ Request::path() == 'about' ? 'active' : '' }}" href="{{ action('PublicPagesController@getAbout') }}"> About Us </a>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ Request::path() == 'projects' ? 'active' : '' }}" href="{{ action('PublicPagesController@getProjects') }}">Projects</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ Request::path() == 'blog' ? 'active' : '' }}" href="{{ action('PublicPagesController@getBlog') }}">Blog</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle {{ Request::path() == 'request' ? 'active' : '' }} {{ Request::path() == 'quote' ? 'active' : '' }} {{ Request::path() == 'ask-question' ? 'active' : '' }}"  href="{{ action('PublicPagesController@getAskQuestion') }}">
									Contact
									</a>
									<div class="dropdown-menu animated fadeInUp" aria-label="mh1-dropdown">
										<a class="dropdown-item" href="{{ action('PublicPagesController@getRequest') }}">Request design Consultation</a>
										<a class="dropdown-item" href="{{ action('PublicPagesController@getQuote') }}">Request a Quote</a>
									</div>
								</li>
								
								<li>
									<a href="#" id="searchtoggl"><i class="fa fa-search fa-lg"></i></a>
								</li>
	      
							</ul>
							
						</div>
						<div id="searchbar" class="clearfix">
						    <form id="searchform" method="get" action="{{ action('PublicPagesController@getSearch') }}">
						      <button type="submit" id="searchsubmit" class=""></button>
						      <input type="search" name="term" value="{{ request('term') }}" id="s" placeholder="search" autocomplete="off">
						    </form>
						</div>
					</div>
				</nav>
			</header>
			
			