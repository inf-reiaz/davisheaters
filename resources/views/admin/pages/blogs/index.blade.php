@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('content')

<section class="content-wrapper">
    <section class="content-header">
      <h1>
        Blogs
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Blogs</a></li>
        <li class="active">All Blogs</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <a style="width: 150px;"  href="{{ action('BlogsController@create') }}" class="btn btn-block btn-success btn-flat btn-sm">Add New Blog</a>
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
                          <th width="70" >Serial</th>
                          <th width="120" >Image</th>
                          <th width="120" >Headline</th>
                          <th width="420" style="text-align: justify; padding-right: 20px">Paragraph</th>
                          <th width="120" >Publist In Home Page</th>
                          <th>Author</td>
                          <th>Action</th>
                        </tr>
                        @foreach($blogs as $blog)
                        <tr>
                          <td>{{ $serial++ }}</td>
                          <td>
                            <img style="width: 100px;" src="{{ $blog->image_url  }}" alt="{{ $blog->title }}">
                          </td>
                          <td>{{ $blog->title }}</td>
                          <td>{{ substr(strip_tags($blog->body), 0, 100) }}{{ strlen(strip_tags($blog->body)) > 100 ? "..." : "" }}</td>
                          <td>{{ $blog->homepage }}</td>
                          <td>{{ $blog->user->username }}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'action' => ['BlogsController@destroy', $blog->id]]) !!}
                                    <a href="{{ action('BlogsController@edit',$blog->id) }}" class="btn btn-xs btn-default">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('You are  delete a post permanently. Are you sure?')" >
                                        <i class="fa fa-trash"></i>
                                    </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                  
          			<div class="text-center">
          				{!! $blogs->links(); !!}
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
