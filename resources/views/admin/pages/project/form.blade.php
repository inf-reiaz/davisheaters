
                      
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <!-- /.box-header -->
                        <!-- form start -->
                          <div class="box-body">
                        
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Project Image</h3>
                                </div>
                                <div class="box-body text-center">
                                    <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="{{ ($project->image_url) ? $project->image_url : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
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

                            <div class="form-group {{ $errors->has('project_name') ? 'has-error' : '' }}">
                                {!! Form::label('Project Name') !!}
                                {!! Form::text('project_name', null, ['class' => 'form-control','placeholder'=>'Enter Project Name']) !!}
                    
                                @if($errors->has('project_name'))
                                    <span class="help-block">{{ $errors->first('project_name') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group {{ $errors->has('owner_name') ? 'has-error' : '' }}">
                                {!! Form::label('Owner Name') !!}
                                {!! Form::text('owner_name', null, ['class' => 'form-control','placeholder'=>'Enter Project Owner Name']) !!}
                    
                                @if($errors->has('owner_name'))
                                    <span class="help-block">{{ $errors->first('owner_name') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                                {!! Form::label('Project Body Content') !!}
                                {!! Form::textarea('body', null, ['id'=>'MyID','class' => 'form-control','placeholder'=>'Enter Blog content']) !!}
                    
                                @if($errors->has('body'))
                                    <span class="help-block">{{ $errors->first('body') }}</span>
                                @endif
                            </div>
                            

                            <div class="form-group {{ $errors->has('date_of_completion') ? 'has-error' : '' }}">
                                {!! Form::label('Date of completion') !!}
                                {!! Form::text('date_of_completion', null, ['class' => 'form-control','placeholder'=>'12-10-2017']) !!}
                    
                                @if($errors->has('date_of_completion'))
                                    <span class="help-block">{{ $errors->first('date_of_completion') }}</span>
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