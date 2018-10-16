@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('content')

<section class="content-wrapper">
    <section class="content-header">
      <h1>
        Location
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Location</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                  <h3 class="box-title">Edit Location information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                @include('admin.messages.messages')
                <div class="row">
                    
                      {!! Form::model($location, [
                          'method' => 'PUT',
                          'action'  => ['LocationsController@update', $location->id],
                          'files'  => TRUE
                      ]) !!}

                      @include('admin.pages.location.form')

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
