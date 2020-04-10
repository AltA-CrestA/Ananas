$('.open_fast').click(function () {
	$('.popup_fast').fadeIn().css({ 'top': $(window).scrollTop() + 100 }).addClass('active');
	$('.bg_popup').fadeIn();


	$('.bg_popup, .js-close-button').click(function () {
		$('.popup_fast').fadeOut().removeClass('active');
		$('.bg_popup').fadeOut();
	});
});

$(window).scroll(function () {
	$('.popup_fast').css({ 'top': $(window).scrollTop() + 100 })
}).scroll();

$(document).ready(function () {
	$('#signup-checkbox').click(function () {
		$('#signup-botton').prop("disabled", !$("#signup-checkbox").prop("checked"));
	})
});

$('#myCheckbox').click(function () {
	$('#myButton').prop("disabled", !$("#myCheckbox").prop("checked"));
});
