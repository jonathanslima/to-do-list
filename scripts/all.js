$(function () {

	var elementEdit		= '.task-edit img';
	var elementRemove	= '.task-remove img';

	$('.item-task li').bind('mouseenter', function () {
		$(this).find(elementEdit).fadeIn().css('display', 'inline-block');
		$(this).find(elementRemove).fadeIn().css('display', 'inline-block');
	});

	$('.item-task li').bind('mouseleave', function () {
		$(this).find(elementRemove).fadeOut();
		$(this).find(elementEdit).fadeOut();
	});
});