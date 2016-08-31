@extends('layouts/web/master')

<?php $title = 'Java Script 2' ?>

@section('style')
	{{ HTML::style('public/css/content/belajar_js/js2.css') }}
@stop

@section('script')
	{{ HTML::script('public/js/js2.js') }}
@stop

@section('content')
<div class="isi">
	<h4>Belajar java script 2</h4>
	<br>
	<label>Hide and Show Class</label>
	<br><br>
	<div class="user-list">
		@if($content['users'])
			@foreach($content['users'] as $user)
				{{ Form::open(array('url' => 'crud/update/'.$user['id'])) }}
				<div class="box-user">
					<table>
						<tbody class="showing">
							<tr>
								<td>Name</td><td>:</td><td>{{ $user['name'] }}</td>
							</tr>
							<tr>
								<td>Username</td><td>:</td><td>{{ $user['username'] }}</td>
							</tr>
							<tr>
								<td>Email</td><td>:</td><td>{{ $user['email'] }}</td>
							</tr>
						</tbody>
						<tbody class="editing hidden">
							<tr>
								<td>Name</td><td>:</td><td><input type="text" name="name" value="{{ $user['name'] }}"></td>
							</tr>
							<tr>
								<td>Username</td><td>:</td><td><input type="text" name="username" value="{{ $user['username'] }}"></td>
							</tr>
							<tr>
								<td>Email</td><td>:</td><td><input type="text" name="email" value="{{ $user['email'] }}"></td>
							</tr>
						</tbody>
					</table>
					<div class="tombol">
						<div class="edit">
							<button type="button" onclick="edit(this, event)">Edit</button>
						</div>
						<div class="save hidden">
							<button type="button" onclick="back(this, event)">Return</button>
							<input type="submit" class="btn" value="Save">
						</div>
					</div>
				</div>
				{{ Form::close() }}
			@endforeach
		@else
			<label>Data user empty ...</label>
		@endif
	</div>
</div>
@stop