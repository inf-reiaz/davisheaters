@extends('front.layout.app')

@section('title')
    Request
@endsection

@section('content')
	

		<section class="request-send">
			<div class="col-sm-12">
				<div class="col-sm-6">
					<img class="img-responsive hidden-xs" src="/public/front/images/contact/design_consultation.jpg">
				</div>
				<div class="col-sm-6 ask-question">
					<h3>Request a design consultation</h3>
                    
                      {!! Form::open([
                          'class' => 'form-horizontal question-form',
                          'method' => 'get',
                          'action'  => 'MailSedingController@DesignConsultation'
                      ]) !!}
                      
						<div class="form-group">
							<div class="col-sm-12">
								
                                {!! Form::text('name', null, ['class' => 'form-control','id'=>'name','placeholder'=>'Name']) !!}
                    
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								{!! Form::text('email', null, ['class' => 'form-control','id'=>'email','placeholder'=>'Email']) !!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								{!! Form::text('phone', null, ['class' => 'form-control','id'=>'phone','placeholder'=>'Phone']) !!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								{!! Form::text('company', null, ['class' => 'form-control','id'=>'company','placeholder'=>'Company']) !!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								{!! Form::text('need', null, ['class' => 'form-control','placeholder'=>'Where do you need that? What is your application?']) !!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								{!! Form::text('how_much', null, ['class' => 'form-control','placeholder'=>'How much Heat do you need?']) !!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								{!! Form::text('how_many', null, ['class' => 'form-control','placeholder'=>'How Many Heaters you will buy per year (estimated)?']) !!}
							</div>
						</div>
						<br>
						
                        <button type="submit" class="btn see-details">Send Question</button>

                    {!! Form::close() !!}
                    
					<p class="call-us">or, call at +440154896 , mail at info@domain.com</p>
				</div>
				
			</div>
		</section>

			
@endsection