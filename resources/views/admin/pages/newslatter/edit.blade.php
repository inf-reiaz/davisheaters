@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('content')

<section class="content-wrapper">
    <section class="content-header">
      <h1>
        Newslatter
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Newslatter</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                
                  {!! Form::model($newslatter, [
                      'method' => 'PUT',
                      'action'  => ['SubscribersController@update', $newslatter->id],
                      'files'  => TRUE
                  ]) !!}
                  
                  
                      
                      <div class="form-group has-feedback">
                         {!! Form::text('email', old('email'), ['class'=>'form-control']) !!}

                        @if($errors->has('email'))
                            <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif
                      </div>
                      
                      <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
                      
                  {!! Form::close() !!}
                  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
</section>


@endsection
