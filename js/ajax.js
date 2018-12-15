$(function(){
	$('#search').focus();
	$('#buscar').submit(function(e){
		e.preventDefautl();
	})
	$('#search').keyup(function(){
		var envio = $('#search').val();

		$('#resultados').html('<div class="progress"><div id="bar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>');

		$.ajax({
			type: 'POST',
			url:'../php/buscar.php',
			data:('search=' +envio),
			success: function(resp){
				if(resp!=""){
					$('#resultados').html(resp);
				}
			 }
		   
		})
	})
})
var progreso = 0;
var idIterval = setInterval(function(){
  // Aumento en 10 el progeso
  progreso +=50;//se cambian los numeros para dar el % segun lo estime necesario
  $('#bar').css('width', progreso + '%');
     
  //Si llegó a 100 elimino el interval
  if(progreso == 100){
    clearInterval(idIterval);
  }
},1000);