(function ($) {
	/*jQuery.fn.liQuotes = function(options){
        return this.each(function(){
            htmlreplace($(this));
            function htmlreplace(element){
                if (!element) element = document.body;
                var nodes = $(element).contents().each(function () {
                    if (this.nodeType == Node.TEXT_NODE) {
                        var result = $(this).text().replace(/\x27/g, '\x22').replace(/(\w)\x22(\w)/g, '$1\x27$2').replace(/(^)\x22(\s)/g, '$1&raquo;$2').replace(/(^|\s|\()"/g, "$1&laquo;").replace(/"(\;|\!|\?|\:|\.|\,|$|\)|\s)/g, "&raquo;$1")
                        $(this).after(result).remove();
                    } else {
                        htmlreplace(this);
                    };
                });
            };
        });
    };
	  $(document).ready(function () {
          $('#content').liQuotes();
    });*/
	
    jQuery.fn.lightTabs = function (options) {

        var createTabs = function () {
            tabs = this;
            i = 0;

            showPage = function (i) {
                $(tabs).children("div").children("div").hide();
                $(tabs).children("div").children("div").eq(i).show();
                $(tabs).children("ul").children("li:not(.away)").removeClass("active");
                $(tabs).children("ul").children("li:not(.away)").eq(i).addClass("active");
            };

            $(tabs).children("ul").children("li:not(.away)").each(function (index, element) {
                $(element).attr("data-page", i);
                i++;
            });
		
		/*	var wd = Math.round(100/i);
		//	alert(i);	
$(tabs).children("ul:not(.left-vkladka)").children("li").each(function (index, element) {
 $(element).css('width',wd+'%');
});*/
			

            $(tabs).children("ul").children("li:not(.away)").click(function () {
                showPage(parseInt($(this).attr("data-page")));
				 setTimeout(function () { window.scrollTo(0, 0); }, 1);
            });
            
            var tabNo = 0;
            if(location.hash)
                tabNo = parseInt($(tabs).find('ul li'+location.hash).attr('data-page'));
                        
            showPage(tabNo);
        };
        return this.each(createTabs);
    };

    $(document).ready(function () {
		 setTimeout(function () { window.scrollTo(0, 0); }, 1);
        $(".tabs").lightTabs();
    });
	
	$(document).ready(function(){
 $('.spoiler_links').click(function(){
  $(this).parent().children('div.spoiler_body').toggle('normal');
  return false;
 });
});
	
	/********************************************************/
	/*$(document).ready(function() {
			
	var link;

$('#wrappep').on('click', 'a', function (event) {
	$link = $(this).attr('id');
alert($link);
});
	
	});*/
	
	
	/**************************************************************************/
	
	
	
	$(document).ready(function() {
		
		
		$(".owl-carousel.best7").owlCarousel({
	
	  loop:false, //Зацикливаем слайдер
                margin:15,
                nav:false, //Отключение навигации
                autoplay:true, //Автозапуск слайдера
                smartSpeed:1000, //Время движения слайда
                autoplayTimeout:5000, //Время смены слайда
				dots:false,
                responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
	
});
		
		
		$(".owl-carousel.studrada-carousel").owlCarousel({
	 
	  loop:true,
	  //  responsiveClass:true,
    margin:20,
    nav:false,
	pag:true,
	autoplay:true,
	autoplayHoverPause:true,
	//navigation:true,
//pagination:true,
	paginationNumbers: true,
    responsive:{
        0:{
            items:1,
			 nav:true
        },
        600:{
            items:1,
			 nav:true
        },
        1000:{
            items:2,
			 nav:false
        }
    }
});
		
		  $(".owl-carousel.ipo").owlCarousel({
	 
	  loop:true,
	  //  responsiveClass:true,
    margin:0,
    nav:false,
	pag:false,
	//navigation:true,
//pagination:true,
	paginationNumbers: true,
    responsive:{
        0:{
            items:1,
			 nav:true
        },
        600:{
            items:1,
			 nav:true
        },
        1000:{
            items:1,
			 nav:false
        }
    }
});

 $(".owl-carousel.main").owlCarousel({
	
	  loop:true, //Зацикливаем слайдер
                margin:20, //Отступ от элемента справа в 50px
                nav:false, //Отключение навигации
                autoplay:true, //Автозапуск слайдера
                smartSpeed:1000, //Время движения слайда
                autoplayTimeout:5000, //Время смены слайда
				dots:false,
              /*  responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:5
                    }
                }*/
	
});


$(".owl-carousel.banner").owlCarousel({
	
	  loop:true, //Зацикливаем слайдер
                margin:15, //Отступ от элемента справа в 50px
                nav:false, //Отключение навигации
                autoplay:false, //Автозапуск слайдера
                smartSpeed:1000, //Время движения слайда
                autoplayTimeout:5000, //Время смены слайда
				dots:false,
                responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:6
                    }
                }
	
});


$(".owl-carousel.afisha").owlCarousel({
	
	  loop:true, //Зацикливаем слайдер
                margin:15, //Отступ от элемента справа в 50px
                nav:false, //Отключение навигации
                autoplay:false, //Автозапуск слайдера
                smartSpeed:1000, //Время движения слайда
                autoplayTimeout:5000, //Время смены слайда
				dots:true,
                responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
	
});

$(".owl-carousel.abit-podii").owlCarousel({
	
	  loop:true, //Зацикливаем слайдер
                margin:15, //Отступ от элемента справа в 50px
                nav:true, //Отключение навигации
                autoplay:false, //Автозапуск слайдера
                smartSpeed:1000, //Время движения слайда
                autoplayTimeout:8000, //Время смены слайда
				dots:false,
				mouseDrag:true,
				useMouseWheel: false,
                responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
	
});
/*$(".owl-carousel.abit-news").owlCarousel({
    
      loop:true, //Зацикливаем слайдер
                margin:15, //Отступ от элемента справа в 50px
                nav:true, //Отключение навигации
                autoplay:false, //Автозапуск слайдера
                smartSpeed:1000, //Время движения слайда
                autoplayTimeout:8000, //Время смены слайда
                dots:false,
                mouseDrag:true,
                useMouseWheel: false,
                responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:4
                    }
                }
    
});*/

$(".owl-carousel.abit-news").owlCarousel({
    
      loop: true,
  autoplay: true,
  items:3,
  nav: true,
  autoplayHoverPause: true,
  animateOut: 'slideOutUp',
  animateIn: 'slideInUp'
});

$('.bxslider').bxSlider({
 pager: false, // отключаем индикатор количества слайдов
  nextText: '', // отключаем текст кнопки Next
  prevText: '', // отключаем текст кнопки Prev
  mode: 'vertical',
   minSlides: 15,
  maxSlides: 15,
  touchEnabled: true,
oneToOneTouch: true,
startSlide: 1
});

 $(".owl-carousel.abit-banner").owlCarousel({
     
      loop:true,
      //  responsiveClass:true,
    margin:20,
    nav:false,
    pag:false,
    //navigation:true,
//pagination:true,
    paginationNumbers: false,
    autoplay:true,
    autoplayTimeout:8500,
      dots: false,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
             nav:true
        },
        600:{
            items:1,
             nav:true
        },
        1000:{
            items:1,
             nav:false
        }
    }
});




  


		
  $(".owl-carousel").owlCarousel({
	 
	  loop:true,
	  //  responsiveClass:true,
    margin:20,
    nav:false,
	pag:false,
	 dots: true,
	 
	  dotsContainer: '.slider-nav .thumbs',
	 /* autoplay:true,
	  autoplayTimeout:9000,
	  autoplayHoverPause:true,*/
	//navigation:true,
//pagination:true,
	paginationNumbers: true,
	video:true,
	lazyLoad:true,
        center:true,
		videoWidth: 450, // Default false; Type: Boolean/Number
videoHeight: 350,
    responsive:{
        0:{
            items:1,
			 nav:true
        },
        600:{
            items:1,
			 nav:true
        },
        1000:{
            items:1,
			 nav:false
        }
    }
});


/*var owl = $(".owl-carousel.abit-podii");

owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
    owl.trigger('next.owl');
    }else {
              owl.trigger('prev.owl');
          }
    e.preventDefault();
});
	
  
 var owl = $('.owl-carousel:not(.ipo)');
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});*/
})


/*шрифт*/
jQuery.fn.flowtype = function(options) {

// Establish default settings/variables
// ====================================
      var settings = $.extend({
         maximum   : 9999,
         minimum   : 1,
         maxFont   : 9999,
         minFont   : 14,
         fontRatio : 35
      }, options),

// Do the magic math
// =================
      changes = function(el) {
         var $el = $(el),
            elw = $el.width(),
            width = elw > settings.maximum ? settings.maximum : elw < settings.minimum ? settings.minimum : elw,
            fontBase = width / settings.fontRatio,
            fontSize = fontBase > settings.maxFont ? settings.maxFont : fontBase < settings.minFont ? settings.minFont : fontBase;
           
         $el.css('font-size', fontSize + 'px');
      };

// Make the magic visible
// ======================
      return this.each(function() {
      // Context for resize callback
         var that = this;
      // Make changes upon resize
         $(window).resize(function(){changes(that);});
      // Set changes on load
         changes(this);
      });
   };
   
   
 
   
$(document).ready(function() {
  $('.owl-carousel:not(.ipo) .owl-item p:first-child').flowtype();
})

$(document).ready(function() {
  $('.owl-carousel.afisha .owl-item span.title-podii a').flowtype();
})

/*$(document).ready(function() {
  $('.owl-carousel.ipo .owl-item h2').flowtype();
})*/


 var location = window.location.href;
    var cur_url = '/' + location.split('/').pop();
 
    $('.menu li').each(function () {
        var link = $(this).find('a').attr('href');
 
        if (cur_url == link)
        {
            $(this).addClass('current');
        }
    });


})(jQuery);

// ==== Калькулятор Конкурсного бала - Начало ====
(function ($) {
    $(document).ready(function() {

        var button = document.getElementById('cmpscr-btn');
        
        // Если такой кнопки нет, значит мы вообще не на странице с калькулятором.
        if (!button) return;

        var resultBox = document.getElementById('cmpscr-res');
        var p1Input = document.getElementById('cmpscr-p1');
        var p2Input = document.getElementById('cmpscr-p2');
        var p3Input = document.getElementById('cmpscr-p3');
        var aInput = document.getElementById('cmpscr-a');
        var gkSelect = document.getElementById('cmpscr-gk');
        var skCheckbox = document.getElementById('cmpscr-sk');

        var specErr = document.getElementById('cmpscr-err-spec');

        var resultMessage = 'Ваш конкурсний бал при вступі до ДонНТУ за обраною спеціальністю:';

        var lastSelectedUkm = null;
		var lastSelectedOb = null;
        var lastSelectedV1 = null;
        var lastSelectedV2 = null;
		var lastSelectedV3 = null;
		var lastSelectedV4 = null;
			var lastSelectedV5 = null;
		var lastSelectedV6 = null;

        function reset(resetOb, resetV, resetUkm) {
            // p1Input.value = '';
            // p2Input.value = '';
            // p3Input.value = '';
            // skCheckbox.checked = false;
            gkSelect.selectedIndex = 0;
            // aInput.value = '';
			if (resetUkm) p1Input.value = '';
            if (resetOb) p2Input.value = '';
            if (resetV) p3Input.value = '';
            resultBox.style.display = 'none';
        };

        // ==== Обработка для страницы с выбором специальности ====
        $('#cmpscr-spec').on('change', function () {
            var specId = this.value;
			var newUkm = __competitionScore__data__[specId].ukm;
            var newOb = __competitionScore__data__[specId].ob;
			//alert(newOb);
            var newV1 = __competitionScore__data__[specId].v1;
            var newV2 = __competitionScore__data__[specId].v2;
			var newV3 = __competitionScore__data__[specId].v3;
			var newV4 = __competitionScore__data__[specId].v4;
			var newV5 = __competitionScore__data__[specId].v5;
			var newV6 = __competitionScore__data__[specId].v6;
            // Нельзя выбрать вариант -1, поэтому событие сработает гарантированно
            // при выборе настоящей специальности.
			
			$('#cmpscr-p1-title').text(newUkm);
            $('#cmpscr-p2-title').text(newOb);
            $('#cmpscr-p3-title').text(newV1 + '  ' + newV2+ '  ' + newV3+ '  ' + newV4+ '  ' + newV5+ '  ' + newV6);
            __competitionScore__op__ = __competitionScore__data__[specId].op;
			 __competitionScore__op1__ = __competitionScore__data__[specId].op1;
			__competitionScore__np__= __competitionScore__data__[specId].np;
			
				var np=__competitionScore__np__;
			//alert(np);
			 if (np == true) {
                  document.getElementById('ms').style.display = 'block';
					//alert(np);
                   
                } else {
                  document.getElementById('ms').style.display = 'none';
					//alert("1");
                }

            // Если была ошибка о невыбранности специальности, убираем ее.
            document.getElementById('cmpscr-err-spec').style.display = 'none';
 var doResetUkm = newUkm != lastSelectedUkm;
            var doResetOb = newOb != lastSelectedOb;
            var doResetV = newV1 != lastSelectedV1 || newV2 != lastSelectedV2 || newV3 != lastSelectedV3||newV4 != lastSelectedV4||newV5 != lastSelectedV5||newV6 != lastSelectedV6;
            reset(doResetOb, doResetV, doResetUkm);

             lastSelectedUkm = newUkm;
			lastSelectedOb = newOb;
            lastSelectedV1 = newV1;
            lastSelectedV2 = newV2;
			lastSelectedV3 = newV3;
			lastSelectedV4 = newV4;
			lastSelectedV5 = newV5;
			lastSelectedV6 = newV6;
        });

        // ==== Обработка для обоих страниц с формой ====

        // Приватная функция, переводит бал из 12-бальной системы в 100-бальную.
        // score: float в диапазоне [1;12]
        // return int
        function score12to100(score) {
            if (score >= 1 && score < 2) return 100;
            return 100 + score * 10 - 20;
        }

        function setPInputErrorChecker(input, errorElId) {
            input.addEventListener('change', function () {
                var number = parseInt(this.value);
                if (/^[1-2][0-9]{2,}$/.test(this.value) &&
                    number >= 100 && number <= 200) {
                    this.cmpscrError = false;
                    this.removeAttribute('data-error');
                    document.getElementById(errorElId).style.display = 'none';
                } else {
                    this.cmpscrError = true;
                    this.setAttribute('data-error', '');
                    document.getElementById(errorElId).style.display = '';
                }
            });
        };

        setPInputErrorChecker(p1Input, 'cmpscr-err-p1');
        setPInputErrorChecker(p2Input, 'cmpscr-err-p2');
        setPInputErrorChecker(p3Input, 'cmpscr-err-p3');

        aInput.addEventListener('change', function () {
            var number = parseFloat(this.value.replace(',', '.'));
            if (/^[1-9]{1}[0-9]{0,}[.,]{0,1}[0-9]{0,}$/.test(this.value) &&
                number >= 1 && number <= 12) {
                this.cmpscrError = false;
                this.removeAttribute('data-error');
                document.getElementById('cmpscr-err-a').style.display = 'none';

                // Если все хорошо, подкорректируем число: округлим его до 1-го
                // знака после запятой.
                this.value = Math.round(number * 10) / 10;
            } else {
                this.cmpscrError = true;
                this.setAttribute('data-error', '');
                document.getElementById('cmpscr-err-a').style.display = '';
            }
        });

        // Обработка самого расчета
        button.addEventListener('click', function () {
            // Коеффициенты, что подтягиваются из БД на основе специальности.
            // Получаем их из ранее установленных через php глобальных js переменных.
            var op = __competitionScore__op__; // Особлива підтримка (bool)
			 var op1 = __competitionScore__op1__; // Особлива підтримка1 (bool)

            var error = false;

            // Проверка на ошибку выбора специальности (если такой элемент есть),
            // на странице со специальностью его нет.
            if (specErr) {
                // op = -1 только вначале, когда специальность еще не выбиралась.
                // После выбора, специальность всегда будет выбранной т.к. убрать
                // состояние выбранности нельзя.
                if (op == -1 ) {
                    specErr.style.display = '';
                    error = true;
                } else {
                    specErr.style.display = 'none';
				//	alert(op);
                }
            }




           



            function checkInputError(input, errorElId) {
                if (input.value === '' || input.cmpscrError) {
                    input.setAttribute('data-error', '');
                    document.getElementById(errorElId).style.display = '';
                    error = true;
                } else {
                    input.removeAttribute && input.removeAttribute('data-error');
                    document.getElementById(errorElId).style.display = 'none';
                }
            }

            checkInputError(p1Input, 'cmpscr-err-p1');
            checkInputError(p2Input, 'cmpscr-err-p2');
            checkInputError(p3Input, 'cmpscr-err-p3');
            checkInputError(aInput, 'cmpscr-err-a');

            if (error) return;

            // Коеффициенты из формы.
            // При этом заменяем запятую на точку, если дробная часть разделена зяпятой.
            var p1 = parseInt(p1Input.value); // Предмет ЗНО 1
            var p2 = parseInt(p2Input.value); // Предмет ЗНО 2
            var p3 = parseInt(p3Input.value); // Предмет ЗНО 3

            // Середній бал атестату
            var a = parseFloat(aInput.value.replace(',', '.'));

            // Пріорітет [0;7]
            var gk = parseInt(gkSelect.options[gkSelect.selectedIndex].value);

            var sk = skCheckbox.checked;

            // Константные коеффициенты
            var k1 = 0.3;
            var k2 = 0.3;
            var k3 = 0.3;
			
            var k4 = op1 ? 0.09 : 0.1;
            var k5 = 0.3 - k3;
            var rk = 1.04;
            gk1 = (gk == 1 || gk == 2) && op ? 1.02 : 1;
            sk = sk ? (op ? 1.05 : 1.02) : 1;
			//op1= (gk == 1 || gk == 2) && op1 ? 1.02 : 1;

            // Средний бал вводится в 12-бальной системе. 
            // Для формулы нужно перевести его в 100-бальную.
            a = score12to100(a);
			

            var result = (k1 * p1 + k2 * p2 + k3 * p3 + k4 * a ) * rk * gk1 * sk;
		

            // До 3-х знаков после запятой.
            var roundedResult = Math.round(result * 1000) / 1000;
            roundedResult = roundedResult.toLocaleString('uk', {
                minimumFractionDigits: 3
            });

          /*  if (resultBox.style.display == 'none') resultBox.style.display = '';
            resultBox.textContent = resultMessage + roundedResult+" Галузевий коеф.:"+gk+" Константа к3:"+k3 +" Особлива підтримка при k3"+op1;*/
			
			 if (resultBox.style.display == 'none') resultBox.style.display = '';
            resultBox.textContent = resultMessage + roundedResult;
        });

    });
})(jQuery);
// ==== Калькулятор Конкурсного бала - Конец ====






