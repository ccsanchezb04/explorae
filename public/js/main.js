var base_url          = 'http://localhost/explorae'; 
var urlClient         = base_url+'/asesor/search_client'; 
var urlEvento         = base_url+'/asesor/tipo_evento'; 
var urlCaracteristica = base_url+'/cart/view_caracteristicas'; 
var urlContrato       = base_url+'/cart/view_lastid'; 
var urlContratosave   = base_url+'/cart/save_contrato'; 
var urlProdeco        = base_url+'/cart/pro_decoracion'; 
var urlProtema        = base_url+'/cart/pro_tematica'; 
var urlProroom        = base_url+'/cart/pro_salon'; 
var urlPromenu        = base_url+'/cart/pro_menu'; 
var urlProartist      = base_url+'/cart/pro_artista'; 
var urlProtools       = base_url+'/cart/pro_tools'; 
var urlProductos      = base_url+'/cart/productos'; 
var svg_tick          = '';

$(document).ready(function() {

    $('.btn').tooltip();
    $('.bxslider').bxSlider({auto: true});
    $(".iframe").colorbox({iframe:true, width:"90%", height:"60%"});

    if(localStorage.getItem('doc_cliente') == null || localStorage.getItem('id_cliente') == null || localStorage.getItem('nombre_cliente') == null || localStorage.getItem('direccion_cliente') == null || localStorage.getItem('celular_cliente') == null || localStorage.getItem('tipo_evento') == null || localStorage.getItem('nombre_evento') == null || localStorage.getItem('fecha_evento') == null || localStorage.getItem('numero_invitados') == null)
    {
        $('.boton-cart').removeClass('view-cart');
        $('.boton-cart').addClass('view-cart-null');
    }
    else{
        $('.boton-cart').addClass('view-cart');
        $('.boton-cart').removeClass('view-cart-null');
    }
    $(document).on('click', '.view-cart-null', function(){
        alert('No hay ningun cliente seleccionado.');
    })

    $(document).on('keyup', '#ident-cliente', function(){
        doc_client = $(this).val();
        $.post(urlClient, {doc: doc_client}, function(data, textStatus, xhr) {
            datos = data.split('-');
            //console.log(datos.length-1);
            cliente_datos = datos[1].split('/');
            console.log(cliente_datos)
            if ($('#ident-cliente').val() != '') {
                /*setTimeout(function(){
                    $('#ident-cliente').val(cliente_datos[2]);
                },2000)*/
                $('#nombre-cliente').val(cliente_datos[1]);
                $('#direccion-cliente').val(cliente_datos[4]);
                $('#celular-cliente').val(cliente_datos[3]);
                $('#doc-cliente').val(cliente_datos[2]);
                $('#id-cliente').val(cliente_datos[0]);
                $('#id_cliente').val(cliente_datos[0]);

                //variable cliente
                localStorage.setItem("nombre_cliente", cliente_datos[1]);
            }
            else{
                $('#nombre-cliente').val('');
                $('#id_cliente').val('');
                $('#direccion-cliente').val('');
                $('#celular-cliente').val('');
                $('#doc-cliente').val('');
                $('#id-cliente').val('');
            }
        });
        
    });  

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
                    window.location.replace('/explorae/Admin/dlt_user/'+$id);
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
    $('#tipoEvento').hide();
    $(document).on('change', '.evento', function(){
        evento_val = $(this).val();
        $.post(urlEvento, {tipo: evento_val}, function(data, textStatus, xhr) {
            $('#tipoEvento').html(data);
            $('#tipoEvento').fadeIn();
            $('#tipo-evento').val(evento_val);
        });
        $('#tipoEvento').fadeIn();
    }) 


    //tipo producto
    $(document).on('change', '.caracteristica', function(){
        tip = $(this).val();
        if(tip == 'otro'){
            $('.alert-cart-add').show();
        }
        else{
           $('.alert-cart-add').hide(); 
        }
        $('.tipo-cart-add').val(tip);
    });

    //============================================
    //añadir producto al carrito
    //============================================
    $(document).on('click', '.add-cart', function(){
        id     = $(this).attr('data-id');
        tipo_p = $(this).attr('data-tipo');
        nombre = $(this).attr('data-nombre');
        precio = $(this).attr('data-precio');
        imagen = $(this).attr('data-img');
        cat    = $(this).attr('data-cat');

        $('.add-nombre-producto').text(nombre);
        $('.add-precio-producto span').text(precio);
        $('img.img-cart-add ').attr('src', imagen);


        $('.id-cart-add').val(id);
        $('.nombre-cart-add').val(nombre);
        $('.precio-cart-add').val(precio);
        $('.pro-cart-add').val(tipo_p);
        $('.cat-cart-add').val(cat);
        $('.img-cart-add').val(imagen);

        $('.add-item-cart').addClass(id+''+tipo_p);
        //verificar producto
        if(localStorage.getItem(id+''+tipo_p) != null){
            if ($('.add-item-cart').hasClass(localStorage.getItem(id+''+tipo_p))) {
                $('.add-item-cart').removeAttr('enabled', 'enabled');
                $('.add-item-cart').attr('disabled', 'disabled');
                $('.add-warning-cart').show();
            }
            else{
                $('.add-item-cart').removeAttr('disabled', 'disabled');
                $('.add-item-cart').attr('enabled', 'enabled');
                $('.add-warning-cart').hide();
            }
        }
        else{
            $('.add-item-cart').removeAttr('disabled', 'disabled');
            $('.add-item-cart').attr('enabled', 'enabled');
            $('.add-warning-cart').hide();
        }

        //consulta de las caracteristicas
        $.post(urlCaracteristica, {id_cat: id, tipo: tipo_p}, function(data, textStatus, xhr) {
            $('.cat-cart-add').html(data);
        });

        $('.cart-add-modal').fadeIn();
    });
    $(document).on('click', '.cancelar-add-cart', function(){
        //$('.cantidad-cart-add').val(1);
        //$('.comentario-cart-add').val('');
        $('.add-item-cart').removeClass(id+''+tipo_p);
        $('.add-item-cart').removeAttr('disabled', 'disabled');
        $('.add-item-cart').attr('enabled', 'enabled');
        $('.cart-add-modal').fadeOut(); 
        $('.alert-cart-add').hide(); 
    });


    //============================================
    //enviar cliente al carrito
    //============================================
    $(document).on('click', '.enviar-cliente', function(){
        localStorage.setItem("doc_cliente", $('#doc-cliente').val());
        localStorage.setItem("id_cliente", $('#id-cliente').val());
        localStorage.setItem("nombre_cliente", $('#nombre-cliente').val());
        localStorage.setItem("direccion_cliente", $('#direccion-cliente').val());
        localStorage.setItem("celular_cliente", $('#celular-cliente').val());
        localStorage.setItem("tipo_evento", $('#tipo-evento').val());
        localStorage.setItem("nombre_evento", $('.nombre_evento_select option:selected').html());
        localStorage.setItem("fecha_evento", $('#fecha-evento').val());
        localStorage.setItem("numero_invitados", $('#cantidad').val());
        window.location.replace(base_url);
    })


    //============================================
    //ver carrito
    //============================================
    $(document).on('click', '.view-cart', function(){
        //ver datos del cliente
        $('.carrito-nombre-cliente').text(localStorage.getItem("nombre_cliente"));
        $('.carrito-direccion-cliente').text(localStorage.getItem("direccion_cliente"));
        $('.carrito-celular-cliente').text(localStorage.getItem("celular_cliente"));
        $('.carrito-tipo-evento').text(localStorage.getItem("tipo_evento"));
        $('.carrito-nombre-evento').text(localStorage.getItem("nombre_evento"));
        $('.carrito-fecha-evento').text(localStorage.getItem("fecha_evento"));
        $('.carrito-cantidad-evento').text(localStorage.getItem("numero_invitados"));
        if(localStorage.getItem('num_item') == null || localStorage.getItem('num_item') == 0 || localStorage.getItem('num_item') == '0'){
            $('.save-cotizacion').removeAttr('enabled', 'enabled');
            $('.save-cotizacion').attr('disabled', 'disabled');
        }
        else{
            $('.save-cotizacion').removeAttr('disabled', 'disabled');
            $('.save-cotizacion').attr('enabled', 'enabled');
        }
        //ver productos
        for (var i = 1; i <= localStorage.getItem('active_item'); i++) {
            if(localStorage.getItem('item_'+i)){
                item_view = localStorage.getItem('item_'+i);
                list_item = item_view.split('|');
                pro  = '<tr>';
                pro += '<th class="cart-view-imagen-parent">';
                pro += '<img class="cart-view-imagen" src="'+list_item[5]+'" alt="">';
                pro += '</th>';
                pro += '<td><span class="cart-name-product">'+list_item[1]+'</span></td>';
                pro += '<td><span class="cart-tipo-product">'+list_item[8]+'</span></td>';
                pro += '<td><span class="cart-come-product">'+list_item[7]+'</span></td>';
                pro += '<td>$<span class="cart-precio-product">'+list_item[2]+'</span></td>';
                pro += '<td><span class="cart-cantidad-product">'+list_item[6]+'</span></td>'
                pro += '<td>$<span class="cart-subtotal-subtotal">'+(list_item[2]*list_item[6])+'</span></td>'
                pro += '<td><button data-pro="'+list_item[0]+''+list_item[3]+'" data-item="item_'+i+'" class="remove-item-cart btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button></td>'
                pro += '</tr>';
                $('.carrito-cotizacion').append(pro);
                //console.log(list_item);
            }
        };
        //-------------
        numero_cotizacion();
        total();
        $('.cart-view-modal').fadeIn();
    });
    var id_cot = '' 
    //guardar cotizacion 
    function numero_cotizacion(){
        $.post(urlContrato, {param1: 'value1'}, function(data, textStatus, xhr) {
            //console.log(data);
            if(data == ''){
                id_cot = 1; 
            }
            else{
                id_cot = parseInt(data)+1;
            }
            $('.num_cotirzacion').text(id_cot); 
        }); 
    }
    //===========================================================
    //guardar cotizacion
    //----
    $(document).on('click', '.save-cotizacion', function(){
        fec_evento     = localStorage.getItem('fecha_evento');
        fec_cotizacion = $('.fecha-cotizacion').text();
        tot_cotizacion = $('.total-cotizacion').text();
        id_clien       = localStorage.getItem('id_cliente');
        tip_evento     = localStorage.getItem('tipo_evento');
        nom_evento     = localStorage.getItem('nombre_evento');
        num_invitados  = localStorage.getItem('numero_invitados');
        //consulta cotizacion
        $.post(urlContratosave, {id_cotizacion: id_cot, fecha_evento: fec_evento, fecha_cotizacion: fec_cotizacion, total: tot_cotizacion, id_cliente: id_clien, tipo_evento: tip_evento, nombre_evento: nom_evento, numero_invitados: num_invitados}, function(data, textStatus, xhr) {
            //console.log(data);
        });
        //------------------------
        //ver productos
        setTimeout(function(){
        for (var a = 0; a <= localStorage.getItem('active_item'); a++) {
            if(localStorage.getItem('item_'+a)){
                item_view = localStorage.getItem('item_'+a);
                list_item = item_view.split('|');

                //------------
                //items
                $.post(urlProductos, {cantidad_item: list_item[6], caracteristica_item: list_item[8], item_id: list_item[0], cotizacion_id: id_cot, comentario_item: list_item[7], tipo_item: list_item[3]}, function(data_item, textStatus_d, xhr_d) {
                    //console.log(data_item); 
                    if(data_item == 1){
                        console.log('Bien');
                    }
                    else{
                       console.log('Mal'); 
                       //console.log(data_item); 
                    }
                });
                //console.log('Existe')
                //------------ 
            }
            else{
                //console.log('No existe')   
            }
        };
        },1000);
        $('.cart-view-modal').fadeOut();
        $('.alert-view-modal').fadeIn();
        $('.content-modal-alert').css({'top':'0px'});
        
        setTimeout(function(){
            $('.content-modal-alert h4').addClass('scale_out').text('Cotización Guardada.');
            $('.spinner_content').addClass('scale_out');
        },5000); 
        setTimeout(function(){
            $('.check').css('stroke-dashoffset', 0);
        },5200); 
        setTimeout(function(){
            $('.content-modal-alert h4').removeClass('scale_out');
        },5500); 
        setTimeout(function(){
            $('.content-modal-alert').css({'top':'-300px'});
            $('.alert-view-modal').fadeOut();
            remover_locales();
        },8000); 
        setTimeout(function(){
           //window.location.replace(base_url+'/asesor/admin_quote');
        },8500); 
        //-------------
        //---------------------
    })
    //===========================================================
    function remover_locales(){
        localStorage.clear();
    }
    //cerrar carrito
    $(document).on('click', '.cancelar-view-cart', function(){
        $('.carrito-cotizacion').html('');
        $('.cart-view-modal').fadeOut();
    });
     //============================================
    //añadir producto al carrito
    //============================================
    var item = 1;
    var active_item = 1;
    //añadir items al carrillo
    $(document).on('click', '.add-item-cart', function(){
        //asignar valores a campos
        $('.id-cart-add').val(id);
        $('.nombre-cart-add').val(nombre);
        $('.precio-cart-add').val(precio);
        $('.pro-cart-add').val(tipo_p);
        $('.cat-cart-add').val(cat);
        $('.img-cart-add').val(imagen);
        $('.add-item-cart').removeClass(id+''+tipo_p);
        cantidad_pro    = $('.cantidad-cart-add').val();
        comentario_pro  = $('.comentario-cart-add').val();
        tipo_cart       = $('.tipo-cart-add').val();
        console.log(cantidad_pro)
        console.log(comentario_pro)
        //datos producto
        producto = id+'|'+nombre+'|'+precio+'|'+tipo_p+'|'+cat+'|'+imagen+'|'+cantidad_pro+'|'+comentario_pro+'|'+tipo_cart;

        //inhabilitar producto y verificar
        localStorage.setItem($('.id-cart-add').val()+''+$('.pro-cart-add').val(), $('.id-cart-add').val()+''+$('.pro-cart-add').val());
        if (localStorage.getItem('num_item') == null) {
            localStorage.setItem('num_item', 1);
            localStorage.setItem('active_item', 1);
            $('.cart-cont').html('1');
        }
        else{
            item = localStorage.getItem('num_item');
            active_item = localStorage.getItem('active_item');
            item++;
            active_item++;
            localStorage.setItem('num_item', item);
            localStorage.setItem('active_item', active_item);
            $('.cart-cont').html(localStorage.getItem('num_item'));
        }
        $('.cart-add-modal').fadeOut(); 
        localStorage.setItem('item_'+active_item, producto);

        //console.log(localStorage.getItem('num_item'));
        //console.log(localStorage.getItem('active_item'));
        console.log(producto);
        setTimeout(function(){
           $('.cantidad-cart-add').val(1);
           $('.comentario-cart-add').val('');
        },2000);
        
    })
    //poner contador
    if(localStorage.getItem('num_item') == null){
        $('.cart-cont').html('0');
    }
    else{
        $('.cart-cont').html(localStorage.getItem('num_item'));
    }
    //remover item carrito
    $(document).on('click', '.remove-item-cart', function(){

        item_cod = $(this).attr('data-item');
        item_pro = $(this).attr('data-pro');
        var res = confirm('Esta seguro que desea quitar este elemento');
        if(res == true){
            num_item = localStorage.getItem('num_item');
            num_item = num_item-1;
            localStorage.setItem('num_item', num_item);
            $('.cart-cont').html(num_item);
            localStorage.removeItem(item_cod);
            localStorage.removeItem(item_pro);
            $(this).parent().parent().remove();
        }
        total();
        if(localStorage.getItem('num_item') == null || localStorage.getItem('num_item') == 0 || localStorage.getItem('num_item') == '0'){
            $('.save-cotizacion').removeAttr('enabled', 'enabled');
            $('.save-cotizacion').attr('disabled', 'disabled');
        }
        else{
            $('.save-cotizacion').removeAttr('disabled', 'disabled');
            $('.save-cotizacion').attr('enabled', 'enabled');
        }
    })
   
    function total(){
        total_t = 0;
        subtotales = $('.cart-subtotal-subtotal')
        //console.log(subtotales)
        
        for (var i = 0; i < localStorage.getItem('num_item'); i++) {
            total_t+=parseInt($(subtotales[i]).text());
        }
        $('.total-cotizacion').html(total_t);
    }

});
