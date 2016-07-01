

var js = jQuery.noConflict();


//PREDIOS

js(document).ready(function() {
	js("#PredioPaiseId").change(function(){
	js.ajax({
		dataType:"html",
		evalScripts: true,
		type:"POST",
		url:"/ligamio/predios/listaprovincias/"+js(this).val(),
		//data: {value_to_send:value},
		beforeSend: function(){
			js('#PredioProvinciaId').html('<div class="rating-flash" id="cargando_div"> Cargando</div>');
		},
		success: function(respuesta){
			js('#PredioProvinciaId').html(respuesta);
		}

		});
		});
	});
		
js(document).ready(function() {
	js("#PredioProvinciaId").bind('click',function(){
		js("#PredioProvinciaId option:selected").each(function () {
		var b= js(this).val();
		
		js.ajax({
		dataType:"html",
		evalScripts: true,
		type:"POST",
		url:"/ligamio/predios/listalocalidades/"+b,
		data:({type:'original'}),
		beforeSend: function(){
			js('#PredioLocalidadeId').html('<div class="rating-flash" id="cargando_div"> Cargando</div>');
		},
		success: function(respuestab){
			js('#PredioLocalidadeId').html(respuestab);
		}

		});
		});
	});
	});


// JUGADORES

js(document).ready(function() {
	js("#JugadorePaiseId").change(function(){
	js.ajax({
		dataType:"html",
		evalScripts: true,
		type:"POST",
		url:"/ligamio/jugadores/listaprovincias/"+js(this).val(),
		//data: {value_to_send:value},
		beforeSend: function(){
			js('#JugadoreProvinciaId').html('<div class="rating-flash" id="cargando_div"> Cargando</div>');
		},
		success: function(respuesta){
			js('#JugadoreProvinciaId').html(respuesta);
		}

		});
		});
	});
		
js(document).ready(function() {
	js("#JugadoreProvinciaId").bind('click',function(){
		js("#JugadoreProvinciaId option:selected").each(function () {
		var b= js(this).val();
		
		js.ajax({
		dataType:"html",
		evalScripts: true,
		type:"POST",
		url:"/ligamio/jugadores/listalocalidades/"+b,
		data:({type:'original'}),
		beforeSend: function(){
			js('#JugadoreLocalidadeId').html('<img src="loading.gif" height="25" "width"="25"><div class="rating-flash" id="cargando_div"> Cargando</div>');
		},
		success: function(respuestab){
			js('#JugadoreLocalidadeId').html(respuestab);
		}

		});
		});
	});
	});


//PERSONAS

js(document).ready(function() {
	js("#PersonaPaiseId").change(function(){
	js.ajax({
		dataType:"html",
		evalScripts: true,
		type:"POST",
		url:"/ligamio/personas/listaprovincias/"+js(this).val(),
		//data: {value_to_send:value},
		beforeSend: function(){
			js('#PersonaProvinciaId').html('<div class="rating-flash" id="cargando_div"> Cargando</div>');
		},
		success: function(respuesta){
			js('#PersonaProvinciaId').html(respuesta);
		}

		});
		});
	});
		
js(document).ready(function() {
	js("#PersonaProvinciaId").bind('click',function(){
		js("#PersonaProvinciaId option:selected").each(function () {
		var b= js(this).val();
		
		js.ajax({
		dataType:"html",
		evalScripts: true,
		type:"POST",
		url:"/ligamio/personas/listalocalidades/"+b,
		data:({type:'original'}),
		beforeSend: function(){
			js('#PersonaLocalidadeId').html('<div class="rating-flash" id="cargando_div"> Cargando</div>');
		},
		success: function(respuestab){
			js('#PersonaLocalidadeId').html(respuestab);
		}

		});
		});
	});
	});

//clubs

js(document).ready(function() {
	js("#ClubPaiseId").change(function(){
	js.ajax({
		dataType:"html",
		evalScripts: true,
		type:"POST",
		url:"/ligamio/clubs/listaprovincias/"+js(this).val(),
		//data: {value_to_send:value},
		beforeSend: function(){
			js('#ClubProvinciaId').html('<div class="rating-flash" id="cargando_div"> Cargando</div>');
		},
		success: function(respuesta){
			js('#ClubProvinciaId').html(respuesta);
		}

		});
		});
	});
		
js(document).ready(function() {
	js("#ClubProvinciaId").bind('click',function(){
		js("#ClubProvinciaId option:selected").each(function () {
		var b= js(this).val();
		
		js.ajax({
		dataType:"html",
		evalScripts: true,
		type:"POST",
		url:"/ligamio/clubs/listalocalidades/"+b,
		data:({type:'original'}),
		beforeSend: function(){
			js('#ClubLocalidadeId').html('<div class="rating-flash" id="cargando_div"> Cargando</div>');
		},
		success: function(respuestab){
			js('#ClubLocalidadeId').html(respuestab);
		}

		});
		});
	});
	});