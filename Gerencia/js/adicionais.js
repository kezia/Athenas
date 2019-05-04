// JavaScript Document
$(function(){
	// configura drag and drop
	$(".recebeDrag").sortable({
		connectWith: ['.recebeDrag'],
		placeholder: 'dragHelper',
		stack: '.recebeDrag',
		containment: '#strt_center',
		scroll: false,
		revert: true,
		stop: function( e, ui ) {
		}
	});
		
	
	// minimizar boxes
	$('.lnk-minimizar').click(function(){
		var ul = $(this).parent().parent().find('#corpo_noticia');
		if( $(ul).is(':visible') ) {
			$(ul).slideUp();
			$(this).html('[ + ]');
		} else {
			$(ul).slideDown();
			$(this).html('[ - ]');
		}
		return false;
	});
	// remover box
	$('.lnk-remover').click(function(){
		$(this).parent().parent().parent().fadeOut();
		return false;
	});
	
});	
/* salva cookie
var salvaCookie = function() {
	var ordem = $('#drop-esquerda').sortable('toArray');
	ordem += '|' + $('#drop-center').sortable('toArray');
	ordem += '|' + $('#drop-direita').sortable('toArray');
	$.cookie('df_draganddrop', ordem);
};*/

	function GetXMLHttp(){
		
		if(navigator.appName == "Microsoft Internet Explorer"){
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		else{
			xmlHttp = new XMLHttpRequest();
		}
		return xmlHttp;
	}

var xmlRequest = GetXMLHttp();
var divg = null;


	function mudancaEstado(){
		if (xmlRequest.readyState == 4){
			document.getElementById(divg).innerHTML = xmlRequest.responseText;
		}
	}


	function abrirPag(pagina,div){
		
		var url = pagina;
		divg = div;
		xmlRequest.open("GET",url,true);
		xmlRequest.onreadystatechange = mudancaEstado;
		xmlRequest.send(null);
		estilizaConteudo();
		
		
		return url;
	}
	
	function abrirPagPadrao(modo,div){
		
		var url = modo;
		divl = div;
		xmlRequest.open("GET",url,true);
		xmlRequest.onreadystatechange = mudancaEstado;
		xmlRequest.send(null);
		
		return url;
	}
	
	
	function abrirPagNoticia(pagina,div,id){
		
		var url = pagina+"?"+id;
		divg = div;
		xmlRequest.open("GET",url,true);
		xmlRequest.onreadystatechange = mudancaEstado;
		xmlRequest.send(null);
		estilizaConteudo();
		
		return url;
	}
	

function estilizaConteudo(){
	//document.getElementById("banner_telematica").style.display = "none";
	document.getElementById("mutante").style.fontSize = "12px";
	document.getElementById("mutante").style.fontFamily = '"Arial", "DejaVu Sans"';

	
}
        //DD_roundies.addRule('#rodape', '5px', true);
		//DD_roundies.addRule('#menu', '5px', true );
		
// Função que fecha o pop-up ao clicar no link fechar

function fechar(){
	
	$('#popup').fadeOut();
	$('#back_popup').fadeOut();
	
	//document.getElementById('popup').style.display = 'none';
	//document.getElementById('popup_fundo').style.display = 'none';
	}


function recolher(div){
	
			var escolhida = div;
			// most effect types need no options passed by default
			var options = {};

			$( escolhida ).hide("blind","slow");
	
		}

function mostrar(div){
	
	var escolhida = div;
	// most effect types need no options passed by default
	
	$( escolhida ).toggle("blind","slow");


}

function mostrarComent(div1){
	
	var escolhida1 = div1;
	// most effect types need no options passed by default

	$( escolhida1 ).show("blind","slow");
}

function mostrarLogin(div1){
	
	var escolhida1 = div1;
	// most effect types need no options passed by default

	$( escolhida1 ).show("blind","slow");
	setTimeout(document.getElementById("start_login").style.backgroundImage="url(img/shadow_login.gif)", 100);
}
function fechaLogin(div1){
	
	var escolhida1 = div1;
	// most effect types need no options passed by default
	
	$( escolhida1 ).hide("blind","slow");
	setTimeout('document.getElementById("start_login").style.backgroundImage="none"', 600);
	

}

	// Aqui definimos o tempo para fechar o pop-up
	function abrirAviso(a){
	
	var tipo=a;
	
	if(a=='erro'){
	document.getElementById('popup').innerHTML = '<div class="ui-widget" id="certo_plic" ><div class="ui-state-error ui-corner-all" style="margin-top: 20px; padding: 0 .7em;"><p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span><strong>Que chato!</strong> Alguma coisa não deu muito certo e suas informações não foram salvas!</p></div></div><button onclick="fechar()">Ok!</button>';
	}else{
            if(a=='sucesso'){
                    document.getElementById('popup').innerHTML = '<div class="ui-widget" id="erro_plic"><div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;"><p><span class="ui-icon ui-icon-circle-check" style="float: left; margin-right: .3em;"></span><strong>Ótimo!</strong> Suas alterações foram salvas com sucesso!</p></div></div><button onclick="fechar()">Ok!</button>';
            }else{
                    document.getElementById('popup').innerHTML = '<div class="ui-widget" id="certo_plic" ><div class="ui-state-error ui-corner-all" style="margin-top: 20px; padding: 0 .7em;"><p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span><strong>Que chato!</strong>'+a+'</p></div></div><button onclick="fechar()">Ok!</button>';
            }
        }
	document.getElementById("popup").style.width = "650px";
	document.getElementById("popup").style.height = "110px";
	document.getElementById("popup").style.marginTop = "-55px";
	$('#popup').fadeIn();
	$('#back_popup').fadeIn();
	setTimeout ("fechar()", 300000000);
	}

	function abrirGrade(a){
		
		var imagem = a;
		var wimage;
		var himage;
		var alturaTela = screen.height;
		var larguraTela = screen.width;
		
		var browser = navigator.appName;
		
		document.getElementById("popup").style.top = "16px";
		
		if(alturaTela===800 && larguraTela===1280){
			document.getElementById("popup").style.top = "16px";
			document.getElementById("popup").style.left = "16px";
			document.getElementById("popup").style.width = "1200px";
			document.getElementById("popup").style.height = "610px";
			document.getElementById("popup").style.position = "fixed";
			wimage = 1198;
			himage = 608;
			
		}else{
			if(alturaTela===1024 && larguraTela===1280){
				document.getElementById("popup").style.top = "16px";
				document.getElementById("popup").style.left = "16px";
				document.getElementById("popup").style.width = "1200px";
				document.getElementById("popup").style.height = "560px";
				document.getElementById("popup").style.position = "fixed";
				wimage = 1198;
				himage = 558;
			}else{
				if(alturaTela===900 && larguraTela===1440){
					document.getElementById("popup").style.top = "16px";
					document.getElementById("popup").style.left = "45px";
					document.getElementById("popup").style.width = "1291px";
					document.getElementById("popup").style.height = "643px";
					document.getElementById("popup").style.position = "fixed";
					wimage = 1289;
					himage = 641;
				}else{
						if(alturaTela===768 && larguraTela===1024){
							document.getElementById("popup").style.top = "10px";
							document.getElementById("popup").style.left = "10px";
							document.getElementById("popup").style.width = "967px";
							document.getElementById("popup").style.height = "532px";
							document.getElementById("popup").style.position = "fixed";
							wimage = 965;
							himage = 530;
						}else{
							document.getElementById("popup").style.top = "10px";
							document.getElementById("popup").style.left = "10px";
							document.getElementById("popup").style.width = "967px";
							document.getElementById("popup").style.height = "532px";
							document.getElementById("popup").style.position = "fixed";
							wimage = 965;
							himage = 530;
					}
				
				}
			}
		}
		
		$('#popup').fadeIn();
		document.getElementById('popup').innerHTML = "<img src='img/"+imagem+".png' width='"+wimage+"' height='"+himage+"'/>";
		$('#back_popup').fadeIn();
		setTimeout ("fechar()", 300000000);
}

	function abrirAcademico(){
		
		var wimage;
		var himage;
		var alturaTela = screen.height;
		var larguraTela = screen.width;
		
		var browser = navigator.appName;
		
		document.getElementById("popup").style.top = "16px";
		
		if(alturaTela===800 && larguraTela===1280){
			document.getElementById("popup").style.top = "16px";
			document.getElementById("popup").style.left = "16px";
			document.getElementById("popup").style.width = "1200px";
			document.getElementById("popup").style.height = "610px";
			document.getElementById("popup").style.position = "fixed";
			wimage = 1198;
			himage = 608;
			
		}else{
			if(alturaTela===1024 && larguraTela===1280){
				document.getElementById("popup").style.top = "16px";
				document.getElementById("popup").style.left = "16px";
				document.getElementById("popup").style.width = "1200px";
				document.getElementById("popup").style.height = "560px";
				document.getElementById("popup").style.position = "fixed";
				wimage = 1198;
				himage = 558;
			}else{
				if(alturaTela===900 && larguraTela===1440){
					document.getElementById("popup").style.top = "16px";
					document.getElementById("popup").style.left = "45px";
					document.getElementById("popup").style.width = "1291px";
					document.getElementById("popup").style.height = "643px";
					document.getElementById("popup").style.position = "fixed";
					wimage = 1289;
					himage = 641;
				}else{
						if(alturaTela===768 && larguraTela===1024){
							document.getElementById("popup").style.top = "10px";
							document.getElementById("popup").style.left = "10px";
							document.getElementById("popup").style.width = "967px";
							document.getElementById("popup").style.height = "532px";
							document.getElementById("popup").style.position = "fixed";
							wimage = 965;
							himage = 530;
						}else{
							document.getElementById("popup").style.top = "10px";
							document.getElementById("popup").style.left = "10px";
							document.getElementById("popup").style.width = "967px";
							document.getElementById("popup").style.height = "532px";
							document.getElementById("popup").style.position = "fixed";
							wimage = 965;
							himage = 530;
					}
				
				}
			}
		}
		
		$('#popup').fadeIn();
		document.getElementById('popup').innerHTML = '<iframe src="https://qacademico.ifce.edu.br/" style="border-width:0" width="'+wimage+'" height="'+himage+'" frameborder="0" scrolling="scroll"></iframe>';
		$('#back_popup').fadeIn();
		setTimeout ("fechar()", 300000000);
}
	/*function abrir2(){
	document.getElementById('popupa').style.display = 'block';
	setTimeout ("fechar()", 300000000);
	this.fechar();
	}*/

	function mudaLogado(){
	
		
		document.getElementById("login_segura").style.display = "none";
		document.getElementById("cont_banner").style.display = "none";
		document.getElementById('principal_slogin').innerHTML = 'Seja Bem-vindo, Administrador [<a href="paginas_jsp/logoff.jsp" style="color:#BC1E1E;">sair</a>]';
		document.getElementById("area_areaadmin").style.display = "inherit";
		mostrar('#area_administracao');

		/*
		setTimeout("mostrar('area_areaadmin')", 100);
		setTimeout("mostrar('area_administracao')", 100);
		*/
//		setTimeout("abrirPag('arqs/menu/menu_adm.jsp','mutante')", 100);
		
	}
	function mudapNoticia(){
		
		document.getElementById("casca_vagas").style.display = "none";
		$('#casca_noticias').fadeIn("slow");
		document.getElementById("divisor_tab").style.backgroundImage = "url(img/divisao_abas_home_invert.gif)";
		document.getElementById("indicator_line").style.background = "#FF9900";

	}
	function mudapEmprego(){
		
		$('#casca_vagas').fadeIn("slow");
		document.getElementById("casca_noticias").style.display = "none";
		document.getElementById("divisor_tab").style.backgroundImage = "url(img/divisao_abas_home.gif)";
		document.getElementById("indicator_line").style.background = "#1A50AA";
		
	}

	function mudapCurso(c){
		
		var curso = c;
		
		if(curso=="computacao"){
			if(document.getElementById("corpo_ciencia").style.display == "none"){
				$('#corpo_ciencia').fadeIn("slow");
				document.getElementById("corpo_redes").style.display = "none";
				document.getElementById("corpo_informatica").style.display = "none";
			}else{
				document.getElementById("corpo_redes").style.display = "none";
				document.getElementById("corpo_informatica").style.display = "none";
			}
		}
		if(curso=="redes"){
			$('#corpo_redes').fadeIn("slow");
			document.getElementById("corpo_ciencia").style.display = "none";
			document.getElementById("corpo_informatica").style.display = "none";
		}
		if(curso=="informatica"){
			$('#corpo_informatica').fadeIn("slow");
			document.getElementById("corpo_redes").style.display = "none";
			document.getElementById("corpo_ciencia").style.display = "none";
		}
	}
	
	    
	  

	 
	  
// JavaScript Document

