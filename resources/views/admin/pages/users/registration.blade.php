
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DavisHeaters | Registration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/public/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/public/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/public/admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/public/admin/plugins/iCheck/square/blue.css">

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
    
    
<div class="register-box">
  <div class="register-logo">
    <a href=""><img src="/public/front/images/logo.png" alt=" DavisHeaters" style="width: 65%;"></a>
  </div>

  <div class="register-box-body">
    <H5 class="login-box-msg">Register a new membership</h5>

    {!! Form::open(['url'=>action('AccessController@postSignup'), 'method'=>'post', 'enctype'=> 'multipart/form-data']) !!}
        
        
        <div class="">
            <div class="box-body text-center">
                <div class="form-group {{ $errors->has('user_image_input') ? 'has-error' : '' }}">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://placehold.it/200x150&text=No+Image}" alt="...">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                      <div>
                        <span class="btn btn-default btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            {!! Form::file('user_image_input') !!}
                        </span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                      </div>
                    </div>

                    @if($errors->has('user_image_input'))
                        <span class="help-block">{{ $errors->first('user_image_input') }}</span>
                    @endif
                </div>
                
            </div>
        </div>
        
      <div class="form-group has-feedback">
         {!! Form::text('firstname', old('firstname'), ['class'=>'form-control','placeholder'=>'First Name','required']) !!}
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

        @if($errors->has('firstname'))
            <span class="help-block">{{ $errors->first('firstname') }}</span>
        @endif
      </div>
      <div class="form-group has-feedback">
         {!! Form::text('lastname', old('lastname'), ['class'=>'form-control','placeholder'=>'Last Name']) !!}
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

        @if($errors->has('lastname'))
            <span class="help-block">{{ $errors->first('lastname') }}</span>
        @endif
      </div>
      
      <div class="form-group has-feedback">
         {!! Form::text('username', old('username'), ['class'=>'form-control','placeholder'=>'User Name']) !!}
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

        @if($errors->has('username'))
            <span class="help-block">{{ $errors->first('username') }}</span>
        @endif
      </div>
      
      
      <div class="form-group has-feedback">
         {!! Form::text('email', old('email'), ['class'=>'form-control','placeholder'=>'Email']) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

        @if($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span>
        @endif
      </div>
      
      <div class="form-group has-feedback">
        {!! Form::password('password', ['class'=>'form-control','placeholder' => 'Password','required']) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if($errors->has('password'))
            <span class="help-block">{{ $errors->first('password') }}</span>
        @endif
      </div>
      
      <div class="form-group has-feedback">
        {!! Form::password('password', ['class'=>'form-control','placeholder' => 'Retype password','required']) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if($errors->has('password'))
            <span class="help-block">{{ $errors->first('password') }}</span>
        @endif
      </div>

      
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    {!! Form::close() !!}

    <a href="{{ action('AccessController@login') }}" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
    
    
<!-- jQuery 3 -->
<script src="/public/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/public/admin/plugins/iCheck/icheck.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
