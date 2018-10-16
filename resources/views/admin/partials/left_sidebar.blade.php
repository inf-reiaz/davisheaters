
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ Auth::user()->user_image }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->username }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <ul class="sidebar-menu" data-widget="tree">
            
        <?php $u = Auth::user()->role;?>
        @if($u == 'admin')
            <li class="{{ Request::path() == 'admin/dashboard' ? 'active' : '' }}'"><a href="{{ action('DashboardController@getDashboard') }}"><i class="fa fa-dashboard "></i> <span>Dashboard</span></a></li>
            <li class="{{ Request::path() == 'admin/user' ? 'active' : '' }}'"><a href="{{ action('UserController@index') }}"><i class="fa fa-user "></i> <span>Users</span></a></li>
        @else
          <li class="{{ Request::path() == 'admin/dashboard' ? 'active' : '' }}'"><a href="{{ action('DashboardController@getDashboard') }}"><i class="fa fa-dashboard "></i> <span>Dashboard</span></a></li>
        @endif
        
            <li class="{{ Request::path() == 'admin/slider/create' ? 'active treeview menu-open' : '' }} {{ Request::path() == 'admin/slider' ? 'active treeview menu-open' : '' }}">
              <a href="{{ action('SliderController@index') }}">
                <i class="fa fa-edit"></i>
                <span>Slider</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::path() == 'admin/slider' ? 'active' : '' }}"><a href="{{ action('SliderController@index') }}"><i class="fa fa-circle-o"></i> All Slider's</a></li>
                <li class="{{ Request::path() == 'admin/slider/create' ? 'active' : '' }}"><a href="{{ action('SliderController@create') }}"><i class="fa fa-circle-o"></i> Add New silder</a></li>
              </ul>
            </li>
            
            <li class="{{ Request::path() == 'admin/products/create' ? 'active treeview menu-open' : '' }} {{ Request::path() == 'admin/products' ? 'active treeview menu-open' : '' }}">
              <a href="{{ action('ProductsController@index') }}">
                <i class="fa fa-th"></i>
                <span>Product</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::path() == 'admin/products' ? 'active' : '' }}"><a href="{{ action('ProductsController@index') }}"><i class="fa fa-circle-o"></i> All Product </a></li>
                <li class="{{ Request::path() == 'admin/products/create' ? 'active' : '' }}"><a href="{{ action('ProductsController@create') }}"><i class="fa fa-circle-o"></i> Add New Product</a></li>
              </ul>
            </li>
            
            
            <li class="treeview">
              <a href="">
                <i class="fa fa-user"></i>
                <span>User</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="{{ action('UserController@index') }}"><i class="fa fa-circle-o"></i> All User </a></li>
                <li class=""><a href="{{ action('AccessController@addnewUser') }}"><i class="fa fa-circle-o"></i> Add New User</a></li>
              </ul>
            </li>
            
            <li class="{{ Request::path() == 'admin/aboutus' ? 'active treeview menu-open' : '' }}">
              <a href="{{ action('AboutUsController@index') }}">
                <i class="fa fa-laptop"></i>
                <span>About Us</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::path() == 'admin/aboutus' ? 'active' : '' }}"><a href="{{ action('AboutUsController@index') }}"><i class="fa fa-circle-o"></i> About Us</a></li>
              </ul>
            </li>
            <li class=""><a href=""><i class="fa fa-circle-o"></i>About The Owner</a></li>
            
            
            <li class="{{ Request::path() == 'admin/location' ? 'active treeview menu-open' : '' }}">
              <a href="{{ action('LocationsController@index') }}">
                <i class="fa fa-address-card"></i>
                <span>Address</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::path() == 'admin/location' ? 'active' : '' }}"><a href="{{ action('LocationsController@index') }}"><i class="fa fa-circle-o"></i> Address</a></li>
              </ul>
            </li>
            
            <li class="{{ Request::path() == 'admin/categories/create' ? 'active treeview menu-open' : '' }} {{ Request::path() == 'admin/categories' ? 'active treeview menu-open' : '' }}">
              <a href="{{ action('CategoriesController@index') }}">
                <i class="	fa fa-clone"></i>
                <span>Categories</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::path() == 'admin/categories' ? 'active' : '' }}"><a href="{{ action('CategoriesController@index') }}"><i class="fa fa-circle-o"></i> All Categories</a></li>
                <li class="{{ Request::path() == 'admin/categories/create' ? 'active' : '' }}"><a href="{{ action('CategoriesController@create') }}"><i class="fa fa-circle-o"></i> Add New Category</a></li>
              </ul>
            </li>
            
            <li class="{{ Request::path() == 'admin/blogs/create' ? 'active treeview menu-open' : '' }} {{ Request::path() == 'admin/blogs' ? 'active treeview menu-open' : '' }}">
              <a href="{{ action('BlogsController@index') }}">
                <i class="	fa fa-clone"></i>
                <span>Blog</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::path() == 'admin/blogs' ? 'active' : '' }}"><a href="{{ action('BlogsController@index') }}"><i class="fa fa-circle-o"></i> All Blog</a></li>
                <li class="{{ Request::path() == 'admin/blogs/create' ? 'active' : '' }}"><a href="{{ action('BlogsController@create') }}"><i class="fa fa-circle-o"></i> Add New Blog</a></li>
              </ul>
            </li>
            
            <li class="{{ Request::path() == 'admin/partners' ? 'active treeview menu-open' : '' }} {{ Request::path() == 'admin/partners-images' ? 'active treeview menu-open' : '' }} {{ Request::path() == 'admin/partners-images/create' ? 'active treeview menu-open' : '' }}">
              <a href="{{ action('PartnersController@index') }}">
                <i class="fa fa-bandcamp"></i>
                <span>Partners</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::path() == 'admin/partners' ? 'active' : '' }}"><a href="{{ action('PartnersController@index') }}"><i class="fa fa-circle-o"></i> Partner Description</a></li>
                <li class="{{ Request::path() == 'admin/partners-images/create' ? 'active' : '' }}"><a href="{{ action('PartnerimagesController@create') }}"><i class="fa fa-circle-o"></i>Add new Partner Image</a></li>
                <li class="{{ Request::path() == 'admin/partners-images' ? 'active' : '' }}"><a href="{{ action('PartnerimagesController@index') }}"><i class="fa fa-circle-o"></i>All Partner Images</a></li>
              </ul>
            </li>
            
            <li class="{{ Request::path() == 'admin/projects/create' ? 'active treeview menu-open' : '' }} {{ Request::path() == 'admin/projects' ? 'active treeview menu-open' : '' }}">
              <a href="{{ action('ProjectControll@index') }}">
                <i class="fa fa-american-sign-language-interpreting"></i>
                <span>Project</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::path() == 'admin/projects' ? 'active' : '' }}"><a href="{{ action('ProjectControll@index') }}"><i class="fa fa-circle-o"></i> All Products</a></li>
                <li class="{{ Request::path() == 'admin/projects/create' ? 'active' : '' }}"><a href="{{ action('ProjectControll@create') }}"><i class="fa fa-circle-o"></i> Add New Project</a></li>
              </ul>
            </li>
            
            <li><a href="{{ action('SubscribersController@getNewslatter') }}"><i class="fa fa-circle-o text-red"></i> <span>Newslatter</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>