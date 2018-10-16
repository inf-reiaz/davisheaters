@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endsection

@section('content')

<section class="content-wrapper">
    <section class="content-header">
      <h1>
        User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">User</a></li>
        <li class="active">Update User</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                  <h3 class="box-title">Edit User</h3>
              <div class="box-tools">
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                @include('admin.messages.messages')
                <div class="row">
                    
                      {!! Form::model($user, [
                          'method' => 'PUT',
                          'action'  => ['UserController@update', $user->id],
                          'files'  => TRUE
                      ]) !!}
                        
                        <div class="col-md-8 col-md-offset-2">                 
                            <div class="">
                                <div class="box-body text-center">
                                    <div class="form-group {{ $errors->has('user_image_input') ? 'has-error' : '' }}">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="{{ ($user->user_image) ? $user->user_image : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
                                          </div>
                                          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                          
                                        </div>
                    
                                        @if($errors->has('user_image_input'))
                                            <span class="help-block">{{ $errors->first('user_image_input') }}</span>
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>
                                
                              <div class="form-group has-feedback">
                                 {!! Form::text('firstname', old('firstname'), ['class'=>'form-control','placeholder'=>'First Name','required disabled']) !!}
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        
                                @if($errors->has('firstname'))
                                    <span class="help-block">{{ $errors->first('firstname') }}</span>
                                @endif
                              </div>
                              <div class="form-group has-feedback">
                                 {!! Form::text('lastname', old('lastname'), ['class'=>'form-control','placeholder'=>'Last Name','disabled']) !!}
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        
                                @if($errors->has('lastname'))
                                    <span class="help-block">{{ $errors->first('lastname') }}</span>
                                @endif
                              </div>
                              
                              <div class="form-group has-feedback">
                                 {!! Form::text('username', old('username'), ['class'=>'form-control','placeholder'=>'User Name','disabled']) !!}
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        
                                @if($errors->has('username'))
                                    <span class="help-block">{{ $errors->first('username') }}</span>
                                @endif
                              </div>
                              
                              
                              <div class="form-group has-feedback">
                                 {!! Form::text('email', old('email'), ['class'=>'form-control','placeholder'=>'Email','disabled']) !!}
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        
                                @if($errors->has('email'))
                                    <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                              </div>

                            <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
                                {!! Form::label('User Current Role') !!}
                                {!! Form::select('role', ['admin' => 'Admin', 'user' => 'User'], null, ['class' => 'form-control']) !!}
                    
                                @if($errors->has('role'))
                                    <span class="help-block">{{ $errors->first('role') }}</span>
                                @endif
                            </div>
                              
                            <div class="form-group {{ $errors->has('active') ? 'has-error' : '' }}">
                                {!! Form::label('User Current Status') !!}
                                {!! Form::select('active', ['1' => 'Active', '0' => 'Block'], null, ['class' => 'form-control']) !!}
                    
                                @if($errors->has('active'))
                                    <span class="help-block">{{ $errors->first('active') }}</span>
                                @endif
                            </div>
                         
                              <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
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
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script>
var simplemde = new SimpleMDuE({ element: $("#MyID")[0] });
</script>
@endsection
