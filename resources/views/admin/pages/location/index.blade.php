@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('content')

<section class="content-wrapper">
    <section class="content-header">
      <h1>
        Location
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Location</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                @include('admin.messages.messages')
                <table class="table table-hover">
                    <tbody>
                        <tr>
                          <th>serial</th>
                          <th>Company Name</th>
                          <th>P.O</th>
                          <th>Address</th>
                          <th>Info Mail</th>
                          <th>Phone Number</th>
                          <th>Button 1 name</th>
                          <th>Button 2 name</th>
                          <th>Button 3 name</th>
                          <th>Action</th>
                        </tr>
                        <tr style="background: slategray; color: #fff;">
                          <td>1</td>
                          <td>{{ $location->company_name }}</td>
                          <td>{{ $location->p_o }}</td>
                          <td>{{ $location->address }}</td>
                          <td>{{ $location->info }}</td>
                          <td>{{ $location->phone }}</td>
                          <td><a target="_blank" style="color:#fff;"  href="{{ $location->button1_link }}">{{ $location->button1 }}</a></td>
                          <td><a target="_blank" style="color:#fff;"  href="{{ $location->button2_link }}">{{ $location->button2 }}</a></td>
                          <td><a target="_blank" style="color:#fff;" href="{{ $location->button3_link }}">{{ $location->button3 }}</a></td>
                          <td>
                              <a href="{{ action('LocationsController@edit',$location->id) }}" class="btn btn-xs btn-default">
                                  <i class="fa fa-edit"></i>
                              </a>
                          </td>
                        </tr>
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
