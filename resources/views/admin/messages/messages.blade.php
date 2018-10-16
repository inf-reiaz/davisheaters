

     @if (Session::has('success'))
      <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         {{ Session::get('success') }}
      </div>
    @endif

    
    @if (count($errors) > 0)
    
     <div id="error_c" class="alert alert-danger alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Errors:</strong>
            <ol>
        		@foreach ($errors->all() as $error)
        			<li>{{ $error }}</li>
        		@endforeach  
    		</ol>
        
      </div>
      
    
    @endif
   