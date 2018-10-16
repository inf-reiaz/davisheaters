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
        Partner Image
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
            <div class="box-body table-responsive no-padding">
                @include('admin.messages.messages')
                <table class="table table-hover">
                    <tbody>
                        <tr>
                          <th width="70" >Serial</th>
                          <th width="980" >Image</th>
                          <th>Action</th>
                        </tr>
                        @foreach($partners as $partner)
                        <tr>
                          <td>{{ $serial++ }}</td>
                          <td>
                            <img style="width: 100px;" src="{{ $partner->image_url  }}" alt="">
                          </td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'action' => ['PartnerimagesController@destroy', $partner->id]]) !!}
                                    <a href="{{ action('PartnerimagesController@edit',$partner->id) }}" class="btn btn-xs btn-default">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('You are  delete a Partner Image permanently. Are you sure?')" >
                                        <i class="fa fa-trash"></i>
                                    </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
            
          			<div class="text-center">
          				{!! $partners->links(); !!}
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
var simplemde = new SimpleMDE({ element: $("#MyID")[0] });
</script>
@endsection
