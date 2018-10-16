
                      
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <!-- /.box-header -->
                        <!-- form start -->
                          <div class="box-body">
                    
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Blog Image</h3>
                            </div>
                            <div class="box-body text-center">
                                <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                      <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ ($blog->image_url) ? $blog->image_url : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
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

                            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                {!! Form::label('Blog Title') !!}
                                {!! Form::text('title', null, ['class' => 'form-control','placeholder'=>'Enter blog title']) !!}
                    
                                @if($errors->has('title'))
                                    <span class="help-block">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                                {!! Form::label('Blog Content') !!}
                                {!! Form::textarea('body', null, ['id'=>'MyID','class' => 'form-control','placeholder'=>'Enter Blog content']) !!}
                    
                                @if($errors->has('body'))
                                    <span class="help-block">{{ $errors->first('body') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group {{ $errors->has('meta_tages') ? 'has-error' : '' }}">
                                {!! Form::label('Meta Tags') !!}
                                {!! Form::text('meta_tages', null, ['class' => 'form-control','placeholder'=>'Enter Meta Tages']) !!}
                    
                                @if($errors->has('meta_tages'))
                                    <span class="help-block">{{ $errors->first('meta_tages') }}</span>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('homepage') ? 'has-error' : '' }}">
                                {!! Form::label('publish on home page') !!}
                                {!! Form::select('homepage', ['Yes' => 'Yes', 'No' => 'No'], null, ['class' => 'form-control', 'placeholder' => '  ']) !!}
                    
                                @if($errors->has('homepage'))
                                    <span class="help-block">{{ $errors->first('homepage') }}</span>
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