@extends('layouts/web/master')
@section('content')
	<?php $title = "User" ?>
	<div class="isi">
		<div class="row">
			<table class="table table-bordered table-hover">
			  	<thead>
			  		<tr>
				       <th>ID</th>
				       <th>NAME</th>
				       <th>USERNAME</th>
				       <th>EMAIL</th>
				       <th>PASSWORD</th>
				       <th>CREATED AT</th>
				       <th>UPDATED AT</th>
				       <th>ACTION</th>
				    </tr>
			  	</thead>
			  	<tbody>
				    @foreach($data_user as $users)
				      <tr>
				         <td>{{ $users->id }}</td>
				         <td>{{ $users->name }}</td>
				         <td>{{ $users->username }}</td>
				         <td>{{ $users->email }}</td>
				         <td>{{ $users->password }}</td>
				         <td>{{ $users->created_at }}</td>
				         <td>{{ $users->updated_at }}</td>
				         <td>
				         	<a href="{{ URL::to('crud/update/'.$users->id) }}">Edit<br>
				         	<a href="{{ URL::to('crud/delete/'.$users->id) }}">Delete
				         </td>
				      </tr>
				    @endforeach
			    </tbody>
			</table>
		</div>
	  <br>
	  <button class="btn btn-default" onclick="location.href='{{ URL::to('crud/create') }}';">Create</button>
	</div>
@stop
