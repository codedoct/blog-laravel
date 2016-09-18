<h4>Belajar java script 6 setelah proses ajax</h4>
<br>
<label>Play with Ajax</label>
<br><br>
<button onclick="showModal(this)">Add text</button><br><br>
@if($content['test_ajaxs'])
	@foreach($content['test_ajaxs'] as $test_ajax)
		<label>{{ $test_ajax['test_ajax'] }} </label>
	@endforeach
@endif