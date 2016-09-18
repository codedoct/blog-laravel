function lemparKeDataTestAjax(button)
{
	var id_data_lempar = $(button).val();
	var content_data_lempar = $(button).find('option:selected').text();

	//lempar ke
	$('.isi').find('button').data('id-testajax', id_data_lempar);
	$('.isi').find('button').data('content-testajax', content_data_lempar);
}

function editContent(button)
{
	var modal  = $('#test-modal');
	var id_test_ajax = $(button).data('id-testajax');
	var content_test_ajax = $(button).data('content-testajax');

	// Show Modal
	if (id_test_ajax == '') {
		alert('Please choose content that will edit');
	} else {
		modal.modal({backdrop: 'static', keyboard: false});
		modal.find('input[name=id_testajax]').val(id_test_ajax);
		modal.find('input[name=content_testajax]').val(content_test_ajax);
	}
}

function updateContentTestAjax(button)
{
	var modal = $('#test-modal');
	var content_test_ajax = modal.find('input[name=content_testajax]').val();
	var id_test_ajax = modal.find('input[name=id_testajax]').val();

	$.ajax({
		url: '',
		type: 'POST',
		data: {
			id_testajax: id_test_ajax,
			content_testajax: content_test_ajax
		},
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