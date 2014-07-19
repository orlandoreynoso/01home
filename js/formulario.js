

var $form = $('#formulario'),
	$titulo = $('#titulo'),
	$url = $('#url'),
	$button = $('#mostrar-form'),
	$list = $('#contenido'),
	$post = $('.item').first(); /* Este para obtener el primer elemento*/

/*--- Revisar 01 ---*/

function mostrarFormulario(){
	$form.slideToggle();  //Animación mostrarlo / ocultarlo
	return false;
}

/*===================*/

function agregarPost(){
/*
eventos:

function agregarPost(e){
	e.target; quien disparo el evento.
posicion del mouse, etc.
}

*/

	var url = $url.val(),
		titulo = $titulo.val(),
		$clone = $post.clone();

	$clone.find('.titulo_item a') /* Encontrar elementos dentro del elemento*/
		.text(titulo)
		.attr('href', url);

	$clone.hide(); /*Display sería none*/

	$list.prepend($clone); /*Agregar un elemento al final de nuestro elemento
prepent: enbebe nuestro clon y desplaza todo hacia abajo
	*/

	$clone.fadeIn();

	return false;
}

// Eventos
$button.click( mostrarFormulario );
$form.on('submit', agregarPost ); // esto es un listener