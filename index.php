<?php 
require './lib/autoload.php';

$smarty = new Template();
Rotas::get_pagina();


//valor para o template

//echo Rotas::get_SiteHome();

//$smarty->assign('NOME', 'João Luis Lourenço');
$smarty->assign('GET_TEMA', Rotas::get_SiteTema());


$smarty->display('index.tpl');

?>