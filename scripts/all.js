$(function () {

	var elementEdit 	= '.task-edit img';
	var elementRemove	= '.task-remove img';

	$('.item-task').bind('mouseenter', function () {
		$(elementRemove).fadeIn().css('display', 'inline-block');
		$(elementEdit).fadeIn().css('display', 'inline-block');
	});

	$('.item-task').bind('mouseleave', function () {
		$(elementRemove).fadeOut();
		$(elementEdit).fadeOut();
	});
});