
                      
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <!-- /.box-header -->
                        <!-- form start -->
                          <div class="box-body">
    
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}">
                                    {!! Form::label('Company Name') !!}
                                    {!! Form::text('company_name', null, ['class' => 'form-control','placeholder'=>'Enter About Us Body']) !!}
                        
                                    @if($errors->has('company_name'))
                                        <span class="help-block">{{ $errors->first('company_name') }}</span>
                                    @endif
                                </div>
                                
    
                                <div class="form-group {{ $errors->has('p_o') ? 'has-error' : '' }}">
                                    {!! Form::label('P.O') !!}
                                    {!! Form::text('p_o', null, ['class' => 'form-control','placeholder'=>'P.O']) !!}
                        
                                    @if($errors->has('p_o'))
                                        <span class="help-block">{{ $errors->first('p_o') }}</span>
                                    @endif
                                </div>
                                
                                
    
                                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                    {!! Form::label('Address') !!}
                                    {!! Form::text('address', null, ['class' => 'form-control','placeholder'=>'Address']) !!}
                        
                                    @if($errors->has('address'))
                                        <span class="help-block">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group {{ $errors->has('info') ? 'has-error' : '' }}">
                                    {!! Form::label('Info Mail') !!}
                                    {!! Form::text('info', null, ['class' => 'form-control','placeholder'=>'Address']) !!}
                        
                                    @if($errors->has('info'))
                                        <span class="help-block">{{ $errors->first('info') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                    {!! Form::label('Phone Number') !!}
                                    {!! Form::text('phone', null, ['class' => 'form-control','placeholder'=>'Phone number']) !!}
                        
                                    @if($errors->has('phone'))
                                        <span class="help-block">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                
                            </div>
    
                            <div class="col-md-6">
                                
                                <div class="form-group {{ $errors->has('button1') ? 'has-error' : '' }}">
                                    {!! Form::label('Button1') !!}
                                    {!! Form::text('button1', null, ['class' => 'form-control','placeholder'=>'Button1 ']) !!}
                        
                                    @if($errors->has('button1'))
                                        <span class="help-block">{{ $errors->first('button1') }}</span>
                                    @endif
                                </div>
                                
                                
                                <div class="form-group {{ $errors->has('button1_link') ? 'has-error' : '' }}">
                                    {!! Form::label('Button1 Link') !!}
                                    {!! Form::text('button1_link', null, ['class' => 'form-control','placeholder'=>'Button1 Link ']) !!}
                        
                                    @if($errors->has('button1_link'))
                                        <span class="help-block">{{ $errors->first('button1_link') }}</span>
                                    @endif
                                </div>
                                
    
                                
                                <div class="form-group {{ $errors->has('button2') ? 'has-error' : '' }}">
                                    {!! Form::label('Button2') !!}
                                    {!! Form::text('button2', null, ['class' => 'form-control','placeholder'=>'Button2 ']) !!}
                        
                                    @if($errors->has('button2'))
                                        <span class="help-block">{{ $errors->first('button2') }}</span>
                                    @endif
                                </div>
                                
                                
                                <div class="form-group {{ $errors->has('button2_link') ? 'has-error' : '' }}">
                                    {!! Form::label('Button2 Link') !!}
                                    {!! Form::text('button2_link', null, ['class' => 'form-control','placeholder'=>'Button2 Link ']) !!}
                        
                                    @if($errors->has('button2_link'))
                                        <span class="help-block">{{ $errors->first('button2_link') }}</span>
                                    @endif
                                </div>
                                
                                
                                
                                <div class="form-group {{ $errors->has('button3') ? 'has-error' : '' }}">
                                    {!! Form::label('Button3') !!}
                                    {!! Form::text('button3', null, ['class' => 'form-control','placeholder'=>'Button3 ']) !!}
                        
                                    @if($errors->has('button3'))
                                        <span class="help-block">{{ $errors->first('button3') }}</span>
                                    @endif
                                </div>
                                
                                
                                <div class="form-group {{ $errors->has('button3_link') ? 'has-error' : '' }}">
                                    {!! Form::label('Button3 Link') !!}
                                    {!! Form::text('button3_link', null, ['class' => 'form-control','placeholder'=>'Button3 Link ']) !!}
                        
                                    @if($errors->has('button3_link'))
                                        <span class="help-block">{{ $errors->first('button3_link') }}</span>
                                    @endif
                                </div>
                                
                                
    </div>
                          </div>
                          <!-- /.box-body -->
            
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-md">Update</button>
                            <a href="{{ action('LocationsController@index') }}" class="btn btn-primary btn-md">Cancle</a>
                          </div>
                      </div>
                      <!-- /.box -->
                    </div>