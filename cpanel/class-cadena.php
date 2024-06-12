<?php
//clase que limita los caracteres mostrados para que no deforme el contenedor.
class Cadena{
    public static function corta($palabra,$num){
        $largo=strlen($palabra);
        $cadena=substr($palabra,0,$num);
        return $cadena;
    }
}
?>