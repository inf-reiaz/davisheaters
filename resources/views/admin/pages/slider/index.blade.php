@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('content')

<section class="content-wrapper">
    <section class="content-header">
      <h1>
        Sliders
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Slider</a></li>
        <li class="active">All Sliders</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <a style="width: 150px;"  href="{{ action('SliderController@create') }}" class="btn btn-block btn-success btn-flat btn-sm">Add New Slider</a>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                @include('admin.messages.messages')
                <table class="table table-hover">
                    <tbody>
                        <tr>
                          <th>Serial</th>
                          <th>Image</th>
                          <th>Headline</th>
                          <th>Paragraph</th>
                          <th>Button Text</th>
                          <th>Action</th>
                        </tr>
                        @foreach($sliders as $slider)
                        <tr>
                          <td>{{ $serial++ }}</td>
                          <td><img src="{{ $slider->image_url }}" style="height: 80px;" alt=""></td>
                          <td>{{ $slider->headline }}</td>
                          <td>{{ substr(strip_tags($slider->paragraph), 0, 25) }}{{ strlen(strip_tags($slider->paragraph)) > 25 ? "..." : "" }}</td>
                          <td>{{ $slider->button }}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'action' => ['SliderController@destroy', $slider->id]]) !!}
                                    <a href="{{ action('SliderController@edit',$slider->id) }}" class="btn btn-xs btn-default">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('You are about to delete a post permanently. Are you sure?')" >
                                        <i class="fa fa-trash"></i>
                                    </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
    			<div class="text-center">
    				{!! $sliders->links(); !!}
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
