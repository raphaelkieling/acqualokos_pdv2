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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Controller_principal';

$route['principal'] = 'Controller_principal';
$route['principal/lista/(:any)'] = 'Controller_principal/lista_procura/$1';
$route['principal/lista_total'] = 'Controller_principal/lista_procura_total';

$route['revendedor_login'] = 'Controller_revendedor';
$route['revendedor'] = 'Controller_revendedor/lista';
$route['revendedor_aceita/(:num)'] = 'Controller_revendedor/revendedor_aceita/$1';
$route['revendedor_cancela/(:num)'] = 'Controller_revendedor/revendedor_cancela/$1';

$route['cadastro_lista'] = 'Controller_cadastro/lista';
$route['cadastro_login'] = 'Controller_cadastro';

$route['acqualokos'] = 'Controller_acqualokos/lista';
$route['acqualokos_login'] = 'Controller_acqualokos';
$route['acqualokos/relatorio'] = 'Controller_acqualokos/relatorio';
$route['acqualokos_aceita/(:num)'] = 'Controller_acqualokos/acqualokos_aceita/$1';
$route['acqualokos_cancela/(:num)'] = 'Controller_acqualokos/acqualokos_cancela/$1';

$route['chave'] = 'Controller_chave';
$route['chave/cadastro'] = 'Controller_chave/cadastro';
$route['chave/nova'] = 'Controller_chave/criaChave';
$route['chave/novachave/(:any)/(:any)'] = 'Controller_chave/novaChave/$1/$2';
$route['chave/pegachave'] = 'Controller_chave/pegaChaves';

$route['bilheteria'] = 'Controller_bilheteria';
$route['bilheteria/(:any)/(:any)/(:any)'] = 'Controller_bilheteria/pegaLista/$1/$2/$3';
$route['bilheteria/(:any)/(:num)'] = 'Controller_bilheteria/pegaInfoPessoa/$1/$2';
$route['bilheteria/(:num)'] = 'Controller_bilheteria/pessoaVeio/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
