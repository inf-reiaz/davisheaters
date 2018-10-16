
			
			<div class="container-fluid no-padding home-slider">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">

						<?php $i=1?>
						@foreach($sliders as $slider)
						<?php $o=$i++;?>
						<div class="item @if ($o === 1)active @else @endif">
							<img src="{{ $slider->image_url }}" alt="...">
							<div class="carousel-caption home-slider-caption hidden-xs">
								<h2>{{$slider->headline}}</h2>
								<h5>{{ substr(strip_tags($slider->paragraph), 0, 100) }}{{ strlen(strip_tags($slider->paragraph)) > 100 ? "..." : "" }}</h5>
								<a href="{{ action('PublicPagesController@getProjectsid',$slider->id) }}" target="_blank" class="btn see-details">See Details</a>
							</div>
							<div class="slider-text-mb visible-xs">
								<h2>{{$slider->headline}}</h2>
								<h5>{{ substr(strip_tags($slider->paragraph), 0, 100) }}{{ strlen(strip_tags($slider->paragraph)) > 100 ? "..." : "" }}</h5>
								<a href="{{ action('PublicPagesController@getProjectsid',$slider->id) }}" target="_blank" class="btn see-details">See Details</a>
							</div>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>