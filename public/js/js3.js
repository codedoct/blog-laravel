function toggleFollow(button, event)
{
	var e = event || window.event;

	e.preventDefault();

	var action = $(button).attr('data-action');

	if (action == 'follow') {
		action_new = 'unfollow';
		$(button).html('Unfollow');
	} else if (action == 'unfollow'){
		action_new = 'follow';
		$(button).html('Follow');
	}
	$(button).attr('data-action', action_new);
}