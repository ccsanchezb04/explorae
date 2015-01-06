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
    /*$("#rooms").on('click', '#add-cart', function(event) {
        event.preventDefault();
        var prod = $('.producto').attr('id');
        var prod_id = $('#'+prod+'#add-cart').attr('id-prod');
        var prod_table = $('#'+prod+'#add-cart').attr('table-prod');
        var prod_field = $('#'+prod+'#add-cart').attr('field');
        console.log(prod);
        console.log(prod_id);
        console.log(prod_table);
        console.log(prod_field);
        $.ajax({
            url: 'http://localhost/explorae/cart/add_cart',
            type: 'POST',
            data: {id: prod_id, table: prod_table, field: prod_field},
            success: function () {
                alert("Llegaron los datos "+prod_id+", "+prod_table+", "+prod_field);
            },
            error: function () {
                alert("hay un error");
            }
        })
    });*/
});
function add_cart(id, table, field) {
    console.log(id);
    console.log(table);
    console.log(field);
    /*var prod_id = $('#add-cart').attr('prod-id');
    var prod_table = $('#add-cart').attr('prod-table');
    var prod_field = $('#add-cart').attr('prod-field');*/
    $.ajax({
        url: 'http://localhost/explorae/cart/add_cart',
        type: 'POST',
        dataType: 'json',
        data: {id: id, table: table, field: field},
        success: function (data) {
            var json_x = $.parseJSON(data);
            alert("Llegaron los datos "+id+", "+table+", "+field);
            console.log(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log("hay un error: "+textStatus+", "+errorThrown);
        }
    })
}