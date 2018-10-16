			<section class="what-we-do slide">
				<div class="container-fluid no-padding">
					<div class="col-sm-6 no-padding">
						<div class="item active">
							<img src="/public/front/images/ProjectPhoto2.jpg" alt="Product_One" class="hidden-xs">
						</div>
					</div>
					<div class="col-sm-6 what-we-do-panel">
						<h2>What we have done for Others</h2>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<?php $projects = App\Project::latest()->take(3)->get(); $c=0; ?>
							
							@foreach($projects as $p)
							<?php $c++ ?>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne-{{$p->id}}">
									<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$p->id}}" aria-expanded="true" aria-controls="collapseOne{{$p->id}}">
									{{ $p->project_name }}
									</a>
									</h4>
								</div>
								<div id="collapseOne{{$p->id}}" class="panel-collapse collapse @if($c ==1) in @else null @endif" role="tabpanel" aria-labelledby="headingOne-{{$p->id}}">
									<div class="panel-body">
										{!! substr(strip_tags($p->body), 0, 250) !!}{!! strlen(strip_tags($p->body)) > 250 ? "..." : ""  !!}
										
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<a href="{{ action('PublicPagesController@getProjectsid',1) }}" class="more-projects">More Projects</a> </br></br>
						<a class="btn see-details" href="{{ action('PublicPagesController@getQuote') }}">Get Quote</a>
					</div>
				</div>
			</section>