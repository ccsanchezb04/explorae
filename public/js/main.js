$(document).ready(function() {
    $('.btn').tooltip();
    $('.bxslider').bxSlider({auto: true});
    $(".iframe").colorbox({iframe:true, width:"90%", height:"60%"});

    $("body").on('click', '#add-quote', function(event) {
        event.preventDefault();
        window.location.replace('http://localhost/explorae/');
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
                    var nombre  = "<li>"+elemento.nombre_contacto+"</li>";
                    //var bla bla bla = elemento
                    //me tengo que ir ya mañana seguimos le parece?
                    //hagale muchas
                    //pero asi se manda los datos tiene 2 opciones
                    // si va a crear una vista en el codeigniter pa renderizar esos datos
                    // not iene dnecesitdad de hacer eso que etmaos haceindoe n ele javscript porque la vista ya esta renderizada solo usa el .html y respuesta y yapero si va a mandar un json le toca hacer todo esto por eso ya depende de como lo vea mejor  y de susu requemirnetos si algo me escribe pro faccebook chaoooooo
                    str += "<li>" + nombre + "</li>"; 
                });
            str += "</ul>";
            
            $(".respuesta").html(str);


        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("hay un error: "+XMLHttpRequest+", "+textStatus+", "+errorThrown);
        }
    });
}