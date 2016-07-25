@extends('layouts/web/master')
@section('content')
	<?php $title = "Update User" ?>
	<div class="isi">
		<form method="post" action="">
		<table>
			<tr>
				<td>Name</td>
				<td nowrap>:</td>
				<td><input type="text" name="name" value="{{ $data_user['name'] }}"><span style="color:red"><?php echo $errors->first('name') ?></td>
			</tr>
			<tr>
				<td>Username</td>
				<td nowrap>:</td>
				<td><input type="text" name="username" value="{{ $data_user['username'] }}"><span style="color:red"><?php echo $errors->first('username') ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td nowrap>:</td>
				<td><input type="text" name="email" value="{{ $data_user['email'] }}"><span style="color:red"><?php echo $errors->first('email') ?></span></td>
			</tr>
			<tr>
				<td colspan="3">
					<br>
					<input type="submit" class="btn" value="Save">
				</td>
			</tr>
		</table>
		</form>
	</div>
@stop
