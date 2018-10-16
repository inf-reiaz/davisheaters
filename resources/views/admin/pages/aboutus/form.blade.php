
                      
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <!-- /.box-header -->
                        <!-- form start -->
                          <div class="box-body">

                        
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Logo</h3>
                                </div>
                                <div class="box-body text-center">
                                    <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px; background: slategray">
                                            <img src="{{ ($aboutus->image_url) ? $aboutus->image_url : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
                                          </div>
                                          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                          <div>
                                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                            {!! Form::file('photo') !!}
                                            </span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                          </div>
                                        </div>
                        
                                        @if($errors->has('photo'))
                                            <span class="help-block">{{ $errors->first('photo') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="form-group {{ $errors->has('paragraph') ? 'has-error' : '' }}">
                                {!! Form::label('Body') !!}
                                {!! Form::textarea('body', null, ['id'=>'MyID','class' => 'form-control','placeholder'=>'Enter About Us Body']) !!}
                    
                                @if($errors->has('body'))
                                    <span class="help-block">{{ $errors->first('body') }}</span>
                                @endif
                            </div>
                            
                            
                          </div>
                          <!-- /.box-body -->
            
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-md">Update</button>
                            <a href="{{ action('AboutUsController@index') }}" class="btn btn-primary btn-md">Cancle</a>
                          </div>
                      </div>
                      <!-- /.box -->
                    </div>