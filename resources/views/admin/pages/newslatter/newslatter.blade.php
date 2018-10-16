@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('content')

<section class="content-wrapper">
    <section class="content-header">
      <h1>
        Newslatter
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Newslatter</li>
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
                <table class="table table-hover">
                    <tbody>
                        <tr>
                          <th width="50px">Serial</th>
                          <th width="230px">Email</th>
                          <th>Action</th>
                        </tr>
                        <?php $i=0; ?>
                        @foreach($newslatters as $n)
                        <?php $i++ ?>
                        <tr>
                          <td style="text-align: justify;">{{ $i }}</td>
                          <td style="text-align: justify;">{{ $n->email }}</td>
                          
                          <td>
                              {!! Form::open(['method' => 'DELETE', 'action' => ['SubscribersController@destroy',$n->id]]) !!}
                                  <a href="{{ action('SubscribersController@edit',$n->id) }}" class="btn btn-xs btn-default">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('You are delete this permanently. Are you sure?')" >
                                      <i class="fa fa-trash"></i>
                                  </button>
                              {!! Form::close() !!}
                          </td>
                        </tr>
                        @endforeach
                        
                        {{ $newslatters->links() }}
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
