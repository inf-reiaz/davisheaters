
                      
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <!-- /.box-header -->
                    
                        <div class="box">
                            <div class="box-header with-border">
                            </div>
                            <div class="box-body text-center">
                                <div class="form-group {{ $errors->has('partner_image') ? 'has-error' : '' }}">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                      <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ ($partner->image_url) ? $partner->image_url : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
                                      </div>
                                      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                      <div>
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                        {!! Form::file('partner_image') !!}
                                        </span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                      </div>
                                    </div>
                    
                                    @if($errors->has('partner_image'))
                                        <span class="help-block">{{ $errors->first('partner_image') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                      </div>
                      <!-- /.box -->
                    </div>