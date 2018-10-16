@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection

@section('content')

<section class="content-wrapper">
    <section class="content-header">
      <h1>
          Add New Partner Image
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Partner</a></li>
        <li class="active">Partner  Images</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                  <h3 class="box-title">Add New Partner Image</h3>
              <div class="box-tools">

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                @include('admin.messages.messages')
                <div class="row">
                    
                      {!! Form::model($partner, [
                          'method' => 'POST',
                          'action'  => 'PartnerimagesController@store',
                          'files'  => TRUE
                      ]) !!}

                      @include('admin.pages.partner.form1')

            
                        <div class="box-footer text-center">
                          <button type="submit" class="btn btn-primary btn-md">Save</button>
                          <a href="{{ action('PartnersController@index') }}" class="btn btn-primary btn-md">Cancle</a>
                        </div>
                    {!! Form::close() !!}
                </div>
                
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
</section>


@endsection


@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

<script>
$(document).ready(function() {
  
      $('#MyID').summernote({
        placeholder: '',
        tabsize: 2,
        height: 200
      });
});
</script>
@endsection
