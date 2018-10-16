@extends('front.layout.app')

@section('title')
    Home
@endsection

@section('css')
    <style>
    	.silicon-rubber p {
		    color: #000;
		    font-size: 18px;
		}
		.sapn{
			font-size: 13px;
		}
    </style>
@endsection

@section('content')
	
			@include('front.partials.home_slider')
			
			@include('front.partials.sec_kaption')
			
			@include('front.partials.about_us')
			
			@include('front.partials.what_we_do')
			
			@include('front.partials.partners')
			
			@include('front.partials.our_location')
			
			@include('front.partials.our_blog')
			
@endsection