@extends('layouts/master')

@section('content')

	<div id="account">


			@if(!$accounts->isEmpty())
	      		<div class="bs-example table-responsive">
              		<table class="table table-striped table-bordered table-hover">
	                <thead>
	                  <tr>
	                    <th>Service</th>
	                    <th>Email</th>
	                    <th>User Name</th>
	                    <th>View</th>
	                    <th>Edit</th>
	                  </tr>
	                </thead>
                	<tbody>
					
                		@foreach($accounts as $data )
							<tr>
	                			<td>{{e($data->service)}}</td>
	                			
			                    <td>{{e($data->email)}}</td>

			                    <td>{{e($data->username)}}</td>


			                    <td>{{ HTML::linkRoute('accounts.show','View',$parameters =[$data->id],$attributes=['class'=>'btn btn-primary']) }}</td>

			                    <td>{{ HTML::linkRoute('accounts.edit','Edit',$parameters =[$data->id],$attributes=['class'=>'btn btn-primary']) }}</td>

                			

							</tr>
	                	@endforeach
	                </tbody>
	              </table>
	            </div>
	            @else
	            	<h1>Currently There is no Accounts.</h1>
	            @endif


	</div>


@stop
