@extends('layouts/web/master')

<?php $title = 'Java Script 4' ?>

@section('style')
@stop

@section('script')
	{{ HTML::script('public/js/js4.js') }}
@stop

@section('content')
<div class="isi">
	<h4>Belajar java script 4</h4>
	<br>
	<label>Checked and Unchecked with prop</label>
	<br><br>
	<input type="checkbox" name="toggle-check" onclick="toggleCheck(this)">
	<br><br>
	<input type="text" name="effect" disabled>	
</div>
@stop