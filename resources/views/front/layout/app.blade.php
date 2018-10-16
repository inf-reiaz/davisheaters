<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.partials._head')
	</head>
	<body>
		<div id="" class="home-page">
		    
			
			@include('front.navs.nav')
			
			@yield('content')
			
			@include('front.partials.footer')
		</div>

		<div class="modal fade about-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x<!-- &times; --></span></button>
					<h4 class="modal-title" id="myModalLabel">About Our Website</h4>
					</div>
					<div class="modal-body">
						<div class="modal-left">
							<h1>89</h1>
							<h4>FAQ's answered <br>
								see if yours is one of them
							</h4>
						</div>
						<div class="modal-right">
							<h3>Need some help?</h3>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
							</p>
							<a class="btn see-faq" href="">See FAQ</a>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						
					</div>
				</div>
			</div>
		</div>
        @include('front.partials._js')
		
			<script>
				$("a.category-2").attr("href", "#")
			</script>
	</body>
	
</html>