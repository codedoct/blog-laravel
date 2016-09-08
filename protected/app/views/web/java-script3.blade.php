@extends('layouts/web/master')

<?php $title = 'Java Script 3' ?>

@section('style')
@stop

@section('script')
	{{ HTML::script('public/js/js3.js') }}
@stop

@section('content')
<div class="isi">
	<h4>Belajar java script 3</h4>
	<br>
	<label>Hide and Show Class With Data JS</label>
	<br><br>
	Example: button follow and unfollow <br><br>
	<button onclick="toggleFollow(this,event)" data-action="follow">Follow</button>
</div>
@stop