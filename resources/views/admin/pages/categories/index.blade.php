@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('content')

<section class="content-wrapper">
    <section class="content-header">
      <h1>
        Categories
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">All Categories</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <a style="width: 150px;"  href="{{ action('CategoriesController@create') }}" class="btn btn-block btn-success btn-flat btn-sm">Add New Category</a>
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
                          <th>Name</th>
                          <th>Image</th>
                          <th style="  width: 65%;text-align: justify; padding-right: 20px">Description</th>
                          <th>Action</th>
                        </tr>
                        @foreach($categories as $c)
                        <tr>
                          <td>{{ $serial++ }}</td>
                          <td style="width:12%">{{ $c->name }}</td>
                          <td>
                             <img src="{{ $c->image_url  }}" alt="First slide" style="width:60%">
                          </td>
                          
                          <td>{{ substr(strip_tags($c->body), 0, 205) }}{{ strlen(strip_tags($c->body)) > 205 ? "..." : "" }}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'action' => ['CategoriesController@destroy', $c->id]]) !!}
                                    <a href="{{ action('CategoriesController@edit',$c->id) }}" class="btn btn-xs btn-default">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Are you delete this Category  permanently. Are you sure?')" >
                                        <i class="fa fa-trash"></i>
                                    </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
</section>


@endsection
