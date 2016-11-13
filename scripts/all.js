$(function () {
	$('li').hover(function(){
		$(this).find('.task-edit img').fadeIn('fast').css('display', 'inline-block');
		$(this).find('.task-remove img').fadeIn('fast').css('display', 'inline-block');

		}, function(){
		$(this).find('.task-remove img').fadeOut('fast');
		$(this).find('.task-edit img').fadeOut('fast');
	});

	// Validating form
	$('.form-button').bind('click', function(){
		if($('.form-input').val().length < 5){
			$('.erro-msg').show().html('You need to write a msg with more than 5 characters.');
			return false;
		}else if($('.form-input').val().length > 50){
			$('.erro-msg').show().html('You write a msg with more than 50 characters.');
			return false;
		}
	});

	$('.form-input').bind('keyup', function(){
		$('.erro-msg').hide('slow');
	});

	// Counting characters
	$('.form-input').bind('keyup', function(){
		$('.count-char').html($('.form-input').val().length);
		if($('.form-input').val().length < 5){
			$('.form').find('label').css('color', 'red');
		}else if($('.form-input').val().length > 50){
			$('.form').find('label').css('color', 'red');
		}else{
			$('.form').find('label').css('color', '#21e061');
		}
	});

	

	// Show year in footer
	var date = new Date();
	var thisYear = date.getFullYear();

	$('.date').html(thisYear);
});

