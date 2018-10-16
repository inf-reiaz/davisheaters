
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Password Reset</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <style>
            .form-gap {padding-top: 70px;}
            .btn-info {
                color: #ffffff;
                background-color: #ffa07a;
                border-color: #ffa07a;
            }
        </style>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript"></script>
    </head>
    <body style="">
            
        <div class="form-gap"></div>
        <div class="container">
        	<div class="row">
        		<div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Change Your Password</h2>
                          
                          @include('admin.messages.messages')
                                  
        
                        <div class="text-center"> </div>
                        
                          
                          <div class="panel-body">
            
                            <form id="register-form" role="form" class="form" method="post" action="{{ action('AccessController@PostChangepassword') }}">
                                 {{ csrf_field() }}
                                <input type="hidden" name="user_email" value="{{ Auth::user()->email  }}"/>
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input id="email" type="password" class="form-control" name="old_password" placeholder="Enter Your Old Password"  required>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" name="new_password" placeholder="Enter Your New Password"  required>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Change Password" type="submit">
                                <a href="" class="btn btn-lg btn-primary btn-block">Cancle</a>
                              </div>
                            </form>
            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        	</div>
        </div>
                                    
    </body>
</html>