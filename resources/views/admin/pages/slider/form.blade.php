
                      
                    <div class="col-md-6">
                      <div class="box box-primary">
                        <!-- /.box-header -->
                        <!-- form start -->
                          <div class="box-body">

                            <div class="form-group {{ $errors->has('headline') ? 'has-error' : '' }}">
                                {!! Form::label('Headline') !!}
                                {!! Form::text('headline', null, ['class' => 'form-control','placeholder'=>'Enter headline']) !!}
                    
                                @if($errors->has('headline'))
                                    <span class="help-block">{{ $errors->first('headline') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group {{ $errors->has('paragraph') ? 'has-error' : '' }}">
                                {!! Form::label('Paragraph') !!}
                                {!! Form::textarea('paragraph', null, ['id'=>'MyID','class' => 'form-control','placeholder'=>'Enter Paragraph']) !!}
                    
                                @if($errors->has('paragraph'))
                                    <span class="help-block">{{ $errors->first('paragraph') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group {{ $errors->has('button') ? 'has-error' : '' }}">
                                {!! Form::label('Button Text') !!}
                                {!! Form::text('button', null, ['class' => 'form-control','placeholder'=>'Enter Button Text']) !!}
                    
                                @if($errors->has('headline'))
                                    <span class="help-block">{{ $errors->first('button') }}</span>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
                                {!! Form::label('Enter Button action link') !!}
                                {!! Form::text('link', null, ['class' => 'form-control','placeholder'=>'Enter Button action link']) !!}
                    
                                @if($errors->has('link'))
                                    <span class="help-block">{{ $errors->first('link') }}</span>
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
                    <div class="col-md-6">
                    
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Feature Image</h3>
                            </div>
                            <div class="box-body text-center">
                                <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                      <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ ($slider->image_url) ? $slider->image_url : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
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