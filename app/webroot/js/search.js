

var js = jQuery.noConflict();
js(document).ready(function(){
    js("#s").autocomplete({
        minLength: 2,
        select: function(event, ui) {
            js("#s").val(ui.item.label);
        },
        source: function(request, response) {
            js.ajax({
                url: "predios/searchjson",
                data: {
                    term: request.term
                },
                dataType: "json",
                success: function(data){
                    response(js.map(data, function(el, index){
                        return {
                            value: el.Predio.nombre,
                            nombre: el.Predio.nombre
                        };
                    }));
                }
            });
        }
    }).data("ui-autocomplete")._renderItem = function(ul, item){
        return js("<li></li>")
        .data("item.autocomplete", item)
        .append("<a>"+ item.nombre +"</a>")
        .appendTo(ul)
    };
});


var js = jQuery.noConflict();
js(document).ready(function(){
    js("#s1").autocomplete({
        minLength: 2,
        select: function(event, ui) {
            js("#s1").val(ui.item.label);
        },
        source: function(request, response) {
            js.ajax({
                url: "personas/searchjson",
                data: {
                    term: request.term
                },
                dataType: "json",
                success: function(data){
                    response(js.map(data, function(el, index){
                        return {
                            value: el.Persona.dni,
                            nombre: el.Persona.dni
                        };
                    }));
                }
            });
        }
    }).data("ui-autocomplete")._renderItem = function(ul, item){
        return js("<li></li>")
        .data("item.autocomplete", item)
        .append("<a>"+ item.dni +"</a>")
        .appendTo(ul)
    };
});
