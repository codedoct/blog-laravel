function toggleCheck(button)
{
	if ($(button).prop('checked')) {
		$('[name=effect]').prop('disabled', false);
	} else {
		$('[name=effect]').prop('disabled', true);
	}
}