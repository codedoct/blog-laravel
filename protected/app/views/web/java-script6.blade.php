@extends('layouts/web/master')

<?php $title = 'Java Script 6' ?>

@section('style')
@stop

@section('script')
	{{ HTML::script('public/js/js6.js') }}
@stop

@section('content')
<div class="isi">
	<h4>Belajar java script 6 sebelum proses ajax</h4>
	<br>
	<label>Play with Ajax</label>
	<br><br>
	<button onclick="showModal(this)">Add text</button><br><br>
	@if($content['test_ajaxs'])
		@foreach($content['test_ajaxs'] as $test_ajax)
			<label>{{ $test_ajax['test_ajax'] }} </label>
		@endforeach
	@endif
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
					<label>isi modal</label>
					<div class="form-group">
						<input type="text" name="test_ajax" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button onclick="addTestAjax(this)" type="button" class="btn btn-success">Save</button>
				</div>
			</div>
		</div>
	</div>
@stop