@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('content')

<section class="content-wrapper">
    <section class="content-header">
      <h1>
        ALl Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">User</a></li>
        <li class="active">All Users</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                @include('admin.messages.messages')
                <table class="table table-hover">
                    <tbody>
                        <tr>
                          <th>Serial</th>
                          <th>User Name</th>
                          <th>User Email</th>
                          <th>User Role</th>
                          <th>User Status</th>
                          <th>Action</th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                          <td>{{ $serial++ }}</td>
                          <td>{{ $user->username }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->role }}</td>
                          <td>@if($user->active == 1) Active @else Block @endif</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'action' => ['UserController@destroy',$user->id]]) !!}
                                    <a href="{{ action('UserController@edit',$user->id) }}" class="btn btn-xs btn-default">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('You are delete a user permanently. Are you sure?')" >
                                        <i class="fa fa-trash"></i>
                                    </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
    			<div class="text-center">
    				{!! $users->links(); !!}
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
