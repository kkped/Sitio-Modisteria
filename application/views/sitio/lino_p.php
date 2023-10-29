
<!doctype html>
<html class="no-js" lang="es">
<head>
<title>Modisteria- Telas de Lino</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/template/sitio/images/favicon.png');?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/sitio/css/bootstrap.min.css');?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/sitio/css/style.css');?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/sitio/css/responsive.css');?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/sitio/css/custom.css');?>">


    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="p:domain_verify" content="f24fb1fe96c24ac8bf6beef0192ef878"/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
    <!-- modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- jquery JS -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>

    <!-- TrustBox script -->
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <!-- End TrustBox script -->

    <!-- time [34]: 2.5033950805664E-5<!-- time [68]: 8.1062316894531E-5<!-- time [82]: 0.00050902366638184<!-- time [93]: 0.049572944641113<!-- time [104]: 0.00040602684020996<!-- time [140]: 7.8678131103516E-6<!-- time [179]: 0.0016231536865234

<!-- HOST: www.deyute.com --><link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700|Roboto:900,300,100' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="themes/default/css/hover-min.css" media="screen" />

<!--<script type="text/javascript">
function redirectPage() {
    window.location = linkLocation;
}

$(document).ready(function() {
	/*
		Simple image gallery. Use default settings
	*/
    setTimeout(function(){ $('#div-loading').fadeOut(200); }, 200);


    $('a[href*=#]').on('click', function(event){
        if (this.hash != "" && this.hash != "#") {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 500);
        }
    });

    $("a").click(function(event){
        if ($(this).hasClass('nolink')) {
            event.preventDefault();
            event.stopPropagation();
            return false;
        }
        if (!$(this).hasClass('fancybox') && !$(this).hasClass('external_lnk')) {
            var ind_hash = window.location.href.indexOf("#");
            if (ind_hash < 0) ind_hash = window.location.href.length;
            var url_hash = (window.location.href.substr(0, ind_hash) + "#");
            if(this.href != "" && this.href.substr(0,url_hash.length) != url_hash) {
                event.preventDefault();
                linkLocation = this.href;
                $("#div-loading").fadeIn(200, redirectPage);
            }
        }
    });

	$('.login_input').focus(function(){
		var parent = $(this);
		parent.removeClass('login_input_error');
	});		

	$("ul.subnavegador").hide();
	$("ul.subnavegador.activo").show();				
	$("li.desplegable div").click(
	function() { 
		$("ul.subnavegador").slideUp('fast');
		var menu = $(this).parent().find("ul.subnavegador");
		
		if( menu.is(':visible') ){
			menu.slideUp('fast');
		}else{
			menu.slideDown('fast');
		}
	});
        
        
        $(window).scroll(function (event) {
            var scrollPos = $(document).scrollTop();

            if(scrollPos <= 112){               
                $('#zona_private').removeClass("before_fixed");
                $('#zona_private').removeClass("before_fixed");
            }
            else if(scrollPos > 112 && scrollPos < 124){               
                //$('#zona_private').removeClass("fixed");
                $('#zona_private').addClass("before_fixed");                
                $('#zona_private').addClass("before_fixed");                
            }
            if (scrollPos < 40) {                
                $('#bg_header').removeClass("fixed");                
                //$('#zona_private').removeClass("fixed");
                $('#change_conf_header').css('display', 'none');
                //$('#zona_private_header').css('display', 'none');
                $('#change_conf').css('display', 'block');
                $('#zona_private').css('display', 'block');                
            }
            else if(scrollPos >= 40){                                
                $('#bg_header').addClass("fixed");
                $('#zona_private').removeClass("before_fixed");
                $('#change_conf').removeClass("before_fixed");
                //$('#zona_private').addClass("fixed");
                $('#zona_private').css('display', 'none');
                $('#change_conf').css('display', 'none');
                $('#zona_private_header').css('display', 'block');                
                $('#change_conf_header').css('display', 'block');                
            }
        });

	$('ul.menu').superfish({ 
		delay:       100,                            // one second delay on mouseout 
		animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
		speed:       'normal',                          // faster animation speed 
		autoArrows:  false,                           // disable generation of arrow mark-up 
		dropShadows: false                            // disable drop shadows 
	});
	
	
	$('ul.menu li').hover( 
		function(){
			$(this).find( '.barra' ).addClass( 'hover' );
		},
		function(){
			$(this).find( '.barra' ).removeClass( 'hover' ); 
		}
	);

	
	});



function update_cart(){

    var _url = '/modules/catalogo/ajax/comprueba_stock_modelo.php';

    $.ajax({type: 'POST', dataType: 'json', async: false, url: _url, data: {updt_cart: 'yes'},
        success: function(data, textStatus, XMLhttpRequest)
        {
                if (data.error){

                    //Datos carro
                    var datos_recibidos = data.datos;
                    var datos_split     = datos_recibidos.split('::');

                    var num_art     = datos_split[0];
                    var precio_art  = datos_split[1];

                    //Asignamos los datos del listado artículos, hover carrito
                    $('.cart_down_area').html(data.mi_carrito);
                    $('#cont_btn_cart').html(data.boton_carrito);

                    $('#precio_art_carrito').html(precio_art);//Modificamos el precio del carrito de compra
                    $('.cart_zero.cart_zero1').html(num_art);//Modificamos el número de artíuclos del carrito de compra

                    $('a.trash').unbind('click').click(function ()
                    {
                        var that = $(this),
                                aux = that.attr('rel'),
                                aux1 = aux.split('_'),
                                articulo = aux1[0],
                                color = aux1[1],
                                talla = aux1[2];

                        jConfirm('info', {
                            title: '<p style="font-size: 18px; color: #000000;">Antención</p>',
                            content: '<p style="color: #000000;text-align:center;">Estás a punto de eliminar este artículo de tu carrito. ¿Estás seguro?</p>',
                            btnConfirm: 'Aceptar',
                            btnCancel: 'Cancelar',
                            onConfirm: function ()
                            {
                                that.parent().parent().fadeOut(200);
                                var data = {a: articulo, c: color, t: talla, action: 'delete'};
                                $.ajax({type: 'POST', dataType: 'json', async: false, url: '/modules/catalogo/ajax/add_modelos_pedido.php', data: data,
                                    success: function (data, textStatus, XMLHttpRequest)
                                    {
                                        location.reload();
                                    }
                                });
                            }
                        });
                    });
                }
        }
    });
}


function enviaPOSTdatos(url,div,msg){
   	abrePOP('<div class="loading-more"></div>',false);
   	$.ajax({
   		type: "POST",
        dataType: 'json',
   		url: url,
   		data: msg
   	}).done(function(result) {
		setTimeout('abrePOP("'+result.texto+'",true)',1000);
        $('#user_name').html(result.nombre_user);
  	});
}

function enviaPOST(url,div,msg){
    abrePOP('<div class="loading-more"></div>',false);
    $.ajax({
        type: "POST",
        url: url,
        data: msg
    }).done(function( result ) {
        setTimeout('abrePOP("'+result+'",true)',1000);
    });
}

function abrePOP(msg,closeBTN){
	$.fancybox('<div style="width:400px;text-align:center;"><h3 style="color: #000;">'+msg+'</h3></div>');
}

<! Funciones pedidos -->
function CountryValidation( idForm ){
    return true;
	var form = $(idForm);
	var obj = form.find('select[id=PAIS]');
	if( obj.val() != 73 ){
		abrePOP( "", true );
		obj.val(73);
		return false;
	}
}

function ProvinceValidation( idForm ){
    return true;
/*var form = $(idForm);
	var obj = form.find('select[id=PROVINCIA]');
	if( obj.val() == 7 || obj.val() == 35 || obj.val() == 38 || obj.val() == 51 || obj.val() == 52 ){
		abrePOP( "", true );
		obj.val(0);
		return false;
	}
}
<!-- !Funciones pedidos -->
</script>
<!-- Global site tag (gtag.js) - Google Analytics --
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1B7ER61C39"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1B7ER61C39');
  gtag('config', 'AW-998360323');
  gtag('config', 'UA-24268251-1');
</script>

<script>
	document.addEventListener("DOMContentLoaded", function() {
		console.log("DOM is ready for action");
		if(window.location.href.includes("/pago/es/respuesta/ok")){
			console.log("Purchase page");
			gtag('event', 'pagina_final_compra');
	}
	});
</script>    [if IE 7]>
    <link rel="stylesheet" href="themes/default/css/ie7.css" type="text/css" media="screen" />
    <![endif]-->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="themes/default/css/styles-ie.css" />
        <![endif]-->
    <!-- Facebook Pixel Code -->

                <meta property="og:url" content="https://www.deyute.com/producto/tela-lino-algodon/117">
                <meta property="og:type" content="website">
                <meta property="og:title" content="Tela de Lino | Deyute - Compartido desde www.deyute.com">
                
                <meta property="og:description" content="">
                <meta property="og:image" content="https://www.deyute.com/files/art/mx/Art-C1-N117.jpg" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon-large.png">
    
    <title>Tela de Lino | Deyute</title>
    <meta name="description" content="La Tela de Lino es una tela que viene de fibras naturales y que puede ser utilizada en múltiples sectores y productos. ¡100% natural y biodegradable!">
    <meta name="keywords" content="lino, proveedor de tela de lino, tejidos de lino, algodón, venta de tela de lino por metros">
    


    <script>
    <!-- twitter API -->
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    <!-- !twitter API -->
    </script>
    <!-- google+ API -->
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    <!-- !google+ API -->



</head>
<body>
<div id="div-loading" style=" position: fixed; width: 100%; height: 100%; background: url(img/loading.svg) center no-repeat #fff; z-index: 9999999; top: 0; left: 0"></div>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--Start Header area -->
<div class="home2_header_top_area">
    <script type="text/javascript">
        var timerFadeOut;
        $(document).ready(function () {


            //Click cambio configuración
            $('#change_conf_header').click(function(){
                $.ajax({ type: 'POST', dataType: 'json', async: false, url: '../../inc/change_configuration.php',
                    success: function( data, textStatus, XMLHttpRequest )
                    {
                        window.location.href = '/';
                    }
                });
            });

            $('form[id="search_form"]').submit(function () {
                if ($('input[id="buscador"]').val() == '' || $('input[id="buscador"]').val() == 'Buscar')
                {
                    return false;
                }
            });

            $('img[id="lookup"]').click(function ()
            {
                $('form[id="search_form"]').submit();
            });


            $('input[id="buscador"]').focus(function () {
                if ($(this).val() == 'Buscar')
                {
                    $(this).val('');
                }
            });
            $('input[id="buscador"]').blur(function () {
                if ($(this).val() == '')
                {
                    $(this).val('Buscar');
                }
            });

            //Actualizamos el carrito
            update_cart_cart();

            //Hover login: eventos nuevo user, user login y password olvidado. Listado artículos

            //Hover carrito
            $('li#carrito').mouseover(function(){
                clearTimeout(timerFadeOut);
                $('div#cart').stop().fadeIn('fast');
                $('div#data_user').stop().fadeOut('fast');
                $('div#data_newsletter').stop().fadeOut('fast');
            });
            $('li#carrito').mouseleave(function(){
                clearTimeout(timerFadeOut);
                timerFadeOut = setTimeout(function () {$('div#cart').stop().fadeOut('fast')}, 500);
            });
            //Hover user login
            $('li#user_login').mouseover(function(){
                clearTimeout(timerFadeOut);
                $('div#data_user').stop().fadeIn('fast');
                $('div#cart').stop().fadeOut('fast');
                $('div#data_newsletter').stop().fadeOut('fast');
            });
            $('li#user_login').mouseleave(function(){
                clearTimeout(timerFadeOut);
                timerFadeOut = setTimeout(function () {$('div#data_user').stop().fadeOut('fast')}, 500);
            });

            //Hover news data
            $('li#newsletter_login').mouseover(function(){
                clearTimeout(timerFadeOut);
                $('div#data_newsletter').stop().fadeIn('fast');
                $('div#cart').stop().fadeOut('fast');
                $('div#data_user').stop().fadeOut('fast');
            });
            $('li#newsletter_login').mouseleave(function(){
                clearTimeout(timerFadeOut);
                timerFadeOut = setTimeout(function () {$('div#data_newsletter').stop().fadeOut('fast')}, 500);
            });




            $('.btn-nuevo_cart').click(function(e){
            var email		= $('#nuevo_usuario_cart').val(),
                email_re	= $('#nuevo_usuario_re_cart').val(),
                pass		= $('#nuevo_pass_cart').val(),
                pass_re		= $('#nuevo_pass_re_cart').val(),
                nombre		= $('#nuevo_nombre_cart').val();

            if( nombre == "" )
            {
                $('#nuevo_nombre_cart').addClass('smart-input-error');
                $('#resultado_nuevo_cart').html('Insert your name, please.').fadeIn(900);
            } else if ( email == "" ) {
                $('#nuevo_usuario_cart').addClass('smart-input-error');
                $('#resultado_nuevo_cart').html('Insert contact e-mail, please.').fadeIn(900);
            } else if ( !valida_mail( email ) ) {
                $('#nuevo_usuario_cart').addClass('smart-input-error');
                $('#resultado_nuevo_cart').html('Insert valid e-mail, please.').fadeIn(900);
            } else if ( email_re == "" || !valida_mail( email ) || email != email_re ) {
                $('#nuevo_usuario_re_cart').addClass('smart-input-error');
                $('#resultado_nuevo_cart').html('Emails do not match.').fadeIn(900);
            } else if ( pass == "" ) {
                $('#nuevo_pass_cart').addClass('smart-input-error');
                $('#resultado_nuevo_cart').html('Insert password, please.').fadeIn(900);
            } else if ( !CheckUserName(pass) ) {
                $('#nuevo_pass_cart').addClass('smart-input-error');
                $('#resultado_nuevo_cart').html('Well!, the user already exists, try another name').fadeIn(900);
            } else if ( pass_re == "" || pass != pass_re ) {
                $('#nuevo_pass_re_cart').addClass('smart-input-error');
                $('#resultado_nuevo_cart').html('Passwords do not match.').fadeIn(900);
            }else{

                $.post("modules/tienda/process_login_cart.php", { n_email: ""+email+"", lg: "es" },
                    function(data) {
                        if (data)
                        {
                            $('#form_nuevo_cart').trigger("submit");
                        }else{
                            $('#resultado_nuevo_cart').html('E-mail exists, were do you already registered?.');
                            $("#resultado_nuevo_cart").slideDown('fast');
                        }
                    });
                }
        });

        $('.btn-recupera_cart').click(function(e){

            var mail = $('#recupera_usuario_cart').val();

            if( mail == "" )
            {
                $('#recupera_usuario_cart').addClass('smart-input-error');
                $('#resultado_ya_cart').html('Insert your e-mail address where you want us to send you the new password.').fadeIn(900);
            }else if(!valida_mail(mail)) {
                $('#recupera_usuario_cart').addClass('smart-input-error');
                $('#resultado_ya_cart').html('Email is invalid.').fadeIn(900);
            }else{
                enviaPOST('modules/tienda/pre_recupera_cart.php','resultado_recupera','e_mail='+mail+'&lg=es');
            }
        });

        $('.btn-ya_cart').click(function(e){
            var email = $('#ya_usuario_cart').val(),
                pass = $('#ya_pass_cart').val();

            if ( email=="" )
            {
                $('#ya_usuario_cart').addClass('smart-input-error');
                $('#resultado_ya_cart').html('Insert e-mail.').fadeIn(900);
            } else if (!valida_mail(email) ) {
                $('#ya_usuario_cart').addClass('smart-input-error');
                $('#resultado_ya_cart').html('Email is invalid.').fadeIn(900);
            } else if( pass=="" ) {
                $('#ya_pass_cart').addClass('smart-input-error');
                $('#resultado_ya_cart').html('Insert password.').fadeIn(900);
            } else {
                $('#form_ya_cart').trigger("submit");
            }
        });

        });

        function add_modelos_pedido_cart(modelo, color, talla, suela, precio, color_suela, cantidad_input, tipo_talla)
        {
            if (cantidad_input > 999999) return false;

            var total_pedido = parseFloat($('#total_pedido').val());
            var val_precio = parseFloat(precio.replace(",","."));

            mod_modelos_pedido_cart(modelo, color, talla, suela, precio, color_suela, cantidad_input, tipo_talla)
        }

        function mod_modelos_pedido_cart(modelo, color, talla, suela, precio, color_suela, cantidad_input, tipo_talla)
        {
            var cantidad_unica = cantidad_input;

            var data = {carrito: 'carrito', id_art: modelo, color_art: color, p: precio, talla_art: talla, suela: suela, color_suela: color_suela, cant_art: cantidad_unica, tipo_talla: tipo_talla};


            $.ajax({type: 'POST', dataType: 'json', async: false, url: '/modules/catalogo/ajax/add_modelos_pedido.php', data: data,
                success: function (data, textStatus, XMLHttpRequest)
                {
                    //window.location = '/sec/es/micarrito/1/';
                    window.location = '/checkout/';
                }
            });

            update_cart_cart();
        }
    function add_modelos_pedido_cart_trash(modelo, color, talla, suela)
    {
        var data = {a: modelo, c: color, t: talla, s: suela, action: 'delete'};
        $.ajax({type: 'POST', dataType: 'json', async: false, url: '/modules/catalogo/ajax/add_modelos_pedido.php', data: data,
            success: function (data, textStatus, XMLHttpRequest)
            {
                update_cart();
                //location.reload();
            }
        });

        //update_cart_cart();
    }

    function update_cart_cart(){

        var _url = '/modules/catalogo/ajax/comprueba_stock_modelo.php';

        $.ajax({type: 'POST', dataType: 'json', async: false, url: _url, data: {updt_cart: 'yes'},
            success: function(data, textStatus, XMLhttpRequest)
            {
                    if (data.error){
                        //Datos carro
                        var datos_recibidos = data.datos;
                        var datos_split     = datos_recibidos.split('::');

                        var num_art     = datos_split[0];
                        var precio_art  = datos_split[1];

                        //Asignamos los datos del listado artículos, hover carrito
                        $('#cart #content').html(data.mi_carrito);
                        $('#cont_btn_cart').html(data.boton_carrito);

                        $('#precio_art_carrito').html(precio_art);//Modificamos el precio del carrito de compra
                        $('#num_art_carrito').html(num_art);//Modificamos el número de artíuclos del carrito de compra
                    }
            }
        });
    }

    function muestra(div1,div2){
        $("#"+div1+"").slideDown('fast');
        $("#"+div2+"").slideUp('fast');
    }
    </script>

    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12 col-xs-12">
                
                                <!-- COUNTRY -->

                <!--Start logo area -->
                <div class="logo logo_border">
                    <a id="logo" href="/" title="home"><img src="/images/logo.png" alt="" /></a>
                </div>
                <!--End logo area -->
            </div>
            <div class="col-md-10 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12">
                        <!--Start Main menu area -->
                        <div class="main_menu main_menu_tb">
                            <ul id="nav_menu" class="active_cl nav_manu_lf">
                                <li class="ie7_noticias float">
                    <a href="/"  style="cursor: pointer;">Inicio</a>
                </li><li class="ie7_noticias float">
                    <a href="/es/el-yute-deyute"  style="cursor: pointer;">El yute</a>
                </li><li class="ie7_catalogo float">
                    <a href="/productos-deyute"class="menuon" > Tienda </a>
                </li><li class="ie7_contenidos float">
        <a href="/deyute-es"  >Deyute</a>
    </li><li class=" float">
							<a href="/noticias">Noticias</a>
						</li><li class="ie7_contactorotate float">
							<a href="/contacto" >Contacto</a>
						  </li>                            </ul>
                        </div>
                        <!--End Main menu area -->
                        <!--Start Account area -->
                        <div class="account_card_area account_cart_home2">
                            <ul id="account_nav">
                                <li style="padding-right: 20px;">
                                <br>            <a class="list_cl" href="/mi-cuenta" data-toggle="tooltip" data-placement="right" data-html="true" title="Identifícate"><i class="fa fa-user"></i> <span class="hidden-xs">Mi cuenta</span></a>

                                </li>
                                <li><a class="list_cl nolink" href="/checkout"><i class="fa fa-shopping-cart"></i><span class="cart_zero cart_zero1">0</span></a>
                                    <div class="cart_down_area">
                                        <div style="width:100%; text-align:center;"><p style="line-height: 140px;text-align:center;">Carrito vacío</p><input type="hidden" id="total_pedido" name="total_pedido" value="0" /></div>                                    </div>
                                </li>
                                <li style="border-left: 1px solid #afd363; border-right: 1px solid #afd363;"><a class="nolink list_cl" style="margin-right: 5px;" href="#"><i class="fa fa-search"></i></a>
                                    <!--Start Search area -->
                                    <div class="search_box_home2">
                                        <form action="#" name="myForm">
                                            <div class="search_box seach_box_home2_area">
                                                <input name="search" id="itp" class="input_text" type="text" placeholder="Buscar" style="width: auto;"/>
                                                <button type="submit" class="btn-search">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!--End Search area -->
                                </li>
                                                                <li><div style="position: relative; top: 20px;"><a href="#" class="sf-with-ul nolink" style="color: white;padding-top: 8px;
    position: relative;"><span style="display: inline-block;line-height: 20px;font-weight: bold; max-width: 13px; text-align: center;"><img src="/files/flags/es.png" alt="" style="vertical-align: baseline;"> ES</span></a><a href="/en/" class="idiomas" style="margin: 0 6px;padding-top: 8px;
    position: relative;"><span style="display: inline-block;line-height: 20px;font-weight: bold; color: #fff;max-width: 13px; text-align: center;"><img src="/files/flags/gb.png" alt="" style="vertical-align: baseline;"> EN</span></a>
                                                <a href="/fr/" class="idiomas" style="margin: 0 6px;padding-top: 8px;
    position: relative;"><span style="display: inline-block;line-height: 20px;font-weight: bold; color: #fff;max-width: 13px; text-align: center;"><img src="/files/flags/fr.png" alt="" style="vertical-align: baseline;"> FR</span></a>
                                                <a href="/it/" class="idiomas" style="margin: 0 6px;padding-top: 8px;
    position: relative;"><span style="display: inline-block;line-height: 20px;font-weight: bold; color: #fff;max-width: 13px; text-align: center;"><img src="/files/flags/it.png" alt="" style="vertical-align: baseline;"> IT</span></a>
                                                </div></li>
                            </ul>
                        </div>
                        <!--End Account area -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--start Mobile Menu area -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li class="ie7_noticias float">
                    <a href="/"  style="cursor: pointer;">Inicio</a>
                </li><li class="ie7_noticias float">
                    <a href="/es/el-yute-deyute"  style="cursor: pointer;">El yute</a>
                </li><li class="ie7_catalogo float">
                    <a href="/productos-deyute"class="menuon" > Tienda </a>
                </li><li class="ie7_contenidos float">
        <a href="/deyute-es"  >Deyute</a>
    </li><li class=" float">
							<a href="/noticias">Noticias</a>
						</li><li class="ie7_contactorotate float">
							<a href="/contacto" >Contacto</a>
						  </li>                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Mobile Menu area -->
</div>

<!--End Header area -->﻿

<style>
    .star_big {
        vertical-align: sub;
    }
</style>


<!-- Start preview Product details area -->
<div class="blog_single_view_area">
    <div class="container" style="margin-bottom: 80px;">
        <h3 style="color: #7d7d7d;">Telas de lino</h3>        <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                <div class="my_tabs">
                    <div class="tab-content tab_content_style">
                        <div id="tab0" class="tab-pane fade in active">
                        <div class="product_tabs" style="text-align: center;">
                            <a class="fancybox" href="/files/art/gl/Art-C1-N117.jpg" data-fancybox-group="gallery" title="Tela de lino de 564 gr/m2 317cm ancho"><img src="/files/art/mx/Art-C1-N117.jpg" alt="" style="max-height:580px; width:auto; max-width: 100%;" /></a>
                        </div>
                    </div><div id="tab1" class="tab-pane fade in">
                        <div class="product_tabs" style="text-align: center;">
                            <a class="fancybox" href="/files/art/gl/Art-C1-N117-02.jpg" data-fancybox-group="gallery" title="Tela de lino de 564 gr/m2 317cm ancho"><img src="/files/art/mx/Art-C1-N117-02.jpg" alt="" style="max-height:580px; width:auto; max-width: 100%;" /></a>
                        </div>
                    </div>                    </div>
                    <div class="blog_view_list">
                        <ul class="tab_style tab_bottom">
                            <li style="display: inline-block !important;"><div class="blog_single_carousel active">
                        <a data-toggle="tab" href="/producto/tela-lino-algodon/117#tab0"><img src="/files/art/mn/Art-C1-N117.jpg" alt="" style="max-width: 120px;max-height: 100px;width: auto;height: auto;" /></a>
                    </div></li> <li style="display: inline-block !important;"><div class="blog_single_carousel">
                        <a data-toggle="tab" href="/producto/tela-lino-algodon/117#tab1"><img src="/files/art/mn/Art-C1-N117-02.jpg" alt="" style="max-width: 120px;max-height: 100px;width: auto;height: auto;" /></a>
                    </div></li>                             <li style="float:right;width: 330px;display: inline-block !important;"><a class="fancybox" href="/images/iconos-ecologicos.jpg" data-fancybox-group="none" title="ecologicos"><img src="/images/iconos-ecologicos.jpg" style="height: 70px;margin-top: 10px;"></a></li>
                        </ul>
                    </div>
                </div>
                <div id="comentarios" class="hidden-xs">
                    <h3 style="color: black;">OPINIONES DE CLIENTES</h3>
<h5 style="text-align: center;">Aun no tenemos valoraciones para este producto.<br>Sé el primero en dejar una valoración.</h5>                    <form name="valora" id="valora" method="POST">
                        <ul class="register_form">
                            <li>Nombre o nick: <span>*</span></li>
                            <li>
                                <div class="input_content">
                                    <input type="text" name="nombre" id="nombre" value="" class="email_test">
                                </div>
                            </li>

                            <li>Email (No se publicará): <span>*</span></li>
                            <li>
                                <div class="input_content">
                                    <input type="text" name="email" id="email" value="" class="email_test">
                                </div>
                            </li>

                            <li>Comentarios: <span>*</span></li>
                            <li>
                                <textarea name="texto_valoracion" id="texto_valoracion" class="email_test" style="border-color: #e5e5e5; background: #f0f0f0; width: 100%; padding: 10px;height: 150px;"></textarea>
                            </li>
                            <li>Valoración: <span>*</span></li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <span class="event_star star_big star_animate" data-starnum="0"><i></i></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="g-recaptcha" data-sitekey="6LdZ1iMUAAAAADCSDprlWbHizsKx-xYc4DWaDOYX"></div><br>
                                    </div>
                                </div>
                            </li>
                            <li><h2><span>*</span>Campos obligatorios</h2></li>
                            <li>
                                <div class="create_button_area"><span style="line-height: 40px;">&nbsp;</span>
                                    <button type="button" class="create_button btn-action btn-nuevo-comentario" style="float: right;">Enviar valoración</button>
                                </div>
                            </li>
                        </ul>
                        <input type="hidden" name="stars" id="stars" value="0">
                    </form>

                </div>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12" style="overflow:hidden;">
                <div class="blog_product_details">
                    <h5 style="text-transform: none; text-align: center; font-weight: bold; color: #000; line-height: 24px;">Tela de lino de 564 gr/m2 317cm ancho</h5>
                    <p style="color: #9c9c9c;">
                    <input type="hidden" id="color" name="color" value="   ">
                    <p>Esta <span>tela de lino</span> de 564 gr, se fabrica en <span>ancho de 317 cm</span>. Compuesta de algodón en un 90%, siendo el 10% restante de lino. Cabe la posibilidad de fabricar este <span>tejido de lino</span> en un ancho distinto. Se ofrece en rollos de lino de 10 m, 25 m, 50 m, o 100 m de largo, pudiendo hacer cualquier otra medida de longitud que nos solicite. También tenemos la opción de la <span>venta de tela de lino</span> por metros.</p>
<p>Si busca un <span>proveedor de tela de lino</span> de garantía, no dude en consultar <u><a href="https://www.deyute.com/productos-deyute/lino/tela-lino">nuestra extensa gama de tejidos de lino</a></u>. Sectores en los que esta referencia se puede utilizar: automoción, calzado, <span>construcción</span>, obra pública, cortinas, visillos, mantelería, decoración, agricultura, jardinería, etc. Los tratamientos que podemos aplicar a nuestros tejidos son, entre otros: tintado (a partir de 280 gr), cardado, planchado, chamuscado, hidrofugado, ignifugado, calandrado, suavizado, lavado, bordado, <span>aprestado</span>, engomado, rameado, doblado, estampado, oxigenado o engrasado, laminado, poner papel, antibacterias, antiestáticos, aromatizados, embolsado y corte en piezas de 25 mts de ancho.</p>
<p>Nuestras <span>telas de lino</span> son totalmente naturales y biodegradables, cumpliendo con nuestro objetivo de mejorar el medio ambiente.</p>
<p><span>Pedido mínimo 300 mts</span></p>
<p>
  <br>
</p>
<p><strong>IVA incluido</strong> en el precio. <strong>Transporte no incluido</strong>.</p>
<p>Puede consultar nuestras condiciones generales de venta en el siguiente enlace 
  <a data-fr-linked="true" href="https://www.deyute.com/7/condiciones-generales-de-venta">https://www.deyute.com/7/condiciones-generales-de-venta</a>.
</p>                    </p>
                    <!--div class="product_rating">
                                            </div>
                    <div class="product_rating">
                        <a href="/producto/tela-lino-algodon/117#div-valoraciones" class="link_valoraciones">0 valoraciones <span>I</span></a>
                        <a href="/producto/tela-lino-algodon/117#div-valoraciones" class="link_valoraciones"> Sé el primero en valorar este producto</a>
                    </div -->
                    <div class="product_blog_button ">
                        <!-- div class="cart_blog_details blog_icon_border">
                            <a href="" target="blank"><i class="fa fa-heart-o"></i></a>
                        </div -->
                        <div class="cart_blog_details blog_icon_border">
                            <a href="http://www.facebook.com/sharer.php?s=100&p[url]=https://www.deyute.com/producto/tela-lino-algodon/117&p[title]=deyute.com&p[images][0]=http%3A%2F%2Fwww.deyute.com%2F%2Ffiles%2Fart%2Fmx%2FArt-C1-N117.jpg&p[summary]=+.+Tela+de+lino+de+564+gr+con+un+ancho+de+160+cm+.+" class="external_lnk" target="_blank"><img src="/images/facebook.jpg" height="24"></a>
                        </div>
                        <div class="cart_blog_details blog_icon_border">
                            <a href="http://twitter.com/share?text=deyute.com&url=https%3A%2F%2Fwww.deyute.com%2Fproducto%2Ftela-lino-algodon%2F117" class="external_lnk" target="_blank"><img src="/images/twitter.jpg" height="24"></a>
                        </div>
                        <div class="cart_blog_details blog_icon_border">
                            <a href="https://plus.google.com/share?url=https%3A%2F%2Fwww.deyute.com%2Fproducto%2Ftela-lino-algodon%2F117" class="external_lnk" target="_blank"><img src="/images/google-plus.jpg" height="24"></a>
                        </div>
                    </div>
                    <div class="worldwide-shipping"><img src="/img/worldwide-shipping.png" style="max-width: 100%;"></div>
                    <div class="pricing_rate">
                        <!-- p class="stack">Disponibilidad:<span class="in-stock"> 0 unidades</span></p -->
                        <p class="rating_dollor rating_margin" style="color: #000 !important; text-transform: none !important; text-align: center;margin-top:80px;"><span class="rating_value_two" style="color: #000 !important; text-transform: none; text-align: center;"><div class="add-to-cart" style="min-height: 140px;"><div id="boton_al_carrito_disabled" class="fixed-block" style="margin-top: -15px;float: right;width: 100%;margin: 0; display:none;"><div class="morph-button morph-button-inflow morph-button-inflow-2 cart_button"><button type="button"><span>Consulte precio</span></button><div class="morph-content"><div><div class="content-morph-link"><a class="link-morph link-phone nolink" href="tel:+34 96 668 04 55"><i class="fa fa-phone"></i> <span>por teléfono<br><small>+34 96 668 04 55</small></span></a><a class="link-morph link-email" href="/contacto"><i class="fa fa-envelope"></i> <span>por email</span></a></div></div></div></div></div></div></span></p>
                    </div>
                </div>
                <div class="product_options_area">
                </div>
                <div id="comentarios" class="visible-xs">
                    <h3 style="color: black;">OPINIONES DE CLIENTES</h3>
<h5 style="text-align: center;">Aun no tenemos valoraciones para este producto.<br>Sé el primero en dejar una valoración.</h5>                    <form name="valora2" id="valora2" method="POST">
                        <ul class="register_form">
                            <li>Nombre o nick: <span>*</span></li>
                            <li>
                                <div class="input_content">
                                    <input type="text" name="nombre2" id="nombre2" value="" class="email_test">
                                </div>
                            </li>

                            <li>Email (No se publicará): <span>*</span></li>
                            <li>
                                <div class="input_content">
                                    <input type="text" name="email2" id="email2" value="" class="email_test">
                                </div>
                            </li>

                            <li>Comentarios: <span>*</span></li>
                            <li>
                                <textarea name="texto_valoracion2" id="texto_valoracion2" class="email_test" style="border-color: #e5e5e5; background: #f0f0f0; width: 100%; padding: 10px;height: 150px;"></textarea>
                            </li>
                            <li>Valoración: <span>*</span></li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <span class="event_star star_big star_animate" data-starnum="0"><i></i></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="g-recaptcha" data-sitekey="6LdZ1iMUAAAAADCSDprlWbHizsKx-xYc4DWaDOYX"></div><br>
                                    </div>
                                </div>
                            </li>
                            <li><h2><span>*</span>Campos obligatorios</h2></li>
                            <li>
                                <div class="create_button_area"><span style="line-height: 40px;">&nbsp;</span>
                                    <button type="button" class="create_button btn-action2 btn-nuevo-comentario" style="float: right;">Enviar valoración</button>
                                </div>
                            </li>
                        </ul>
                        <input type="hidden" name="stars2" id="stars2" value="0">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End preview Product details area -->
<!-- Start Product details tabs area -->




<script src="/js/classie.js"></script>
<script src="/js/uiMorphingButton_inflow.js"></script>
<link rel="stylesheet" href="/lib/star_rate/voteStar.css">
<script src="/lib/star_rate/jquery.voteStar.js"></script>

<script>
    (function() {   
        //new UIMorphingButton( document.querySelector( '.morph-button' ) );


        var el = document.querySelector( '.morph-button' );
        
        new UIMorphingButton( el, {
            closeEl : '.link-morph'
        } );

        $('.btn-action').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            var nick = $('#nombre').val();
            if (nick.trim() == '') {
                jAlert('info', 
                        {
                            title:'Atención', 
                            content: 'Debes indicar tu <strong>nombre</strong> o nick.',
                            onClose: function() {
                                $('#nombre').focus();
                            }
                        });
                return false;
            } 
            var email = $('#email').val();
            if (email.trim() == '' || !valida_mail(email)) {
                jAlert('info', 
                        {
                            title:'Atención', 
                            content: 'Debes indicar un <strong>email válido</strong>.',
                            onClose: function() {
                                $('#email').focus();
                            }
                        });
                return false;
            } 
            var comentarios = $('#texto_valoracion').val();
            if (comentarios.trim() == '') {
                jAlert('info', 
                        {
                            title:'Atención', 
                            content: 'El <strong>comentario</strong> no puede estar vacío.',
                            onConfirm: function() {
                                $('#texto_valoracion').focus();
                            }
                        });
                return false;
            } 
            var valoracion = $('#stars').val();

            if ($('#g-recaptcha-response').val() == '') {
                jAlert('info', {title:'Atención', content: 'Debemos verificar que <strong>eres humano</strong>.<br>Marca la casilla con el texto <strong>\"No soy un robot\"</strong>.'} );
                return false;
            }

            jConfirm( 'info', {
                title: '<p style="color: #000000;">¡¡Atención!!</p>',
                content: '<p style="color: #000000;">Te dispones a publicar este comentario<br>¿Estás seguro?</p>',
                btnConfirm: '<p style="margin: -6px;">Publicar comentario</p>',
                btnCancel: '<p style="margin: -6px;">Cancelar</p>',
                onConfirm: function(){
                    $.ajax({ 
                        type: 'POST', 
                        dataType: 'json', 
                        async: false, 
                        url: '/modules/catalogo/ajax/valora.php', 
                        data: { 
                                'id_art': '117', 
                                'nick': nick, 
                                'email': email,
                                'comentarios': comentarios,
                                'g-recaptcha-response': $('#g-recaptcha-response').val(),
                                'valoracion': valoracion 
                            },
                        success: function( data, textStatus, XMLHttpRequest )
                        {
                            if (data.result != "E") {
                                jAlert('info', {title:'Atención', content: 'El comentario se ha enviado y está pendiente de aprobación.<br>Vamos a revisarlo y lo publicaremos lo antes posible.'} );
                                $('#valora').trigger("reset");
                            } else {
                                jAlert('info', {title:'Vaya!!', content: '¿Estás seguro de que eres un humano?.'} );
                            }
                        }
                    });
                }
            });
            return false;
        })


        $('.btn-action2').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            var nick = $('#nombre2').val();
            if (nick.trim() == '') {
                jAlert('info', 
                        {
                            title:'Atención', 
                            content: 'Debes indicar tu <strong>nombre</strong> o nick.',
                            onClose: function() {
                                $('#nombre2').focus();
                            }
                        });
                return false;
            } 
            var email = $('#email2').val();
            if (email.trim() == '' || !valida_mail(email)) {
                jAlert('info', 
                        {
                            title:'Atención', 
                            content: 'Debes indicar un <strong>email válido</strong>.',
                            onClose: function() {
                                $('#email2').focus();
                            }
                        });
                return false;
            } 
            var comentarios = $('#texto_valoracion2').val();
            if (comentarios.trim() == '') {
                jAlert('info', 
                        {
                            title:'Atención', 
                            content: 'El <strong>comentario</strong> no puede estar vacío.',
                            onConfirm: function() {
                                $('#texto_valoracion2').focus();
                            }
                        });
                return false;
            } 
            var valoracion = $('#stars').val();

            if ($('#g-recaptcha-response-1').val() == '') {
                jAlert('info', {title:'Atención', content: 'Debemos verificar que <strong>eres humano</strong>.<br>Marca la casilla con el texto <strong>\"No soy un robot\"</strong>.'} );
                return false;
            }

            jConfirm( 'info', {
                title: '<p style="color: #000000;">¡¡Atención!!</p>',
                content: '<p style="color: #000000;">Te dispones a publicar este comentario<br>¿Estás seguro?</p>',
                btnConfirm: '<p style="margin: -6px;">Publicar comentario</p>',
                btnCancel: '<p style="margin: -6px;">Cancelar</p>',
                onConfirm: function(){
                    $.ajax({ 
                        type: 'POST', 
                        dataType: 'json', 
                        async: false, 
                        url: '/modules/catalogo/ajax/valora.php', 
                        data: { 
                                'id_art': '117', 
                                'nick': nick, 
                                'email': email,
                                'comentarios': comentarios,
                                'g-recaptcha-response': $('#g-recaptcha-response-1').val(),
                                'valoracion': valoracion 
                            },
                        success: function( data, textStatus, XMLHttpRequest )
                        {
                            if (data.result != "E") {
                                jAlert('info', {title:'Atención', content: 'El comentario se ha enviado y está pendiente de aprobación.<br>Vamos a revisarlo y lo publicaremos lo antes posible.'} );
                                $('#valora').trigger("reset");
                            } else {
                                jAlert('info', {title:'Vaya!!', content: '¿Estás seguro de que eres un humano?.'} );
                            }
                        }
                    });
                }
            });
            return false;
        })

        $('.event_star').voteStar({
            moveStar:true,
            starLength: 5,
            precise:true,
            starAnimate:true,
            callback: function (starObj, starNum){
                $('#stars').val(starNum);
            }
        })
        
    })();
</script>

<script type="text/javascript">

    function add_modelos_pedido()
    {
        var articulo        = '117';
        var color           = '   ';
        var cant_art        = parseInt($('#cant_art').val());

        $('#cant_art').removeClass('border_error');
        if(isNaN(cant_art) || cant_art < 0){
            $('#cant_art').addClass('border_error');
            jAlert('info', {title:'Atención', content: 'La cantidad de artículos debe ser un número mayor de 0.'} );
        } else if(cant_art != 0){
            $.ajax({ type: 'POST', dataType: 'json', async: false, url: '/modules/catalogo/ajax/add_modelos_pedido.php', data: { id_art: articulo, color_art: color, cant_art: cant_art },
                    success: function( data, textStatus, XMLHttpRequest )
                    {
                        if (typeof fbq != "undefined")
                            fbq('track', 'AddToCart');
                        jConfirm( 'info', {
                                title: '<p style="color: #000000;">Gracias</p>',
                                content: '<p style="color: #000000;">El artículo seleccionado se ha añadido a su carrito</p>',
                                btnConfirm: '<p style="margin: -6px;">Terminar y pagar</p>',
                                btnCancel: '<p style="margin: -6px;">Continuar comprando</p>',
                                onConfirm: function(){
                                    window.location = '/checkout/order';
                                }
                        });

                        $('button.btn_comprar.btnCancel').click(function(){
                            window.location = '/productos-deyute';
                        });

                        $('#cant_art').removeClass('border_ok_cantidad');
                            $('#cant_art').val('1');

                        update_cart();
                        $('#cant_art').trigger("keyup");
                    }
            });
        }
    }

    

    function update_prepedido( cantidad, precio, hay_stock )
    {
        if (!hay_stock) return false;

        var color = $('#color').val();
        var o_talla_cantidad = $('input[name="cantidad_'+talla+'"]'),
            o_total_cantidad = $('span[id="cant_total"]'),
            o_total_pedido = $('span[id="precio_total"]'),
            old_talla_cantidad = parseFloat(o_talla_cantidad.val()),
            new_talla_cantidad = old_talla_cantidad + parseFloat(cantidad);
        new_talla_cantidad = new_talla_cantidad < 0 ? 0 : new_talla_cantidad;
        o_talla_cantidad.val(new_talla_cantidad);

            var _url = '/modules/catalogo/ajax/comprueba_stock_modelo.php';

            var cantidades = "";
            $('table.tallas-precios-stock > tbody > tr.cant').each(function()
            {
                o_aux = $(this).find('input[name^="cantidad"]');
                var aux_cantidad = parseFloat(o_aux.val());
                cantidades += aux_cantidad + ";";
            });
            $('.cantidades').val(cantidades);

            var surtidos = $('input[name="surtidos"]').val(),
                cantidades = $('input[name="cantidades"]').val();


        //$.ajax({ type:'POST', dataType: 'json', async: false, url: _url, data: {a: '117', c: color, p: precio, t: talla, q: new_talla_cantidad},
            $.ajax({type: 'POST', dataType: 'json', async: false, url: _url, data: {a: '117', c: color, p: precio, q: new_talla_cantidad, surtidos: surtidos, cantidades: cantidades},
            success: function(data, textStatus, XMLhttpRequest)
            {
                if (data.error)
                {
                    jAlert('info', {title:'Notice', content: data.msg} );
                    o_talla_cantidad.val(data.cantidad);
                }
            }
        });

        var total_cantidad = 0,
            total_precios = 0,
            cantidades = "";

        $('table.tallas-precios-stock > tbody > tr.cant').each(function()
        {
            o_aux = $(this).find('input[name^="cantidad"]');
            var aux_cantidad = parseFloat(o_aux.val()),
                    aux_precio = parseFloat(o_aux.attr('rel'));
            total_cantidad += aux_cantidad;
            total_precios += (aux_cantidad * aux_precio);
            cantidades += aux_cantidad + ";";
        });


        o_total_cantidad.html(total_cantidad);

        if(total_precios == 0){
            o_total_pedido.html(total_precios);
        }
        else{
            o_total_pedido.html(format_number(total_precios, 2, ",", "."));
        }
        $('.cantidades').val(cantidades);

    }

    function formateaprecio (cant) {
        
        if (!isNaN(cant)) {
            cant = Math.round(cant * 100) / 100;
            var ent = cant.toString().split('.')[0];
            var dec = cant.toString().split('.')[1];
            if (typeof(dec) == "undefined" || dec == "") dec = "00";
            if (dec.length == 1) dec += "0";

            return ent + "'<sup>" + dec + "</sup> €";
        } else 
            return 'Consulte precio';//"<span class='pvp'>0'<sup>0</sup> €</span>";
    }

    function dame_pvp_escalonado (unidades) {
        var cant_relacionados = parseFloat($('#cant_comprada').val());
        if (isNaN(cant_relacionados)) cant_relacionados = 0;
        unidades = parseFloat(unidades) + parseFloat(cant_relacionados);
        var aux = $('#pvp_esc').val().split('|');
        var pvp_act = pvp_ant = 0;
        for (var i = aux.length-1; i >= 0 ; i--) {
            var aux2 = aux[i].split(';');
            if (aux2[1] == "C") {
                pvp_act = aux2[1];
            } else {
                pvp_act = parseFloat(aux2[1]);
            }
            if (unidades == 0 && aux2[1] != "C") {
                break;
            }
            if (parseInt(unidades) >= parseInt(aux2[0])) {
                break;
            }
        }
        $('#pvp_art').val(pvp_act);
        $('#pvp_act').html(formateaprecio(pvp_act));
        $('#pvp_act_prev').html(formateaprecio(pvp_act));

        if (pvp_act == "C") {
            $('#div_total_art').css("visibility", "hidden").css("max-width", "1px");
            $('#boton_al_carrito').css("display", "none");
            $('#boton_al_carrito_disabled, .info-consultar').css("display", "block");
        } else {
            $('#div_total_art').css("visibility", "visible").css("max-width", "");
            $('#boton_al_carrito_disabled, .info-consultar').css("display", "none");
            $('#boton_al_carrito').css("display", "block");
        }
        return pvp_act;
    }

    var max_cant = 999999;

    $(document).ready( function() {
        //Inicializamos el carousel
        $("#owl-carousel").owlCarousel({
            loop:true,
            margin:10,
            items: 3
        });
        //Botones carousel next y prev
        $(".owl-btn-next").click(function(){
            $("#owl-carousel").trigger('next.owl.carousel');
        });
        $(".owl-btn-prev").click(function(){
            $("#owl-carousel").trigger("prev.owl.carousel");
        });

        $('.link_valoraciones').click(function(e) {
            e.preventDefault();
            $('[href="/producto/tela-lino-algodon/117#div-valoraciones"]').tab('show');
            setTimeout(function () {
                $('html,body').animate({scrollTop:$('#div-valoraciones').offset().top}, 500);
            }, 500);

        });

        //Hover carousel artículos similares
        $('.art-box').hover(function(){
            //imagen no hover
            var url_img_no_hover = $(this).find('a').find('div.image').find('img').attr('src');
            //imagen hover
            var url_img_hover = $(this).find('.hidden_hover').val();
            //Ponemos la imagen hover en el div del artículo y la guardamos al imagen normal en el campo hidden
            $(this).find('a').find('div.image').find('img').attr('src', url_img_hover);
            $(this).find('.hidden_hover').val(url_img_no_hover);

            //Mostramos el precio del artículo
            $(this).find('div.precio_articulo').css('display','block');
        }, function(){
            //imagen no hover
            var url_img_no_hover = $(this).find('.hidden_hover').val();
            //imagen hover
            var url_img_hover = $(this).find('a').find('div.image').find('img').attr('src');
            //Ponemos la imagen normal en el div del artículo y la guardamos al imagen hover en el campo hidden
            $(this).find('a').find('div.image').find('img').attr('src', url_img_no_hover);
            $(this).find('.hidden_hover').val(url_img_hover);

            //Ocultamos el precio del artículo
            $(this).find('div.precio_articulo').css('display','none');
        });


        //Botones más / menos cantidad
        $('.mas_art').click(function(e){
            e.preventDefault();
            if($('#cant_art').hasClass('border_error')){
                $('#cant_art').removeClass('border_error');

                if($('#error_add_carrito').find('p.error_cant')){
                    $('#error_add_carrito').fadeOut();
                }
            }

            var cant_art_ini = parseInt($('#cant_art').val());
            if (isNaN(cant_art_ini)) cant_art_ini = 0;
            if (cant_art_ini >= max_cant) return false;
            var cant_art = cant_art_ini + 1;

            $('#cant_art').val(cant_art);
            if($('#cant_art').val() > 0) {
               $('#cant_art').addClass('border_ok_cantidad');
            }
            $('#total_art').html(formateaprecio($('#cant_art').val() * $('#pvp_art').val()));
        });
        $('.menos_art').click(function(e){
            e.preventDefault();
            var cant_art_ini = parseInt($('#cant_art').val());
            if (isNaN(cant_art_ini)) cant_art_ini = 2;
            var cant_art = cant_art_ini - 1;

            if(cant_art <= 0)
                cant_art = 1;

            $('#cant_art').val(cant_art);

            if($('#cant_art').hasClass('border_ok_cantidad') && cant_art == 0) {
                $('#cant_art').removeClass('border_ok_cantidad');
            }
            $('#total_art').html(formateaprecio($('#cant_art').val() * $('#pvp_art').val()));
        });

        $('#cant_art').keyup(function (e) {
            if (typeof($('#pvp_esc').val()) != "undefined")
                dame_pvp_escalonado($('#cant_art').val());
            $('#total_art').html(formateaprecio($('#cant_art').val() * $('#pvp_art').val()));
        })

        //Botón añadir al carrito
        $('#boton_al_carrito').click(function(){
            add_modelos_pedido();
        });
        //Manejo Tabs
        $('.tabs .tab-links a').on('click', function(e) {
            var currentAttrValue = $(this).attr('href');

            // Show/Hide Tabs
            $('.tabs ' + currentAttrValue).show().siblings().hide();

            // Change/remove current tab to active
            $(this).parent('li').addClass('active').siblings().removeClass('active');

            e.preventDefault();
        });

        $('ul.thumbnail li img').click(function(){
            var img = $(this),
                picture = $('#pic_tu_re');
            var aux = img.attr("rel").split("|");
            var image = aux[0];
            var id_imagen = aux[1];
                    //$("a.guia_tallas").css('visibility', 'hidden');
                    picture.animate({opacity:0}, 400,
                            function(){
                                if(navigator.appVersion.indexOf("MSIE")!=-1) {
                                    $(this).attr('src', image);
                                    $("a.guia_tallas").attr('href', image);
                                    $(this).animate({opacity:1}, 400);
                                    $("a.guia_tallas").css('visibility', 'visible');
                                } else {
                                    $.ajax({
                                        'url' : image,
                                        'cache': true,
                                        'processData' : false
                                    }).done(function(){
                                        picture.attr('src', image);
                                    });
                                }
                            }
                    );
        });

        $('#pic_tu_re').load(function() {
            $(this).animate({opacity:1}, 400);
        })


        $('.link-phone').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            document.location.href = $(this).attr("href");
            //window.open($(this).attr("href"), "");
        })

        $('#boton_al_carrito_disabled').css("display", "block");        


    });
</script>

<script type="text/javascript">
    if (typeof fbq != "undefined")
        fbq('track', 'ViewContent');
</script>

<!--Start Footer area -->
<div class="footer_area">
    <div class="container">
        <div class="row" style="margin-top: 40px;">
            <div class="col-sm-12" style="text-align:center;">
                <a href="https://www.facebook.com/Deyute" target="_blank" class="link-red"><img class="lazyload ico_red" data-src="images/icono-facebook.png"></a>
                <a href="https://twitter.com/DEYUTE" target="_blank" class="link-red"><img class="lazyload ico_red" data-src="images/icono-twitter.png"></a>
                <a href="https://www.youtube.com/channel/UCHr2Hn6uk6YmcuMfCLXzQ-g" target="_blank" class="link-red"><img class="lazyload ico_red" data-src="images/icono-youtube.png"></a>
                <a href="https://www.deyute.com/rss" target="_blank" class="link-red"><img class="lazyload ico_red" data-src="images/icono-rss.png"></a>
                <a href="https://www.instagram.com/deyuteproductosdeyute" target="_blank" class="link-red"><img class="lazyload ico_red" data-src="images/icono-instagram.png"></a>
                <a href="https://plus.google.com/117094070550955593352" target="_blank" class="link-red"><img class="lazyload ico_red" data-src="images/icono-google-plus.png"></a>
                <a href="https://www.linkedin.com/company-beta/11170285/" target="_blank" class="link-red"><img class="lazyload ico_red" data-src="images/icono-linkedin.png"></a>
                <a href="https://vimeo.com/user9182293" target="_blank" class="link-red"><img class="lazyload ico_red" data-src="images/icono-vimeo.png"></a>
                <a href="https://es.pinterest.com/deyute" target="_blank" class="link-red"><img class="lazyload ico_red" data-src="images/icono-pinterest.png"></a>
            </div>
        </div>
        <div class="row">
            <div class="footer_menu_area">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="help_support">
                        <h6>Mi cuenta</h6>
                                                    <br/><a href="/mi-cuenta" class="button login-footer" style="max-width: 90%; width: auto; text-align: center; padding-left: 0; padding-right: 0; text-overflow: ellipsis; white-space: nowrap; /*overflow: hidden; *display: block;"><i class="fa fa-user"></i> Identifícate</a>
                                            </div>
                </div>
                */
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="help_support help_border">
                    <h6>AVISOS LEGALES</h6>
                    <ul class="footer_menu">
                        <li><a href="/2/nota-legal"  >Nota legal</a></li><li><a href="/proteccion-de-datos"  >Protección de datos de la empresa Deyute</a></li><li><a href="/7/condiciones-generales-de-venta"  >Condiciones Generales de venta</a></li><li><a href="/politica-cookies"  >Uso de cookies</a></li></ul></div></div>                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="help_support help_border">
                        <h6>Mapa web</h6>
                        <ul class="footer_menu">
                            <li><a href="/">Inicio</a></li>
                            <li><a href="/es/el-yute-deyute">El yute</a></li>
                            <li><a href="/productos-deyute">Tienda</a></li>
                            <li><a href="/4/deyute">Deyute</a></li>
                            <li><a href="/noticias">Noticias</a></li>
                            <li><a href="/contacto">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="help_support help_border">
                        <h6>LOCALÍZANOS</h6>
                        <p style="text-indent: -10px; padding-left: 22px;"><span><i class="fa fa-map-marker" style="margin-right: 6px;"></i></span> Part. Llano San José. Polígono 1, Nave 8<br/>03293 Elche<br/>Alicante, Spain</p>
                        <p style="text-indent: -14px; padding-left: 30px;"><span><i class="fa fa-phone"></i></span> <strong>+34 96 668 04 55</strong></p>                        <p style="text-indent: -14px; padding-left: 30px;"><span><i class="fa fa-fax"></i></span> <strong>+34 96 668 06 01</strong></p>                        <p style="text-indent: -15px; padding-left: 32px;"><span><i class="fa fa-envelope"></i></span> <a href="mailto:info@deyute.com">info@deyute.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer_bottom_area">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="copy_visa">
                        <div class="copy_right">
                            <h6>Copyright © 2022 <a href="/">Tejidos de Yute S.L.</a> - Todos los derechos reservados.</h6>
                            <!-- TrustBox widget - Micro Star -->
                            <div class="trustpilot-widget" data-locale="es-ES" data-template-id="5419b732fbfb950b10de65e5" data-businessunit-id="5fc75aa30737a300019b3607" data-style-height="24px" data-style-width="100%" data-theme="dark">
                            <a href="https://es.trustpilot.com/review/deyute.com" target="_blank" rel="noopener">Trustpilot</a>
                            </div>
                            <!-- End TrustBox widget -->
                        </div>
                        <div class="visa_card">
                            <img class="lazyload" data-src="img/worldwide-shipping-pie.png" alt="" style="max-height: 70px; margin-top: -14px; width: auto;"/>
                            <img class="lazyload" data-src="img/payment.png" alt="" style="max-height: 70px; margin-top: -20px; width: auto;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Footer area -->



<script type="text/javascript" src="/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="/js/jquery.scrollTo-1.4.2-min.js"></script>

<script type="text/javascript" src="/js/lazyload.min.js"></script>

<script type="text/javascript">
    (function($) {
        $.fn.inputFilter = function(inputFilter) {
            return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
            });
        };
    }(jQuery));

    $(document).ready(function()
    {

        $("#CODIGO_POSTAL, #cod_postal_envios, input[name='CODIGO_POSTAL']").inputFilter(function(value) {
            return /^\d*$/.test(value);    // Allow digits only, using a RegExp
        });

        lazyload();

        $('.dropdown-submenu a.dropdown-link').mouseover(function(e){
            $(this).next('div').toggle();
            e.stopPropagation();
            e.preventDefault();
        });

        $('.paralax').parallax("50%", 0.1, true);
        $('.bg').parallax("50%", 0.4);
        $('.paralax2').parallax("75%", 0.1, true);
        $('.bg2').parallax("75%", 0.4);

                $('form[name="newsletter-form"], form[name="boletin"]').submit( function()
        {
            var _email = $(this).children('.sign_text').val();


            if (  _email == "" ||  !valida_mail( _email ) )
            {
                jAlert('info', {title: 'Error', content: '<p style="width: 520px;">Incorrect Email</p>'});
                return false;
            }

            $.ajax({
                type: "POST",
                async: false,
                dataType: 'json',
                url: "inc/newsletter/new_newsletter.php",
                data: { email:_email, lg:'es' },
                success: function(data, textStatus, XMLHttpRequest)
                {
                    if ( data.resultado != '' )
                    {
                        if(data.baja_cliente){
                            jConfirm( 'info', {
                                title: '<p style=" font-size: 20px; color: #000000;">Gracias</p>',
                                content: '<p style="color: #000000;text-align:center;">'+data.resultado+'</p>',
                                btnConfirm: '<p style="margin: -6px;">Si</p>',
                                btnCancel: '<p style="margin: -6px;">No</p>',
                                onConfirm: function(){
                                    $.ajax({
                                        type: "POST",
                                        async: false,
                                        dataType: 'json',
                                        url: "inc/newsletter/baja_boletin.php",
                                        data: { email: data.email },
                                        success: function(data, textStatus, XMLHttpRequest)
                                        {
                                            jAlert('info',{title: '<p style=" color: #000000;">Gracias</p>', content: '<p style="color: #000000;text-align:center;">'+data.mensaje_result+'</p>'});

                                        }
                                    });
                                }
                            });
                        }else{
                            jAlert('info', {title: '<p style=" color: #000000;">Gracias</p>', content: '<p style="color: #000000;text-align:center;">'+data.resultado+'</p>'} );
                        }
                    }
                    else
                    {
                        jAlert('info', {title: '<p style="color: #000000;">Atención</p>', content: '<p style="color: #000000;text-align:center;">Ha ocurrido un error</p>'} );
                    }
                }
            });
            return false;
        });

        $('a.trash').click(function ()
        {
            var that = $(this),
                    aux = that.attr('rel'),
                    aux1 = aux.split('_'),
                    articulo = aux1[0],
                    color = aux1[1],
                    talla = aux1[2];

            jConfirm('info', {
                title: '<p style="font-size: 18px; color: #000000;">Antención</p>',
                content: '<p style="color: #000000;text-align:center;">Estás a punto de eliminar este artículo de tu carrito. ¿Estás seguro?</p>',
                btnConfirm: 'Aceptar',
                btnCancel: 'Cancelar',
                onConfirm: function ()
                {
                    that.parent().parent().fadeOut(200);
                    var data = {a: articulo, c: color, t: talla, action: 'delete'};
                    $.ajax({type: 'POST', dataType: 'json', async: false, url: '/modules/catalogo/ajax/add_modelos_pedido.php', data: data,
                        success: function (data, textStatus, XMLHttpRequest)
                        {
                            location.reload();
                        }
                    });
                }
            });
        });
        
    });
</script>
<script src="https://apis.google.com/js/platform.js?onload=renderBadge" async defer></script>

<script>
  window.renderBadge = function() {
    var ratingBadgeContainer = document.createElement("div");
    document.body.appendChild(ratingBadgeContainer);
    window.gapi.load('ratingbadge', function() {
      window.gapi.ratingbadge.render(ratingBadgeContainer, {"merchant_id": 118461514});
    });
  }
</script>
    <!-- modal-confirm -->
    <div id="modal-info" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="gridSystemModalLabel">Title</h3>
                </div>
                <div class="modal-body">
                    Content
                </div>
                <div class="modal-footer create_button_area">
                    <button class="create_button btnClose" style="float: right;" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- modal-confirm -->
    <div id="modal-confirm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="gridSystemModalLabel">Title</h3>
                </div>
                <div class="modal-body">
                    Content
                </div>
                <div class="modal-footer create_button_area">
                    <button class="create_button btnCancel" data-dismiss="modal" aria-hidden="true" style="float: left;">Cancelar</button>
                    <button class="create_button btnConfirm" data-dismiss="modal" aria-hidden="true" style="float: right;">Aceptar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


<script type="text/javascript">
    $(document).ready( function() {
            //Click cambio configuración
            $('#change_conf').click(function(){
                $.ajax({ type: 'POST', dataType: 'json', async: false, url: '/inc/change_configuration.php',     
                    success: function( data, textStatus, XMLHttpRequest )
                    {      
                        window.location.href = '/';
                    }
                });
            });
            
            
        if (window.PIE) {
            $('.pie-css').each(function() {
                PIE.attach(this);
            });
        }
                                 
        });
    </script>
</body>
<!--End Footer area -->

<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
<script type="text/javascript" src="themes/default/js/gallery.js"></script>
<script src="themes/default/js/superfish.js" type="text/javascript"></script>
<script src="themes/default/js/slides/slides.min.jquery.js" type="text/javascript"></script>

<script type="text/javascript" src="js/stats.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<script src="/js/jquery.cookie.min.js"></script>
<script src="/js/jquery.cookiecuttr.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
        if(jQuery.cookie('cc_cookie_accept') == 'cc_cookie_accept') {
            //Código que no se cargará hasta que el usuario acepte las cookies
        }
        $.cookieCuttr({
          cookieNotificationLocationBottom: true,
          cookieAnalytics: true, 
          cookiePolicyPageMessage: 'Por favor lea la siguiente información y elija una de las siguientes opciones',
          cookiePolicyLink: '/politica-cookies',
          cookieMessage: 'Utilizamos cookies en nuestro website. Puede leer nuestra <a href=\"{{cookiePolicyLink}}\" title=\"Política de cookies\">política de cookies</a>',
          cookieAnalyticsMessage: 'Utilizamos cookies sólo para recoger estadísticas de uso sin almacenar datos personales. <a href=\"/politica-cookies\" title=\"Política de cookies\">Política de cookies</a>',
          cookieErrorMessage: "Lo sentimos. Esta funcionalidad está desactivada en su navegador. <br>Para seguir utilizando esta funcionalidad, por favor ",
          cookieWhatAreTheyLink: "/sobre-las-cookies",
          cookieAcceptButtonText: "ACEPTAR COOKIES",
          cookieDeclineButtonText: "NO USAR COOKIES",
          cookieResetButtonText: "BORRAR COOKIES",
          cookieWhatAreLinkText: "",
        });

    })
</script>

<!-- Responsive css -->
<link rel="stylesheet" href="css/responsive.css">
            <link rel="stylesheet" href="/css/morph_button.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="themes/default/css/gallery.css" type="text/css" media="screen" />
        <link href="/css/cookiecuttr.css" rel="stylesheet" type="text/css"/>


<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Lato:200,200i,300,300i,400,400i,700,700i" rel="stylesheet">
<!-- font awesome -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- carousel CSS -->
<link rel="stylesheet" href="css/owl.carousel.css">
<!-- carousel Theme CSS -->
<link rel="stylesheet" href="css/owl.my_theme.css">
<!-- carousel transitions CSS -->
<link rel="stylesheet" href="css/owl.transitions.css">
<!-- nivo slider slider css -->
<link rel="stylesheet" href="css/nivo-slider.css">
<!-- animate css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Price jquery-ui  -->
<link rel="stylesheet" href="css/jquery-ui.css">
<!-- fancy-box theme -->
<link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
<!-- normalizer -->
<link rel="stylesheet" href="css/normalize.css">
<!-- bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.min.css">
<!-- Mobile menu css -->
<link rel="stylesheet" href="css/meanmenu.min.css">
<!-- main -->
<link rel="stylesheet" href="css/main.css">


<!-- fancybox JS -->
<script src="fancy-box/jquery.fancybox.pack.js"></script>
<!-- price slider JS  -->
<script src="js/price-slider.js"></script>
<!-- Mobile menu JS -->
<script src="js/jquery.meanmenu.js"></script>
<!-- nivo slider JS -->
<script src="js/jquery.nivo.slider.pack.js"></script>
<!-- wow JS -->
<script src="js/wow.js"></script>
<!-- nivo-plugin JS -->
<script src="js/nivo-plugin.js"></script>
<!-- scrollUp JS -->
<script src="js/jquery.scrollUp.js"></script>
<!-- carousel JS -->
<script src="js/owl.carousel.min.js"></script>
<!-- bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- cookies JS -->
<!-- script src="js/jquery.cookie.js"></script -->
<script src="js/bootstrap-select.min.js"></script>
<!-- plugins JS -->
<script src="js/plugins.js"></script>
<!-- main JS  -->
<script src="js/main.js"></script>
<!-- style -->
<link rel="stylesheet" href="style.css">
</html>



<!-- Mi IP: 152.201.33.163-->