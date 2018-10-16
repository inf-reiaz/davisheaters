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
        <li><a href="#">Products</a></li>
        <li class="active">All Products</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <a style="width: 150px;"  href="{{ action('ProductsController@create') }}" class="btn btn-block btn-success btn-flat btn-sm">Add New Product</a>
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
                          <th style="  width: 65%;text-align: justify; padding-right: 20px">Paragraph</th>
                          <th>Action</th>
                        </tr>
                        @foreach($products as $product)
                        <tr>
                          <td>{{ $serial++ }}</td>
                          <td>
                            
                            <div class="box-body" style="max-width: 220px;">
                              <div id="carousel-example-generic-{{$product->id}}" class="carousel slide" data-ride="carousel">
                            
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <img src="{{ $product->image_url  }}" alt="First slide">
                
                                  </div>
                                  <div class="item">
                                    <img src="{{ $product->image_url2  }}" alt="Second slide">
                                  </div>
                                  <div class="item">
                                    <img src="{{ $product->image_url3  }}" alt="Third slide">
                                  </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic-{{$product->id}}" data-slide="prev">
                                  <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic-{{$product->id}}" data-slide="next">
                                  <span class="fa fa-angle-right"></span>
                                </a>
                              </div>
                            </div>
            
                          </td>
                          <td>{{ $product->title }}</td>
                          <td>{{ substr(strip_tags($product->body), 0, 205) }}{{ strlen(strip_tags($product->paragraph)) > 205 ? "..." : "" }}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'action' => ['ProductsController@destroy', $product->id]]) !!}
                                    <a href="{{ action('ProductsController@edit',$product->id) }}" class="btn btn-xs btn-default">
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
    				{!! $products->links(); !!}
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
