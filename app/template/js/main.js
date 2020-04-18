// Pre load
$(window).on('load', function () {
  ($preloader = $('.preloader')), ($loader = $preloader.find('.prePreloader'));
  $loader.fadeOut();
  $preloader.delay(200).fadeOut('slow');
});

// Бургер
$(document).ready(function () {
  $('.header__burger').click(function (event) {
    $('.header__burger,.header__menu').toggleClass('active');
    $('body').toggleClass('lock');
  });
});

// Таб
$('.tabs__block').not(':first').hide();
$('.vigoda__tabs .tabs__item')
  .click(function () {
    $('.vigoda__tabs .tabs__item')
      .removeClass('active')
      .eq($(this).index())
      .addClass('active');
    $('.tabs__block').hide().eq($(this).index()).fadeIn();
  })
  .eq(0)
  .addClass('active');

// Цвет кнопки закладок + изменение содержимого в КАТАЛОГЕ
$('.product__button').click(function () {
  $(this).toggleClass('change');
});

$('.product__button').click(function () {
  if (!$(this).data('status')) {
    $(this).html('<i class="fas fa-star"></i>&nbsp;Добавлено');
    $(this).data('status', true);
  } else {
    $(this).html('<i class="far fa-star"></i>&nbsp;Добавить в закладки');
    $(this).data('status', false);
  }
});

// Цвет кнопки закладок + изменение содержимого в МОИ ЗАКЛАДКИ
$('.product__button1').click(function () {
  $(this).toggleClass('change');
});

$('.product__button1').click(function () {
  if (!$(this).data('status')) {
    $(this).html('<i class="far fa-star"></i>&nbsp;Удалено');
    $(this).data('status', true);
  } else {
    $(this).html('<i class="fas fa-star"></i>&nbsp;В закладках');
    $(this).data('status', false);
  }
});

// Фильтр и корзина
$(function () {
  'use strict';
  $('.title__box').click(function () {
    $(this).toggleClass('open');
    $(this).next('.list__link').toggleClass('open');
  });

  $('#buttonFilterMini, .title__box-mini').click(function () {
    $('.filter__box-mini').toggleClass('open');
    $('body').toggleClass('lock');
  });
});

// Цвет кнопок в фильтре РАЗМЕРЫ
$('.button-size').click(function () {
  $(this).toggleClass('active');
});

// singup
$(document).ready(function () {
  $('#signup-checkbox').click(function () {
    $('#signup-botton').prop(
      'disabled',
      !$('#signup-checkbox').prop('checked')
    );
  });

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

    [].slice
      .call(document.querySelectorAll('#grid > a'))
      .forEach(function (el) {
        var s = Snap(el.querySelector('svg')),
          path = s.select('path'),
          pathConfig = {
            from: path.attr('d'),
            to: el.getAttribute('data-path-hover'),
          };

        el.addEventListener('mouseenter', function () {
          path.animate({ path: pathConfig.to }, speed, easing);
        });

        el.addEventListener('mouseleave', function () {
          path.animate({ path: pathConfig.from }, speed, easing);
        });
      });
  }

  init();
})();

// что то
(function () {
  function init() {
    var speed = 330,
      easing = mina.backout;

    [].slice
      .call(document.querySelectorAll('#grid > a'))
      .forEach(function (el) {
        var s = Snap(el.querySelector('svg')),
          path = s.select('path'),
          pathConfig = {
            from: path.attr('d'),
            to: el.getAttribute('data-path-hover'),
          };

        el.addEventListener('mouseenter', function () {
          path.animate({ path: pathConfig.to }, speed, easing);
        });

        el.addEventListener('mouseleave', function () {
          path.animate({ path: pathConfig.from }, speed, easing);
        });
      });
  }

  init();
})();

// Еще что то
$('.open_fast').click(function () {
  $('.popup_fast')
    .fadeIn()
    .css({ top: $(window).scrollTop() + 100 })
    .addClass('active');
  $('.bg_popup').fadeIn();

  $('.bg_popup, .js-close-button').click(function () {
    $('.popup_fast').fadeOut().removeClass('active');
    $('.bg_popup').fadeOut();
  });
});

$(window)
  .scroll(function () {
    $('.popup_fast').css({ top: $(window).scrollTop() + 100 });
  })
  .scroll();

$(document).ready(function () {
  $('#signup-checkbox').click(function () {
    $('#signup-botton').prop(
      'disabled',
      !$('#signup-checkbox').prop('checked')
    );
  });
});

$('#myCheckbox').click(function () {
  $('#myButton').prop('disabled', !$('#myCheckbox').prop('checked'));
});

// Кнопка купить при нажатии

var buttons = document.getElementsByClassName('st__button'),
  forEach = Array.prototype.forEach;

forEach.call(buttons, function (b) {
  b.addEventListener('click', addElement);
});

function addElement(e) {
  var addDiv = document.createElement('div'),
    mValue = Math.max(this.clientWidth, this.clientHeight),
    rect = this.getBoundingClientRect();
  (sDiv = addDiv.style), (px = 'px');

  sDiv.width = sDiv.height = mValue + px;
  sDiv.left = e.clientX - rect.left - mValue / 2 + px;
  sDiv.top = e.clientY - rect.top - mValue / 2 + px;

  addDiv.classList.add('pulse');
  this.appendChild(addDiv);
}

// Кнопка up

var btn = $('.button__up');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});

// Форма input для телефона в регистрации

class PhoneField {
  /***
        handler = the DOM object
        mask = any preferrable phone mask
        placeholder = character used to fill the space when char is deleted
        start = the position of the first num character user can enter
    ***/

  constructor(handler, mask = '+7 ( ___ ) ___ - ____', placeholder = '_') {
    this.handler = handler;
    this.mask = mask;
    this.placeholder = placeholder;

    //set the length
    this.setLength();

    //set value to placeholder
    this.setValue();

    //check where is the first enerable character index
    this.start = this.placeHolderPosition() - 1;

    //focused - move carette to the first placeholder
    this.handler.addEventListener('focusin', () => {
      this.focused();
    });

    //keydown - check key/remove placeholder/push numbers further or do nothing
    this.handler.addEventListener('keydown', (e) => {
      this.input(e);
    });
  }

  focused() {
    let placeholderPos = this.placeHolderPosition();
    this.handler.selectionStart = placeholderPos;
    this.handler.selectionEnd = placeholderPos;
  }

  input(e) {
    //unless it is a tab, prevent action
    if (!this.isDirectionKey(e.key)) {
      e.preventDefault();
    }

    //if integer, enter it
    if (this.isNum(e.key)) {
      this.changeChar(e.key);
    } else if (this.isDeletionKey(e.key)) {
      //if user deletes, delete a number
      if (e.key === 'Backspace') {
        let index = this.start;
        let dir = -1;
        this.changeChar(this.placeholder, dir, index);
      } else {
        this.changeChar(this.placeholder);
      }
    }
  }

  //put max length to the length of the mask
  setLength() {
    this.handler.maxLength = this.mask.length;
  }

  //set initial value
  setValue() {
    this.handler.value = this.mask;
  }

  //check if input is number
  isNum(i) {
    return !isNaN(i) && parseInt(Number(i)) == i && !isNaN(parseInt(i, 10));
  }

  //check if it is a button to delete stuff
  isDeletionKey(i) {
    return i === 'Delete' || i === 'Backspace';
  }

  //check if direction arrow
  isDirectionKey(i) {
    return (
      i === 'ArrowUp' ||
      i === 'ArrowDown' ||
      i === 'ArrowRight' ||
      i === 'ArrowLeft' ||
      i === 'Tab'
    );
  }

  //check if value is placeholder
  isPlaceholder(i) {
    return i == this.placeholder;
  }

  //check index of closest placeholder
  placeHolderPosition() {
    return this.handler.value.indexOf(this.placeholder);
  }

  changeChar(i, dir = 1, max = this.mask.length) {
    let val = this.handler.value;
    let pos;

    /**
     *  if direction is forward, character to be changed is before the caret
     *  else it is behind, so we move position one char back
     */
    dir > 0
      ? (pos = this.handler.selectionStart)
      : (pos = this.handler.selectionStart - 1);

    let newVal = '';

    //if cursor at end, do nothing
    if (pos === max) {
      return false;
    }

    /**check if char to be replaced is placeholder or number    
        if it is placeholder, change it, if it is number
        push it, if it is neither, move cursor
        **/
    if (!this.isNum(val[pos]) && !this.isPlaceholder(val[pos])) {
      do {
        pos += dir;
        //if cursor at end, do nothing
        if (pos === max) {
          return false;
        }
      } while (!this.isNum(val[pos]) && !this.isPlaceholder(val[pos]));
    }

    //replace char at index
    newVal = this.replaceAt(val, pos, i);

    //update the value in the field
    this.handler.value = newVal;

    //move the caret if direction is forward
    if (dir > 0) pos += dir;

    this.handler.selectionStart = pos;
    this.handler.selectionEnd = pos;
  }

  replaceAt(str, pos, val) {
    return str.substring(0, pos) + val + str.substring(++pos);
  }
}

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  let field = document.getElementsByClassName('masked-phone');
  let phones = [];

  for (let x = 0; x < field.length; x++) {
    phones.push(
      new PhoneField(
        field[x],
        field[x].dataset.phonemask,
        field[x].dataset.placeholder
      )
    );
  }
});
