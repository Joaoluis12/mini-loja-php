<?php

Class Rotas{

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

    static function get_SiteHome(){
        return Config::SITE_URL . '/' .Config::SITE_PASTA;
    }
    

    static function get_SiteRaiz(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
    }


    static function get_SiteTema(){
        return self::get_SiteHome(). '/' .self::$pasta_view;
    }

    static function pag_Carrinho(){
        return self::get_SiteHome(). '/carrinho';
    }



    static function get_pagina(){
        if(isset($_GET['pag'])){

            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);

            $pagina = 'controller/' .self::$pag[0] . '.php';
            //$pagina = 'controller/' .$_GET['pag'] . '. php';
            if(file_exists($pagina)){
                include $pagina;
            }else{
                include 'erro.php';
            }
        }
    }
}

?>