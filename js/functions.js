/*jquery.select_skin.js */
/*
 * jQuery select element skinning
 * version: 1.0.4 (03/03/2009)
 * @requires: jQuery v1.2 or later
 * adapted from Derek Harvey code
 *   http://www.lotsofcode.com/javascript-and-ajax/jquery-select-box-skin.htm
 * Licensed under the GPL license:
 *   http://www.gnu.org/licenses/gpl.html
 *
 * Copyright 2009 Colin Verot
 */

(function($){
    $.fn.select_skin = function(w){
        return $(this).each(function(i){
            s = $(this);

            if(! s.attr('multiple'))
            {
                // create the container
                s.wrap('<div class="cmf-skinned-select"></div>');
                c = s.parent();
                c.children().before('<div class="cmf-skinned-text">&nbsp;</div>').each(function(){
                    if (this.selectedIndex >= 0)
                    	$(this).prev().text(this.options[this.selectedIndex].innerHTML);
                });
                c.width(s.outerWidth()-2);
                c.height(s.outerHeight()-2);

                // skin the container
                c.css('background-color', s.css('background-color'));
                c.css('color', s.css('color'));
                c.css('font-size', s.css('font-size'));
                c.css('font-family', s.css('font-family'));
                c.css('font-style', s.css('font-style'));
                c.css('position', 'relative');

                // hide the original select
                s.css({'opacity':0, 'position':'relative', 'z-index':100});

                // get and skin the text label
                var t = c.children().prev();
                t.height(c.outerHeight()-s.css('padding-top').replace(/px,*\)*/g,"")-s.css('padding-bottom').replace(/px,*\)*/g,"")-t.css('padding-top').replace(/px,*\)*/g,"")-t.css('padding-bottom').replace(/px,*\)*/g,"")-2);
                t.width(c.innerWidth()-s.css('padding-right').replace(/px,*\)*/g,"")-s.css('padding-left').replace(/px,*\)*/g,"")-t.css('padding-right').replace(/px,*\)*/g,"")-t.css('padding-left').replace(/px,*\)*/g,""));
                t.css({'opacity': 100, 'overflow': 'hidden', 'position': 'absolute', 'text-indent': '0px', 'z-index': 1, 'top': 0, 'left': 0});

                // add events
                c.children().click(function(){
                    t.text((this.options.length > 0 && this.selectedIndex >= 0 ? this.options[this.selectedIndex].innerHTML : ''));
                });
                c.children().change(function(){
                    t.text((this.options.length > 0 && this.selectedIndex >= 0 ? this.options[this.selectedIndex].innerHTML : ''));
                });
             }
        });
    };
}(jQuery));

/* --- FUNCTIONS No Label --- */
function addHint(field) {
	var titleHint = field.title.substring(1);
	if( field.value == "" || field.value == titleHint ) {
			//in "password" inputs, set to "text" to show hint, preserve type in class attribute
			if( field.type == "password" ) {
				$( field ).addClass("password");
				var newObject = changeInputType( field, "text" )//returns false for non-ie
				if(document.all){ // if IE
					field = newObject;
				}
			} //end type == "password"
			$(field).addClass("hint");
			field.value = titleHint;
	} //end value==""
} //end addHint

function removeHint(field) { //only on INPUT.text items 
		var titleHint = field.title.substring(1);
		if( field.value == "" || field.value == titleHint ) {
			$(field).removeClass('hint');
			field.value="";
			//re-set password type if appropiate
			if($(field).hasClass("password")) {
				var newObject = changeInputType( field, "password" ); //returns false for non-ie
				if(newObject) { ///IE, element was replaced: reset focus
					$(newObject).focus();
					$(newObject).select();
				}
			}//end hasClass("password")
		}//end value == titleHint
	//}//end what.title	
}//end rmhint

function changeInputType(oldObject, oType) {
//based on http://arjansnaterse.nl/changing-type-attribute-in-ie
//used to simulate change of INPUT type in IE
	if(!document.all){
		oldObject.type = oType;
		return false;
	}else{
	//ie can't change INPUT's type, must create new element
	  var newObject = document.createElement('input');	  
	  newObject.type = oType;
	  if(oldObject.size) newObject.size = oldObject.size;
	  if(oldObject.title) newObject.title = oldObject.title;
	  if(oldObject.value) newObject.value = oldObject.value;
	  if(oldObject.name) newObject.name = oldObject.name;
	  if(oldObject.id) newObject.id = oldObject.id;
	  if(oldObject.className) newObject.className = oldObject.className;
	  oldObject.parentNode.replaceChild(newObject,oldObject);
	  //live()
	  //newObject.blur = oldObject.blur;
	  //newObject.focus = oldObject.focus;
		//$(newObject).blur(function(event){ addHint(this); });
		//$(newObject).focus(function(event){ removeHint(this); });
	  return newObject;
  }//end document.all
}

////////////////////////////////////////////////////////////////////////////////

$(document).ready( function(){

///////////////////////////////////////////
//	Inscrição Lateral
/////////////////////////////////////////

   	$('a.btSlider' ).bind('click',function() {
		if(!$(".boxForm").hasClass('aberto')){
			$(".boxForm").animate({right: "0"},300,function(){
				$(this).addClass('aberto');							
			});
		}else{
			$(".boxForm").animate({right: "-270"},300,function(){
				$(this).removeClass('aberto');
			});
		}
	});
	
	$('.select').select_skin();
	
	// HINTS: Add *title hints to form elements
	for( var i=0; i < document.forms.length; i++) {
		var fe = document.forms[i].elements;	
		for ( var j=0; j < fe.length; j++ ) {
			if( (fe[j]).title.indexOf("**")==0 ) {
				if( (fe[j]).value == "" || (fe[j]).value == titleHint ) {
					var titleHint = (fe[j]).title.substring(2);
					(fe[j]).value = titleHint;
				}
			} else if( ( (fe[j]).type == "text" || (fe[j]).type == "password" || (fe[j]).tagName == 'TEXTAREA' ) && (fe[j]).title.indexOf("*")==0 ) {
				addHint( (fe[j]) );
				$(fe[j]).blur(function(event){ addHint(this); });
				$(fe[j]).focus(function(event){ removeHint(this); });
			}
		}
	}
	
	
//////////////////////////////////////////////////////////////////////////////////////////////
// Adiciona a classe "ativo" para o link que tiver o destino (href) identico à pagina aberta
//////////////////////////////////////////////////////////////////////////////////////////////

	dmPaginaAtivo = window.location+"";
	dmPaginaAtivo = dmPaginaAtivo.split("/").pop();
	dmPaginaAtivo = dmPaginaAtivo =="" ? "index.php" : dmPaginaAtivo;
	if(dmPaginaAtivo != ""){
		$('a[href="'+dmPaginaAtivo+'"]').addClass('ativo');
	}
	paginaAtiva = $('body').attr('class');
    $('.mainMenu .mainLink[rel="'+paginaAtiva+'"]').addClass('ativo');
    
    $('#menuMobile a[href$="'+dmPaginaAtivo+'"]').parent('li').addClass('Selected');
	
////////////////////////////////////////////////////////
//	Centraliza paginacao e Etapas do carrinho
////////////////////////////////////////////////////////
	
	$('.paginacao ul').each(function(){
		var tamDiv 	= $(this).parent().width();
		var tamUl 	= $(this).width();
		
		var tam = tamDiv / 2 - tamUl / 2;
		$(this).css('margin-left',tam+'px');
	});
	
	$('.etapasCarrinho ul').each(function(){
		var tamDiv 	= $(this).parent().width();
		var tamUl 	= $(this).width();
		
		var tam = tamDiv / 2 - tamUl / 2;
		$(this).css('margin-left',tam+'px');
	});
	
	
/***
	*	:: Redimensionar por classe ::
	*	:: 2007 ::
	*
	*	Redimenciona um elemente setando uma classe para ele.
	*	ex:
	*		<div class="width150">teste</div>
	*		<div class="height5050">teste</div>
	***/
	$("*[class*=width]").each(function(){
		var dmClasses = $(this).attr("class").split(" ");
		$.each(dmClasses, function(i,n){ if(n.indexOf("width") != -1){ dmTamanho = dmClasses[i].replace("width",""); } });
		$(this).css("width",dmTamanho+"px");
	});
	$("*[class*=height]").each(function(){
		var dmClasses = $(this).attr("class").split(" ");
		$.each(dmClasses, function(i,n){ if(n.indexOf("height") != -1){ dmTamanho = dmClasses[i].replace("height",""); } });
		$(this).css("height",dmTamanho+"px");
	});

	$(".voltar").bind('click',function(){
		window.history.go(-1);
		return false;
	});
	

	
/////////////////////////////////////////////////////////
// 	POPUPS
///////////////////////////////////////////////////////

/***
	*	:: Exibe div de bloqueio ::
	*	:: 2007 ::
	*
	*	Fun��o que abre uma div cobrindo toda a tela bloqueando o site, com fun��o de callback.
	*	ex:
	*		bloqueia({ speed: "slow", bgcolor: "#000" });
	*		bloqueia({ speed: "slow", evento: "fim" });
	*
	*	OBS: Nescess�rio plugin Dimension.
	***/
	bloqueia = function(options,callback){
		var defaults = {
			versao: 2.1,
			id: "bloqueio",
			evento: "inicio",
			bgColor: "#000",
			opacity: "0.8",
			speed: "normal",
			zIndex: "100",
			cursor: "default",
			animate: true
		}
		options = $.fn.extend({},defaults,options);

		if((options.id == "" || options.id == "bloqueio") && !$("#bloqueio").is("div")) $("body").append("<div id=\"bloqueio\" style=\"display:none\"></div>");

		var altura = $(document).height() > $(window).height() ? $(document).height() : $(window).height();

		if(options.evento == "inicio"){
			if($.browser.msie && $.browser.version == "6.0") $("select:visible").addClass("hiddenForDmBlock").css("visibility","hidden");
			$("#"+options.id).css({
				background:options.bgColor,
				cursor:options.cursor,
				height:altura,
				left:"0",
				opacity:options.opacity,
				position:"absolute",
				top:"0",
				width:"100%",
				zIndex:options.zIndex
			});
			if(options.animate){
				$("#"+options.id).fadeIn(options.speed, function(){ if(typeof(callback) != "undefined"){ callback(); } });
			}else{
				$("#"+options.id).css("display","block");
				if(typeof(callback) != "undefined"){ callback(); }
			}
			carregandoResize = function(){
				altura = $(document).height() > $(window).height() ? $(document).height() : $(window).height();
				$("#"+options.id).css({height:altura});
			}
			$(window).bind('resize',carregandoResize);
		}else{
			$("select.hiddenForDmBlock").css("visibility","visible");
			$(window).unbind('resize',carregandoResize);
			if(options.animate){
				$("#"+options.id).fadeOut(options.speed, function(){ if(typeof(callback) == "function"){ callback(); } });
			}else{
				$("#"+options.id).css("display","none");
				if(typeof(callback) == "function"){ callback(); }
			}
		}
	}
	
	/***
	*	:: Absolute Center ::
	*
	*	Fun��o que centraliza um objeto na tela.
	*	ex:
	*		$("#teste").absoluteCenter({limit:[0,10,0,10]});
	*		$("#teste").absoluteCenter({clear:true;}
	*
	*	OBS: Nescess�rio plugin Dimension.
	***/
	$.fn.extend({
		absoluteCenter: function(options, speed, callback){
			var defaults = {
				dellay: 100,
				limitTop: 0,
				limitRight: 0,
				limitBottom: 0,
				limitLeft: 0,
				limit: null,
				animation: true,
				clear:false
			}
			options = $.extend({}, defaults, options);
					
			if(options.limit != null){
				if(typeof(options.limit) == "object"){
					options.limitTop = typeof(options.limit[0]) != "undefined" ? options.limit[0] : options.limitTop;
					options.limitRight = typeof(options.limit[1]) != "undefined" ? options.limit[1] : options.limitRight;
					options.limitBottom = typeof(options.limit[2]) != "undefined" ? options.limit[2] : options.limitBottom;
					options.limitLeft = typeof(options.limit[3]) != "undefined" ? options.limit[3] : options.limitLeft;
				}else{
					options.limitTop = options.limit;
					options.limitRight = options.limit;
					options.limitBottom = options.limit;
					options.limitLeft = options.limit;
				}
			}
			
			speed = typeof(speed) == "undefined" ? "fast" : speed;
			
			return this.each(function(){

				var obj = this;
				var timeOut = null;
				
				var ajustaScroll = function(){
					
					if($(obj).css("display") == "none") $(window).unbind("scroll",ajustaScroll).unbind("resize",ajustaScroll);
					
					var altura = parseInt($(obj).outerHeight());
					var largura = parseInt($(obj).outerWidth());
					
					var limiteC = parseInt($(obj).css("top"));
					var limiteB = limiteC + altura;
					var limiteE = parseInt($(obj).css("left"));
					var limiteD = limiteE + largura;
					
					var scrollTop = parseInt($(window).scrollTop());
					var scrollLeft = parseInt($(window).scrollLeft());
					var janelaAltura = parseInt($(window).height());
					var janelaLargura = parseInt($(window).width());
					
					var documentoAltura = parseInt($("body").outerHeight());
					var documentoLargura = parseInt($(document).width());
					
					var top = janelaAltura > altura
						? parseInt(scrollTop + (( janelaAltura / 2 ) - parseInt(altura / 2)))
						: scrollTop < (limiteC - options.limitTop)
							? scrollTop + options.limitTop
							: (scrollTop + janelaAltura) > (limiteB + options.limitBottom)
								? scrollTop - (altura - janelaAltura) - options.limitBottom
								: limiteC
					;
					top = (top + altura) > documentoAltura ? documentoAltura - altura : top;
					
					var left = janelaLargura > largura
						? parseInt(scrollLeft + (( janelaLargura / 2 ) - parseInt(largura / 2)))
						: scrollLeft < (limiteE - options.limitLeft)
							? scrollLeft + options.limitLeft
							: (scrollLeft + janelaLargura) > (limiteD + options.limitRight)
								? scrollLeft - (largura - janelaLargura) - options.limitRight
								: limiteE
					;
					left = (left + largura) > documentoLargura ? documentoLargura - largura : left;
														
					top = isNaN(top) ? 0 : top;
					left = isNaN(left) ? 0 : left;
					
					top = top < 0 ? 0 : top;
					
					if(options.animation){
						clearTimeout(timeOut);
						timeOut = setTimeout(function(){
							$(obj).animate({top:top+"px",left:left+"px"},speed,function(){ if(typeof(callback) != "undefined") callback(); });
						},options.dellay);
					}else{
						$(obj).css({top:top+"px",left:left+"px"});
					}
					
				}
				ajustaScroll();
				
				if(options.animation) {
					$(window).unbind('scroll', ajustaScroll).unbind('resize', ajustaScroll);
					$(window).scroll(ajustaScroll).resize(ajustaScroll);
				}

			});
		}
	});
	
////////////////////////////////////////////
// Popup Esqueci minha senha
////////////////////////////////////////////

	$('a.abreSenha').click(function(){
		bloqueia({bgColor: "#3D200B",opacity:'0.7'},function(){
			$('.esqueciSenha').absoluteCenter({animation:false}).absoluteCenter().show();
		});
	});
	$(".fechaBloqueio").click(function(){
		$(".popup").hide();
		bloqueia({ speed: "slow", evento: "fim" });
		$(window).unbind("scroll");
		$(window).unbind("resize");
		
	});
	
});




