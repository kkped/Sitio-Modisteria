<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['panel'] = 'welcome/panel';
$route['portal'] = 'welcome/portal';
$route['admin'] = 'welcome/admin';

$route['clientes'] = 'Administrador/clientes';
//2
$route['personas'] = 'Administrador/personas';
//3
$route['productos'] = 'Administrador/productos';
//4
$route['productos_hechos'] = 'Administrador/productos_hechos';
//5
$route['seccion_telas'] = 'Administrador/seccion_telas';
//5
$route['sobre_nosotros'] = 'Administrador/sobre_nosotros';

//mostrar
$route['gestionar_listar'] = 'Administrador/gestionar_listar';

//guardar

//REGISTRO
$route['registro']= 'Administrador/registro';


$route['producto/guardar'] = 'Administrador/producto_guardar';

$route['personas/enviar'] = 'Administrador/personas_enviar';
$route['productos/enviar1'] = 'Administrador/productos_enviar1';
$route['productos_hechos/enviar2'] = 'Administrador/productos_hechos_enviar2';
$route['seccion_telas/enviar3'] = 'Administrador/seccion_telas_enviar3';
$route['sobre_nosotros/enviar4'] = 'Administrador/sobre_nosotros_enviar4';

$route['login/login'] = 'Administrador/login';
$route['session/session'] = 'Administrador/session';
$route['cerrar/cerrar']= 'Administrador/cerrar';
 //Verificar 
 $route['veriicar']= 'Welcome/verificar';
//Sesion Tienda
$route['contacto'] = 'Administrador/contacto';
$route['servicios'] = 'Administrador/servicios';
$route['nosotros'] = 'Administrador/nosotros';
$route['carro'] = 'Administrador/carro';

$route['verificar'] = 'Administrador/verificar';
$route['cuenta'] = 'Administrador/cuenta';
$route['deseo'] = 'Administrador/deseo';
$route['tienda'] = 'Administrador/tienda';

//Sesion Productos
$route['vestidos'] = 'Administrador/vestidos';
$route['pantalones'] = 'Administrador/pantalones';
$route['conjuntos'] = 'Administrador/conjuntos';
$route['blusas'] = 'Administrador/blusas';

$route['scuba'] = 'Administrador/scuba';
$route['lino'] = 'Administrador/lino';
$route['dril'] = 'Administrador/dril';
$route['satin'] = 'Administrador/satin';

$route['casual'] = 'Administrador/casual';
$route['fiesta'] = 'Administrador/fiesta';
$route['gala'] = 'Administrador/gala';
$route['bano'] = 'Administrador/bano';

$route['lino_p'] = 'Administrador/lono_p';

$route['sueter'] = 'Administrador/sueter';
$route['uniformes'] = 'Administrador/uniformes';
$route['short'] = 'Administrador/short';
$route['enterizos'] = 'Administrador/enterizos';
$route['crotop'] = 'Administrador/crotop';
$route['kimono'] = 'Administrador/kimono';
$route['chaqueta'] = 'Administrador/chaqueta';
$route['algodon'] = 'Administrador/algodon';
$route['cuero'] = 'Administrador/cuero';
$route['chali'] = 'Administrador/chali';
$route['africana'] = 'Administrador/africana';
$route['mezclilla'] = 'Administrador/mezclilla';

$route['agregar_carrito'] = 'Welcome/agregar_carrito';




