<?php
//echo "Hola";
//var_dump($_GET);
//echo "Su nombre es".$_GET['nombre'];
$archivo=fopen('usuario.txt','w');
fwrite($archivo,$_GET['nombre']."\n");


















?>