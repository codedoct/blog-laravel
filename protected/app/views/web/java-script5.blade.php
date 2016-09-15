@extends('layouts/web/master')

<?php $title = 'Java Script 5' ?>

@section('style')
@stop

@section('script')
	{{ HTML::script('public/js/js5.js') }}
@stop

@section('content')
<div class="isi">
	<h4>Belajar java script 5</h4>
	<br>
	<label>Show and Hide Modal</label>
	<br><br>
	<button onclick="showModal(this)">Show Modal</button>
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
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success">Save</button>
				</div>
			</div>
		</div>
	</div>
@stop