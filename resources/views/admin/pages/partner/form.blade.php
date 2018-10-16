
                      
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <!-- /.box-header -->
                        <!-- form start -->
                          <div class="box-body">
                            
                            <div class="form-group {{ $errors->has('paragraph') ? 'has-error' : '' }}">
                                {!! Form::label('Body') !!}
                                {!! Form::textarea('body', null, ['id'=>'MyID','class' => 'form-control']) !!}
                    
                                @if($errors->has('body'))
                                    <span class="help-block">{{ $errors->first('body') }}</span>
                                @endif
                            </div>
                            
                            
                          </div>
                          <!-- /.box-body -->
            
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-md">Update</button>
                            <a href="{{ action('PartnersController@index') }}" class="btn btn-primary btn-md">Cancle</a>
                          </div>
                      </div>
                      <!-- /.box -->
                    </div>