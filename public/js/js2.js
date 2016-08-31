function edit(button,event)
{
	var e = event || window.event;

	e.preventDefault();

	$(button).closest('.tombol').find('.edit').addClass('hidden');
	$(button).closest('.box-user').find('.showing').addClass('hidden');

	$(button).closest('.tombol').find('.save').removeClass('hidden');
	$(button).closest('.box-user').find('.editing').removeClass('hidden');
}
function back(button,event)
{
	var e = event || window.event;

	e.preventDefault();

	$(button).closest('.tombol').find('.save').addClass('hidden');
	$(button).closest('.box-user').find('.editing').addClass('hidden');

	$(button).closest('.tombol').find('.edit').removeClass('hidden');
	$(button).closest('.box-user').find('.showing').removeClass('hidden');
}