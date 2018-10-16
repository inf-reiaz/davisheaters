@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('content')

<section class="content-wrapper">
    <section class="content-header">
      <h1>
        About Us
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">About Us</li>
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
                          <th>Image</th>
                          <th>Body</th>
                          <th>Action</th>
                        </tr>
                        <tr style="background: slategray;">
                          <td style="width: 20%"><img src="{{ $aboutus->image_url }}" style="margin-top: 25px;" alt=""></td>
                          <td style="color: #fff;width: 65%;text-align: justify; padding-right: 20px">{!! $aboutus->body !!}</td>
                          
                            <td>
                                    <a href="{{ action('AboutUsController@edit',$aboutus->id) }}" class="btn btn-xs btn-default" style="margin-top: 75px;">
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
