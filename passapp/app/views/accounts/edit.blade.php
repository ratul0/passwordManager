@extends('layouts/master')

@section('content')






@if(!is_null($account))


	<div class="well">
              {{Form::open(array('route'=>'accounts.update','method' => 'put','class'=>'bs-example form-horizontal'))}}

                <fieldset>
                  <legend>Register</legend>


                   <div class="form-group">
                    {{Form::label('service', "Service", $attributes = array('class'=>'col-lg-2 control-label'))}}
                    <div class="col-lg-10">
                      {{Form::text('service', $account->service,$attributes = array('class'=>'form-control','placeholder'=>"Type your service"))}}
            
            {{$errors->first('service')}}


                    </div>
                  </div>


                  <div class="form-group">
                    {{Form::label('username', "Username", $attributes = array('class'=>'col-lg-2 control-label'))}}
                    <div class="col-lg-10">
                      {{Form::text('username', $account->username,$attributes = array('class'=>'form-control','placeholder'=>"Type your username"))}}
            
            {{$errors->first('username')}}


                    </div>
                  </div>

                  <div class="form-group">
                    {{Form::label('email', "Email", $attributes = array('class'=>'col-lg-2 control-label'))}}
                    <div class="col-lg-10">
                      {{Form::text('email', $account->email,$attributes = array('class'=>'form-control','placeholder'=>"Type your Email Address"))}}
						
						{{$errors->first('email')}}


                    </div>
                  </div>



                  <div class="form-group">
                    {{Form::label('password', "Password", $attributes = array('class'=>'col-lg-2 control-label'))}}
                    <div class="col-lg-10">
                      {{Form::text('password',strrev($account->password),$attributes = array('class'=>'form-control','placeholder'=>"Type your Password"))}}
						
						{{$errors->first('password')}}


                    </div>
                  </div>

                  <div class="form-group">
                    {{Form::label('note', "Note", $attributes = array('class'=>'col-lg-2 control-label'))}}
                    <div class="col-lg-10">
                      {{Form::textarea('note',$account->note,$attributes = array('class'=>'form-control','placeholder'=>"something about this account"))}}
						
						      {{$errors->first('note')}}


                    </div>
                  </div>

                  {{Form::hidden('account_id',$account->id)}}
                  
                 
           
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                
                      {{Form::submit('Save', $attributes = array('class'=>'btn btn-primary'))}}
                    </div>
                  </div>
                </fieldset>
              {{Form::close()}}
            </div> 

@else
  <h1>There is no account with this id.</h1>
@endif

@stop