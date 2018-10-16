
                        
                      <div class="col-md-12">
                          <div class="box">
                              
                              <div class="box-body text-center">
                                  <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                                      <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                          <img src="{{ ($category->image_url) ? $category->image_url : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
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
                      </div>
                  
                    <div class="col-md-12">
                        
                      <div class="box box-primary">
                        <!-- /.box-header -->
                        <!-- form start -->
                          <div class="box-body">

                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                {!! Form::label('Category Name') !!}
                                {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Enter Category Name']) !!}
                    
                                @if($errors->has('name'))
                                    <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                                {!! Form::label('Category  Description') !!}
                                {!! Form::textarea('body', null, ['id'=>'MyID','class' => 'form-control','placeholder'=>'']) !!}
                    
                                @if($errors->has('body'))
                                    <span class="help-block">{{ $errors->first('body') }}</span>
                                @endif
                            </div>

                            
                          </div>
                          <!-- /.box-body -->
            
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">save</button>
                          </div>
                      </div>
                      <!-- /.box -->
                    </div>