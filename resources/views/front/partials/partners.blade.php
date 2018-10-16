
			<section class="sec-partner slide" style="padding-buttom: 20px">
				<div class="col-sm-10 col-sm-offset-1 partners">
					<h2 class="text-center">partners</h2>
					
					<!--<p class="text-center">-->
						<?php /* $partner = \App\Partner::findOrFail(1); */?>
						{{-- $partner->body --}}
					<!--</p>-->
					
					<?php $partnerimgs = \App\PartnerImage::all(); ?>
					@foreach($partnerimgs as $partnerimg)
					<div class="col-sm-4 col-xs-6">
						<img src="{{ $partnerimg->image_url }}" class="img-responsive" alt="partner image" />
					</div>
					@endforeach

				</div>
			</section>
			