<?php
#Caminhos absolutos
$pastaInterna="institutoberna/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRCSS', DIRPAGE.'core/css/');
define('DIRIMG', DIRPAGE.'core/images/');
define('DIRJS', DIRPAGE.'core/js/');

#Acesso ao db
define('HOST',"localhost");
define('DB',"");
define('USER',"");
define('PASS',"");


#Outros
define("DOMAIN",$_SERVER["HTTP_HOST"]);
include (DIRREQ."core/composer/vendor/autoload.php");
