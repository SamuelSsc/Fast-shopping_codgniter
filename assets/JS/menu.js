$(document).ready(function(){//Função executada apos carregar o documento	
	$('nav li ul').hide().removeClass('sublista');//Oculta a lista e remove a classe
	$('nav li').hover(//Função exec qnd o mouse esta sobre a divi
		function () {
			$('ul', this).stop().slideDown(1000);//Exibe a lista em 1 segundo
		},
		function () {//Função exec qnd o mouse sai de cima a div
			$('ul', this).stop().slideUp(1000);//Esconde a lista em 1 segundo
		}
	);
});	