<?php

    #Caminhos absolutos
    if($_SERVER['HTTP_HOST'] === 'localhost')
    {
        $pastaInterna="github/InstitutoBernaAlmeida/";

    } else {
        
        if($_SERVER['HTTP_HOST'] === "institutobernalmeida.com.br") {

            $pastaInterna = "/";
        }
      
    }


    define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
    (substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

    #Atalhos
    define('DIRCSS', DIRPAGE.'core/css/');
    define('DIRIMG', DIRPAGE.'core/images/');
    define('DIRJS', DIRPAGE.'core/js/');

    
    #Outros
    define("DOMAIN",$_SERVER["HTTP_HOST"]);