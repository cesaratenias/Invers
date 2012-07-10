$(document).ready(function(){
    $("#mpA").autocomplete({
        source: "../../../autocomplete/recurso.php",
        minLength: 2,
        select: function(event, ui) {
            var value=ui.item.value;
            var id=ui.item.id;
            $("#idMP").val(id);
        },
        change: function( event, ui ) {
            if ( !ui.item ) {
                $("#idMP").val("");
                return false;
            }
        }
    })
})
function agregar(mp, cantidad, id, total){
   if(mp == '' || cantidad == ''|| total == ''){
       alert("Todos los campos deben estar llenos.");
       $("#mpA").focus();
       return false;
   } else if(id == '') {
       alert("La materia prima no existe.");
       $("#mpA").val('');
       $("#mpA").focus();
       return false;   
    } else if (isNaN($("#cantidadMP").val())){
        alert("Introduzca sólo números en el campo Cantidad.");
        $("#cantidadMP").val('');
        $("#cantidadMP").focus();
        return false;
    } else if (isNaN($("#totalMP").val())){
        alert("Introduzca sólo números en el campo Total.");
        $("#totalMP").val('');
        $("#totalMP").focus();
        return false;
    } else {
        if($("#fila"+id).val() == undefined){
            var html1='<tr id="fila'+id+'"><input type="hidden" value="'+id+'" name="mp['+id+']" id="mp'+id+'"/>';
            var html2='<input type="hidden" value="'+cantidad+'" name="cantidad['+id+']" id="cantidad'+id+'" /><input type="hidden" value="'+total+'" name="total['+id+']" id="total'+id+'" /><td id="campo'+id+'">';
            var html3=mp+'</td><td id="fcantidad'+id+'">';
            var html4=cantidad+'</td><td id="ftotal'+id+'">';
            var html5=total+'</td>';
            var html6='<a class="manito" onclick="borrar('+id+')"><img width="12" height="12" src="libs/img/dele.png" />&nbsp;Borrar</a></td></tr>';
            var html = html1+html2+html3+html4+html5+html6;
            $("#detalle").append(html)
        } else {
            var nuevaCantidad = $("#cantidadMP").val();
            var viejaCantidad = $("#cantidad"+id).val();
            var sumatoriaCant = parseInt(viejaCantidad)+parseInt(nuevaCantidad);
            $("#fcantidad"+id).text(sumatoriaCant);
            $("#cantidad"+id).val(sumatoriaCant);
            
            var nuevoTotal = $("#totalMP").val();
            var viejoTotal = $("#total"+id).val();
            var sumatoriaTotal = parseInt(viejoTotal)+parseInt(nuevoTotal);
            $("#ftotal"+id).text(sumatoriaTotal);
            $("#total"+id).val(sumatoriaTotal);            
        }
        $("#cantidadMP").val('');
        $("#totalMP").val('');
        $("#mpA").val('');
        $("#idMP").val('');
    }
}
function verificar(){
    if($("#mpA").val() == ''){
        $("#idMP").val('');
    }
}
function borrar(id){
    $("#fila"+id).remove();
}