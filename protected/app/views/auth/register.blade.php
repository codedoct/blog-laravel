@extends('layouts/web/master')

<?php $title = "Register" ?>

@section('script')
@stop

@section('content')
<div class="isi">
	<div class="login">
		<h4>Register</h4><br>
		<div class="form-login">
			<form action="" method="POST">
				<div class="form-group">
		            <label class="sr-only" for="fullname">Fullname</label>
		            <div class="form-group has-feedback">
			            <input type="text" class="form-control" placeholder="Masukan Fullname" name="fullname"/>
			        </div>
		        </div>
		        <div class="form-group">
		            <label class="sr-only" for="email">Username</label>
		            <div class="form-group has-feedback">
			            <input type="text" class="form-control" placeholder="Masukan Username" name="username"/>
			        </div>
		        </div>
				<div class="form-group">
		            <label class="sr-only" for="email">Email</label>
		            <div class="form-group has-feedback">
			            <input type="email" class="form-control" placeholder="Masukan Email" name="email"/>
			        </div>
		        </div>
		        <div class="form-group">
		            <label class="sr-only" for="password">Password</label>
		            <div class="form-group has-feedback">
			            <input type="password" class="form-control" placeholder="Masukan Password" name="password"/>
			        </div>
		        </div>
		        <div class="form-group">
		            <button type="submit" class="btn btn-block btn-success">Register</button>
		        </div>
			</form>
		</div>
	</div>
</div>
@stop