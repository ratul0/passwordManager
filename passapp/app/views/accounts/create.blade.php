@extends('layouts/master')

@section('content')









	<div class="well">
              {{Form::open(array('route'=>'accounts.store','class'=>'bs-example form-horizontal'))}}

                <fieldset>
                  <legend>Register</legend>


                   <div class="form-group">
                    {{Form::label('service', "Service", $attributes = array('class'=>'col-lg-2 control-label'))}}
                    <div class="col-lg-10">
                      {{Form::text('service', NULL,$attributes = array('class'=>'form-control','placeholder'=>"Type your service"))}}
            
            {{$errors->first('service')}}


                    </div>
                  </div>


                  <div class="form-group">
                    {{Form::label('username', "Username", $attributes = array('class'=>'col-lg-2 control-label'))}}
                    <div class="col-lg-10">
                      {{Form::text('username', NULL,$attributes = array('class'=>'form-control','placeholder'=>"Type your username"))}}
            
            {{$errors->first('username')}}


                    </div>
                  </div>

                  <div class="form-group">
                    {{Form::label('email', "Email", $attributes = array('class'=>'col-lg-2 control-label'))}}
                    <div class="col-lg-10">
                      {{Form::text('email', "ratulcse27@gmail.com",$attributes = array('class'=>'form-control','placeholder'=>"Type your Email Address"))}}
						
						{{$errors->first('email')}}


                    </div>
                  </div>



                  <div class="form-group">
                    {{Form::label('password', "Password", $attributes = array('class'=>'col-lg-2 control-label'))}}
                    <div class="col-lg-10">
                      {{Form::text('password',NULL,$attributes = array('class'=>'form-control','placeholder'=>"Type your Password"))}}
						
						{{$errors->first('password')}}


                    </div>
                  </div>

                  <div class="form-group">
                    {{Form::label('note', "Note", $attributes = array('class'=>'col-lg-2 control-label'))}}
                    <div class="col-lg-10">
                      {{Form::textarea('note',NULL,$attributes = array('class'=>'form-control','placeholder'=>"something about this account"))}}
						
						{{$errors->first('note')}}


                    </div>
                  </div>
                  
                 
           
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                
                      {{Form::submit('Save', $attributes = array('class'=>'btn btn-primary'))}}
                    </div>
                  </div>
                </fieldset>
              {{Form::close()}}
            </div> 

@stop