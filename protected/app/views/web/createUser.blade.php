@extends('layouts/web/master')
@section('content')
	<?php $title = "Create User" ?>
	<div class="isi">
		<form method="post" action="">
		<table>
			<tr>
				<td>Name <span class="error"><?php echo $errors->first('name') ?></span></td>
				<td nowrap>:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Username <span class="error"><?php echo $errors->first('username') ?></span></td>
				<td nowrap>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Email <span class="error"><?php echo $errors->first('email') ?></span></td>
				<td nowrap>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password <span class="error"><?php echo $errors->first('password') ?></span></td>
				<td nowrap>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="3">
					<br>
					<input type="submit" class="btn" value="Create">
				</td>
			</tr>
		</table>
		</form>
	</div>
@stop
