// Pre load
$(window).on('load', function () {
    $preloader = $('.preloader'),
      $loader = $preloader.find('.prePreloader');
    $loader.fadeOut(700);
    $preloader.delay(700).fadeOut('slow');
  });


// Бургер
$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger,.header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
});

// Таб 
$(".tabs__block").not(":first").hide();
$(".vigoda__tabs .tabs__item").click(function() {
	$(".vigoda__tabs .tabs__item").removeClass("active").eq($(this).index()).addClass("active");
	$(".tabs__block").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active");

// Цвет кнопки закладок + изменение содержимого в КАТАЛОГЕ
$('.product__button').click(function(){
	$(this).toggleClass('change')
});

$('.product__button').click(function(){
	if (!$(this).data('status')) {
	  $(this).html('<i class="fas fa-star"></i>&nbsp;Добавлено');
	  $(this).data('status', true);
	}
	else {
	  $(this).html('<i class="far fa-star"></i>&nbsp;Добавить в закладки');
	  $(this).data('status', false);
	}
  });

// Цвет кнопки закладок + изменение содержимого в МОИ ЗАКЛАДКИ
  $('.product__button1').click(function(){
	$(this).toggleClass('change')
});

$('.product__button1').click(function(){
	if (!$(this).data('status')) {
	  $(this).html('<i class="far fa-star"></i>&nbsp;Удалено');
	  $(this).data('status', true);
	}
	else {
	  $(this).html('<i class="fas fa-star"></i>&nbsp;В закладках');
	  $(this).data('status', false);
	}
  });

// Фильтр и корзина
$(function() {

    "use strict";
    $('.title__box').click(function(){
        $(this).toggleClass('open');
        $(this).next('.list__link').toggleClass('open');
	});
	
	$('#buttonFilterMini, .title__box-mini').click(function() {
		$('.filter__box-mini').toggleClass('open');
		$('body').toggleClass('lock');
    });
});

// Количество товаров в корзине
$('#num1').on('keyup', function() {
	$("#res1").text($(this).val());
})

$('#num2').on('keyup', function() {
	$("#res2").text($(this).val());
})

$('#num3').on('keyup', function() {
	$("#res3").text($(this).val());
})

$('#num4').on('keyup', function() {
	$("#res4").text($(this).val());
})

// Цвет кнопок в фильтре РАЗМЕРЫ
$('.button-size').click(function(){
	$(this).toggleClass('active');
});

// singup
$(document).ready(function () {
	$('#signup-checkbox').click(function () {
		$('#signup-botton').prop("disabled", !$("#signup-checkbox").prop("checked"));
	})

	let checkbox = document.querySelector('#signup-checkbox');
	let button = document.querySelector('#signup-botton');

	checkbox.onclick = function () {
		button.classList.toggle('yes-neon');
		button.classList.toggle('no-neon');
};
});

// svg
(function () {

	function init(one) {
		var speed = 330,
			easing = mina.backout;

		[].slice.call(document.querySelectorAll('#grid > a')).forEach(function (el) {
			var s = Snap(el.querySelector('svg')), path = s.select('path'),
				pathConfig = {
					from: path.attr('d'),
					to: el.getAttribute('data-path-hover')
				};

			el.addEventListener('mouseenter', function () {
				path.animate({ 'path': pathConfig.to }, speed, easing);
			});

			el.addEventListener('mouseleave', function () {
				path.animate({ 'path': pathConfig.from }, speed, easing);
			});
		});
	}

	init();

})();

// что то 
(function() {
	
	function init() {
		var speed = 330,
			easing = mina.backout;

		[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
			var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
				pathConfig = {
					from : path.attr( 'd' ),
					to : el.getAttribute( 'data-path-hover' )
				};

			el.addEventListener( 'mouseenter', function() {
				path.animate( { 'path' : pathConfig.to }, speed, easing );
			} );

			el.addEventListener( 'mouseleave', function() {
				path.animate( { 'path' : pathConfig.from }, speed, easing );
			} );
		} );
	}

	init();

})();

// Еще что то
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