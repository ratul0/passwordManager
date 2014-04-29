@extends('layouts/master')

@section('content')

@if(!is_null($account))





<div class="row">
    <div class="col-lg-6">
        <h2>Account Details:</h2>
    </div>
</div>


<div class="col-lg-4">        

            <div class="panel panel-default">
              <div class="panel-heading">Service Name</div>
              <div class="panel-body">
                {{$account->service}}
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">User Name</div>
              <div class="panel-body">
                {{$account->username}}
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">Email</div>
              <div class="panel-body">
                {{$account->email}}
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">Password</div>
              <div class="panel-body">
                {{strrev($account->password)}}
              </div>
            </div>
			@if($account->note)
	            <div class="panel panel-default">
	              <div class="panel-heading">Note</div>
	              <div class="panel-body">
	                {{$account->note}}
	              </div>
	            </div>
	        @endif

          <div class="col-lg-4">  

          <div class="panel panel-default">
                <div class="panel-heading">Edit</div>
                <div class="panel-body">

                  {{ HTML::linkRoute('accounts.edit','Edit',$parameters =[$account->id],$attributes=['class'=>'btn btn-primary']) }}
                </div>
              </div>
          </div>

            <div class="col-lg-4">
              <div class="panel panel-default">
                <div class="panel-heading">Delete</div>
                <div class="panel-body">

                  {{link_to("accounts/delete/$account->id", 'Delete', $attributes = array("class"=>"btn btn-danger"))}}
                </div>
              </div>
              </div>



          </div>



@else
	<h1>There is no Account with this id.</h1>
@endif

@stop