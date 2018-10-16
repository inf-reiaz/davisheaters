@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('css')
    {!! Charts::assets() !!}
@endsection

@section('content')
	
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            
              @include('admin.messages.messages')
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ \App\Product::all()->count()  }}</h3>
    
                  <p>Products</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ action('ProductsController@index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{ \App\Blog::all()->count()  }}</h3>
    
                  <p>Total Blog</p>
                </div>
                <div class="icon">
                  <i class="ion fa-blogger"></i>
                </div>
                <a href="{{ action('BlogsController@index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ \App\User::all()->count() }}</h3>
                  <p>Total Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{ \App\Visitor::find(1)->count  }}</h3>
    
                  <p>Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            
          </div>
          <!-- /.row -->
            <div class="row">
              <div class="col-lg-6 col-xs-6">
                	{!! $chart->render() !!}
              </div>
            </div>
            
            <div class="row">
              <div class="col-lg-6 col-xs-6">
                	{!! $project->render() !!}
              </div>
            </div>
            
            <div class="row">
              <div class="col-lg-6 col-xs-6">
                	{!! $pie->render() !!}
              </div>
            </div>

        </section>
        <!-- /.content -->
      </div>
      
@endsection