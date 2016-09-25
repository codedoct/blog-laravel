<h4>Belajar java script 7 setelah proses ajax</h4>
<br>
<label>Expert programmer Java Script!!!</label>
<br><br>
<div class="clearfix">
	<div class="form-group">
		<label>Choose what do you want to edit</label>
		<select class="form-control" name="test_ajax" onchange="lemparKeDataTestAjax(this)">
			<option value=""></option>
			@foreach($content['test_ajaxs'] as $test_ajax)
				<option type="button" value="{{ $test_ajax['id'] }}">{{ $test_ajax['test_ajax'] }}</option>
			@endforeach
		</select>
	</div>
	<button class="btn btn-primary" onclick="editContent(this)" data-id-testajax="" data-content-testajax="" type="button">Edit</button>
</div>