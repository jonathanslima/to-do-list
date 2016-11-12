$(function () {
	$('li').hover(function(){
		$(this).find('.task-edit img').fadeIn('fast').css('display', 'inline-block');
		$(this).find('.task-remove img').fadeIn('fast').css('display', 'inline-block');

		}, function(){
		$(this).find('.task-remove img').fadeOut('fast');
		$(this).find('.task-edit img').fadeOut('fast');
	});

	$('.form-button').bind('click', function(){
		if($('.form-input').val().length < 5){
			$('.erro-msg').show('slow');
			return false;
		}
	});

	$('.form-input').bind('keyup', function(){
		$('.erro-msg').hide('slow');
	});
});