@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('content')

<section class="content-wrapper">
    <section class="content-header">
      <h1>
        Products
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Projects</a></li>
        <li class="active">All Projects</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <a style="width: 150px;"  href="{{ action('ProjectControll@create') }}" class="btn btn-block btn-success btn-flat btn-sm">Add New Project</a>
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
                          <th width="320" >Project Name</th>
                          <th width="200" >Owner Name</th>
                          <th width="220" >Date of Completion</th>
                          <th width="420" >Description</th>
                          <th width="220" >Image</th>
                          <th width="120" >Action</th>
                        </tr>
                        @foreach($projects as $project)
                        <tr>
                          <td>{{ $serial++ }}</td>
                          <td>{{ $project->project_name }}</td>
                          <td>{{ $project->owner_name }}</td>
                          <td>{{ $project->date_of_completion }}</td>
                          <td>{{ substr(strip_tags($project->body), 0, 100) }}{{ strlen(strip_tags($project->body)) > 100 ? "..." : "" }}</td>
                          <td>
                            <img style="width: 100px;" src="{{ $project->image_url  }}" alt="{{ $project->title }}">
                          </td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'action' => ['ProjectControll@destroy', $project->id]]) !!}
                                    <a href="{{ action('ProjectControll@edit',$project->id) }}" class="btn btn-xs btn-default">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('You are permanently delete a Project . Are you sure?')" >
                                        <i class="fa fa-trash"></i>
                                    </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                  
          			<div class="text-center">
          				{!! $projects->links(); !!}
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
