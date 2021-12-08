<?php 
require './lib/autoload.php';

$smarty = new Template();
Rotas::get_pagina();


//valor para o template

$smarty->assign('NOME', 'João Luis Lourenço');


$smarty->display('index.tpl');

?>