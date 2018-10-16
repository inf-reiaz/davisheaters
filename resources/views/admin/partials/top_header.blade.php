
      <header class="main-header">
        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>D</b>G</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="/public/front/images/logo.png" alt="" style="width: 85%;"></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
    
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!--messages-->
              
              <!--<li class="dropdown messages-menu">-->
              <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
              <!--    <i class="fa fa-envelope-o"></i>-->
              <!--    <span class="label label-success">4</span>-->
              <!--  </a>-->
              <!--  <ul class="dropdown-menu">-->
              <!--    <li class="header">You have 4 messages</li>-->
              <!--    <li>-->
                     
              <!--      <ul class="menu">-->
              <!--        <li>-->
              <!--          <a href="#">-->
              <!--            <div class="pull-left">-->
              <!--              <img src="/public/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
              <!--            </div>-->
              <!--            <h4>-->
                            
              <!--              <small><i class="fa fa-clock-o"></i> 5 mins</small>-->
              <!--            </h4>-->
              <!--            <p>Why not buy a new awesome theme?</p>-->
              <!--          </a>-->
              <!--        </li>-->
                       
              <!--      </ul>-->
              <!--    </li>-->
              <!--    <li class="footer"><a href="#">See All Messages</a></li>-->
              <!--  </ul>-->
              <!--</li>-->
              
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ Auth::user()->user_image }}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->username }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ Auth::user()->user_image }}" class="img-circle" alt="User Image">
                    <p>
                      {{ Auth::user()->username }}
                      
                    </p>
                    
                  </li>
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ action('AccessController@Changepassword') }}" class="btn btn-default btn-flat">Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>