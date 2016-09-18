@extends('layouts/web/master')

<?php $title = 'Java Script 7' ?>

@section('style')
@stop

@section('script')
	{{ HTML::script('public/js/js7.js') }}
@stop

@section('content')
<div class="isi">
	<h4>Belajar java script 7 sebelum proses ajax</h4>
	<br>
	<label>Expert programmer Java Script!!!</label>
	<br><br>
	<div class="row">
		<div class="col-md-5">
			<div class="form-group">
				<label>Choose what do you want to edit</label>
				<select class="form-control" name="test_ajax" onchange="lemparKeDataTestAjax(this)">
					<option value=""></option>
					@foreach($content['test_ajaxs'] as $test_ajax)
						<option type="button" value="{{ $test_ajax['id'] }}">{{ $test_ajax['test_ajax'] }}</option>
					@endforeach
				</select>
			</div>
			<button onclick="editContent(this)" data-id-testajax="" data-content-testajax="" type="button">Edit</button>
		</div>
	</div>
</div>
@stop

@section('modal')
	<div class="modal fade" id="test-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="align-center">Header Modal</h4>
				</div>
				<div class="modal-body">
					<label>Edit content test ajax</label>
					<input type="hidden" name="id_testajax" value="">
					<div class="form-group">
						<input type="text" name="content_testajax" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button onclick="updateContentTestAjax(this)" type="button" class="btn btn-success">Save</button>
				</div>
			</div>
		</div>
	</div>
@stop