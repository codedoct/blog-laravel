function showModal(button)
{
	var modal  = $('#test-modal');
	
	// Show Modal
	modal.modal({backdrop: 'static', keyboard: false});
}

function addTestAjax(button)
{
	var modal = $('#test-modal');
	var test_ajax = modal.find('input[name=test_ajax]').val();

	$.ajax({
		url: '',
		type: 'POST',
		data: {test_ajax: test_ajax},
		beforeSend: function(){
			modal.find('button').prop('disabled', true);
		}
	})
	.done(function(response) {
		if (response['status'] == 'OK') {
			modal.find('button').prop('disabled', false);
			modal.modal('hide');
			$('.isi').html(response['html']);
		};
	});
}