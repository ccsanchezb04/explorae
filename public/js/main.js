$(document).ready(function() {
    $('.btn').tooltip();
    $('.bxslider').bxSlider({auto: true});
    $(".iframe").colorbox({iframe:true, width:"90%", height:"60%"});

    /*$("body").on('click', '#add-quote', function(event) {
        event.preventDefault();
        $.ajax({
            data: $("#form-quote").serialize(),
            url: 'http://localhost/explorae/cart/form_quote',
            type: 'POST',      
            success: function(data) {                
                $(".respuesta").html(str);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log("hay un error: "+XMLHttpRequest+", "+textStatus+", "+errorThrown);
            }
        }); 
        return false;       
    });
*/
    $('.boxgrid.slidedown').hover(function(){
        $(".cover", this).stop().animate({top:'-260px'},{queue:false,duration:300});
    }, function() {
        $(".cover", this).stop().animate({top:'0px'},{queue:false,duration:300});
    });
    //Horizontal Sliding
    $('.boxgrid.slideright').hover(function(){
        $(".cover", this).stop().animate({left:'325px'},{queue:false,duration:300});
    }, function() {
        $(".cover", this).stop().animate({left:'0px'},{queue:false,duration:300});
    });
    //Diagnal Sliding
    $('.boxgrid.thecombo').hover(function(){
        $(".cover", this).stop().animate({top:'260px', left:'325px'},{queue:false,duration:300});
    }, function() {
        $(".cover", this).stop().animate({top:'0px', left:'0px'},{queue:false,duration:300});
    });
    //Partial Sliding (Only show some of background)
    $('.boxgrid.peek').hover(function(){
        $(".cover", this).stop().animate({top:'90px'},{queue:false,duration:160});
    }, function() {
        $(".cover", this).stop().animate({top:'0px'},{queue:false,duration:160});
    });
    //Full Caption Sliding (Hidden to Visible)
    $('.boxgrid.captionfull').hover(function(){
        $(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
    }, function() {
        $(".cover", this).stop().animate({top:'260px'},{queue:false,duration:160});
    });
    //Caption Sliding (Partially Hidden to Visible)
    $('.boxgrid.caption').hover(function(){
        $(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
    }, function() {
        $(".cover", this).stop().animate({top:'220px'},{queue:false,duration:160});
    });

    $('body').on('click', '.btn-delete', function(event) {
        event.preventDefault();
        $cnf = confirm("¿Realmente desea eliminar este registro?");

        if ($cnf == true) {

            $id = $(this).attr("data-id");
            $rol = $(this).attr("data-rol");

            switch($rol) {
                /* ========================== ADMIN ========================== */
                case 'user':
                    window.location.replace("/explorae/Admin/dlt_user/"+$id);
                    break;               

                /*case 'room':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_rooms.php?id="+$id);
                    break;    

                case 'social':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_events.php?id="+$id+"&evento="+$rol);
                    break;

                case 'empresarial':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_events.php?id="+$id+"&evento="+$rol);
                    break;            

                case 'tool':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_tools.php?id="+$id);
                    break;

                case 'artist':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_artists.php?id="+$id);
                    break;*/

                default:
                    alert("No se puede eliminar el registro.");
                    break;
            }               
        };
    });
});

function add_cart(id, field) {
    /*debugger;*/
    $.ajax({
        data:{
            id:id,
            field:field
        },
        url: 'http://localhost/explorae/cart/add_cart',
        type: 'POST',      
        success: function(data) {
            var todoslosdatos = JSON.parse(data);
            console.log(todoslosdatos);
            
            var str = "<ul>";
                todoslosdatos.prod.forEach(function(elemento){
                    var nombre  = elemento.nombre_contacto;                    
                    str += nombre; 
                });
            str += "</ul>";
            
            $(".respuesta").html(str);


        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("hay un error: "+XMLHttpRequest+", "+textStatus+", "+errorThrown);
        }
    });
}

function buscador(){
    var xmlhttp=false;
    try{
        xmlhttp = new ActiveXObject("Msxm12.XMLHTTP");
    }
    catch(e){
        try{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch(E){
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function buscar(){
    var busqueda  = document.getElementById('busqueda').value;
    var resultado = document.getElementById('res_tabla');
    ajax = buscador();
    ajax.open("GET", '?q='+busqueda);
    ajax.onreadystatechange = function(){
        if (ajax.readyState == 3) {
            resultado.innerHTML = ajax.responseText;
        }
        
    }
    
    console.log(resultado);
    ajax.send(null);
}
 
/*===============================================*/
/*saber que tecla se oprimio y ejecutar buscar*/
/*===============================================*/
function callkeydownhandler(evnt) {
   var ev   = (evnt) ? evnt : event;
   var code =(ev.which) ? ev.which : event.keyCode;
   //alert("El código de la tecla pulsada es: " + code);
   if (code == 8) {
        buscar();
   };
}
if (window.document.addEventListener) {
   window.document.addEventListener("keyup", callkeydownhandler, false);
} 
else {
   window.document.attachEvent("onkeydown", callkeydownhandler);
}
