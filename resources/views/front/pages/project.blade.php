@extends('front.layout.app')

@section('title')
    product
@endsection

@section('content')
		
		
		<section class="sec-blog">
			<img class="img-responsive blog-banner" src="/public/front/images/blog/banner.jpg" alt="Blog banner">
			<h2 class="text-center what-we-done-others">What we have done for others</h2>
			<div class="col-xs-12 what-we-done-page">
			    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			    	<?php $i=1;?>
			    	@foreach($project as $p)
					<?php $o=$i++;?>
    				<div class="panel panel-default">
    					<div class="panel-heading red-header" role="tab" id="headingOne{{$p->id}}">
    						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$p->id}}" aria-expanded="true" aria-controls="collapseOne{{$p->id}}">
        						   {{ $p->project_name }}
        						</a>
    						</h4>
    					</div>
    					<div id="collapseOne{{$p->id}}" class="panel-collapse collapse @if($o === 1) in @else  @endif" role="tabpanel" aria-labelledby="headingOne{{$p->id}}">
    						<div class="panel-body">
    							 <div class="col-xs-4 col-sm-3">
    							     <img src="{{$p->image_url}}" class="img-responsive" alt="corner-bakery" />
    							 </div>
    							 <div class="col-xs-8 col-sm-9">
    							     <p class="project-owener">Project owner: {{ $p->owner_name }} <a href="" class="float-right">Date of completion: {{ $p->date_of_completion }}</a></p>
    							     <p>
    							     	{!! substr(strip_tags($p->body), 0, 330) !!}{!! strlen(strip_tags($p->body)) > 330 ? "..." : ""  !!}
    							     </p>
    							     
    							     <div class="text-left">
										<a href="{{ action('PublicPagesController@getSingleProject',$p->id) }}" class="btn see-details" style="margin: 0 auto;"> See Details</a>
									</div>
    							     
    							 </div>
    						</div>
    					</div>
    				</div>
    				@endforeach
    				
    			</div>
			</div>
			
            
		</section>	
@endsection