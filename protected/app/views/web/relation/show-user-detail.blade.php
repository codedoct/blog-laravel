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
				    </tr>
			  	</thead>
			  	<tbody>
				    <tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->username }}</td>
						<td>{{ $user->email }}</td>
				    </tr>
			    </tbody>
			</table>
			<br>
			<table class="table table-bordered table-hover">
			  	<thead>
			  		<tr>
						<th>Nama alamat</th>
						<th>Kota</th>
						<th>Provinsi</th>
						<th>Alamat</th>
						<th>Zipcode</th>
						<th>Phone</th>
				    </tr>
			  	</thead>
			  	<tbody>
			  		@forelse($user['addresses'] as $address)
					    <tr>
							<td>{{ $address->name_address }}</td>
							<td>{{ $address->city }}</td>
							<td>{{ $address->province }}</td>
							<td>{{ $address->address }}</td>
							<td>{{ $address->zipcode }}</td>
							<td>{{ $address->phone }}</td>
					    </tr>
			    	@empty
			    		Address not found
			    	@endforelse
			    </tbody>
			</table>
		</div>
	  <br>
	  <button class="btn btn-default" type="button">Create</button>
	</div>
@stop
