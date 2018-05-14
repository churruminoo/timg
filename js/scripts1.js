var global;
var indice = 0;

$(document).ready(function () {

    //Busca lista do nome dos vídeos

    function buscaListaVideos() {
        $.ajax({
            type: "GET",
            url: "buscaVideos.php",
            dataType: "text",
            success: function (response) {
                global = response.split('#');
            }
        });
    }

    buscaListaVideos(); //if you don't want the click


});

$('.video-icon-esq').click(function() {
  if (indice > 0) {
    $('#video_atual').attr("src", "uploads/"+global[--indice].toString());
    $(".videoHome").get(0).load();
  }
});

$('.video-icon-dir').click(function() {
  if (indice < (global.length - 2)) {
    $('#video_atual').attr("src", "uploads/"+global[++indice].toString());
    $(".videoHome").get(0).load();
  }
});

$('#openUpon').click(function() {
  $('#file').removeAttr("disabled");
  $('#submit').removeAttr("disabled");
});

$('.basquete').click(function() {
  $('.secao1').css("background-image", "url(fotos/basquete1.jpeg)");
  $('.secao3').css("background-color", "#F5D0A9");
  $('.secao5').css("background-color", "#B45F04");
  $('.navbar').css("border-bottom", "#8A4B08 3px solid");
});

$('.baseball').click(function() {
  $('.secao1').css("background-image", "url(fotos/baseball1.jpg)");
  $('.secao3').css("background-color", "#F3E2A9");
  $('.secao5').css("background-color", "#B18904");
  $('.navbar').css("border-bottom", "#886A08 3px solid");
});

$('.fut_americano').click(function() {
  $('.secao1').css("background-image", "url(fotos/nfl1.jpg)");
  $('.secao3').css("background-color", "#A9F5A9");
  $('.secao5').css("background-color", "#04B431");
  $('.navbar').css("border-bottom", "#088A08 3px solid");
});

$('.volei').click(function() {
  $('.secao1').css("background-image", "url(fotos/volei1.jpg)");
  $('.secao3').css("background-color", "#F5D0A9");
  $('.secao5').css("background-color", "#B45F04");
  $('.navbar').css("border-bottom", "#8A4B08 3px solid");
});

$('.futebol').click(function() {
  $('.secao1').css("background-image", "url(fotos/campo1.jpg)");
  $('.secao3').css("background-color", "#A9F5A9");
  $('.secao5').css("background-color", "#04B431");
  $('.navbar').css("border-bottom", "#088A08 3px solid");
});

$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
