@extends('layouts/web/master')

<?php $title = "Login" ?>

@section('script')
@stop

@section('content')
<div class="isi">
	<div class="login">
		<h4>Login</h4><br>
		<div class="form-login">
			<form action="" method="POST">
				<div class="form-group">
		            <label class="sr-only" for="username">Username</label>
		            <div class="form-group has-feedback">
			            <input type="email" class="form-control" placeholder="Masukan Email" name="email"/>
			            <span class="glyphicon glyphicon-user form-control-feedback"></span>
			        </div>
		        </div>
		        <div class="form-group">
		            <label class="sr-only" for="password">Password</label>
		            <div class="form-group has-feedback">
			            <input type="password" class="form-control" placeholder="Masukan Password" name="password"/>
			            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			        </div>
		        </div>
		        <div class="form-group">
		            <button type="submit" class="btn btn-block btn-success">Login</button>
		        </div>
			</form>
		</div>
	</div>
</div>
@stop