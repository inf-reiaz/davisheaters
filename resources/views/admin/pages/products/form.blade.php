
                      
                        <div class="col-md-12">
                            <div class="box-header">
                                <h3 class="box-title">Products Image's </h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                
                                <div class="box-body text-center">
                                    <div class="form-group {{ $errors->has('photo1') ? 'has-error' : '' }}">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="{{ ($product->image_url) ? $product->image_url : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
                                          </div>
                                          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                          <div>
                                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                            {!! Form::file('photo1') !!}
                                            </span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                          </div>
                                        </div>
                        
                                        @if($errors->has('photo1'))
                                            <span class="help-block">{{ $errors->first('photo1') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                
                                <div class="box-body text-center">
                                    <div class="form-group {{ $errors->has('photo2') ? 'has-error' : '' }}">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="{{ ($product->image_url2) ? $product->image_url2 : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
                                          </div>
                                          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                          <div>
                                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                            {!! Form::file('photo2') !!}
                                            </span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                          </div>
                                        </div>
                        
                                        @if($errors->has('photo2'))
                                            <span class="help-block">{{ $errors->first('photo2') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="box-body text-center">
                                    <div class="form-group {{ $errors->has('photo3') ? 'has-error' : '' }}">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="{{ ($product->image_url3) ? $product->image_url3 : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
                                          </div>
                                          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                          <div>
                                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                            {!! Form::file('photo3') !!}
                                            </span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                          </div>
                                        </div>
                        
                                        @if($errors->has('photo3'))
                                            <span class="help-block">{{ $errors->first('photo3') }}</span>
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

                            <div class="form-group {{ $errors->has('headline') ? 'has-error' : '' }}">
                                {!! Form::label('Name') !!}
                                {!! Form::text('title', null, ['class' => 'form-control','placeholder'=>'Enter Title']) !!}
                    
                                @if($errors->has('title'))
                                    <span class="help-block">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            

                            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                                {!! Form::label('Select Category') !!}
                                {!! Form::select('category_id', App\Category::pluck('name','id'), null, ['class' => 'form-control', 'placeholder' => 'Select Category Name']) !!}
                    
                                @if($errors->has('category_id'))
                                    <span class="help-block">{{ $errors->first('category_id') }}</span>
                                @endif
                            </div>
                            
                            
                            <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                                {!! Form::label('Product  description') !!}
                                {!! Form::textarea('body', null, ['id'=>'MyID','class' => 'form-control','placeholder'=>'Enter Product detals']) !!}
                    
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