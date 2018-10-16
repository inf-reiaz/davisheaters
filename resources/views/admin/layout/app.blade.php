
<!DOCTYPE html>
<html>
<head>
    @include('admin.partials._head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    
        @include('admin.partials.top_header')
        
        
        @include('admin.partials.left_sidebar')
    
      @yield('content')
      
      
        @include('admin.partials.footer')
    
    </div>
<!-- ./wrapper -->

    @include('admin.partials._js')
    
    <script type="text/javascript">
        // $('#menu li').on('click', function() {
        //     $(this).addClass('active').siblings().removeClass('current');
        // });
    </script>
</body>
</html>
