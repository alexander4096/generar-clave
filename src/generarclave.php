<?php
/*
 Libreria generadora de clave:
 Autor: Alexander Rodriguez.
 email: alexander4096@gmail.com
 ver: 1.0.0
 fecha: 11/10/2019
 Licencia: MIT
*/


namespace generarclave;

class generarclave {
    public $longitud=8;       // cantidad a generar
    public $tipo='numerico';  // numerico, alfabetico, alfanumerico
    public $simbolos ='no';   // si / no , mix (tabla de caracteres de simbolos ascii)
    public $mayuscula ='no';  // si, no '
    public $prefijo ='';      // vacio no pone prefijo
    public $sufijo='';        // vacio no pone sufijo

    // el sistema toma los valores ascii y los combierte en simbolos
    // caracteres ascii de los simbolos
    public $tablaSimbolos = array(33,34,35,36,37,38,39,40,41,42,43,44,
    45,46,47,91,92,93,94,95,123,124,125,126);
    public $tablaRangoAlfabetico = array(97,122);
    public $tablaRangoNumerico = array(48,57);
    // rango numerico 48 al 57
    // rango alfabetico 97 al 122

    // generar 
    public function generarV1(){
       // var
       $largo = $this->longitud;
       $tipo = $this->tipo;
       $simbolos = $this->simbolos;
       $cadena = '';
       $prefijo = $this->prefijo;
       $sufijo = $this->sufijo;
       $mayuscula = $this->mayuscula;
       $RangoAlfa = $this->tablaRangoAlfabetico;
       $RangoNum = $this->tablaRangoNumerico;

            // creacion
            for ($i=0; $i < $largo; $i++) { 
                if ($tipo=='numerico') {
                    $num = random_int($RangoNum[0], $RangoNum[1]);
                }
                if ($tipo=='alfabetico') {
                    $num = random_int($RangoAlfa[0], $RangoAlfa[1]);
                }
                if ($tipo=='alfanumerico') {
                    if (random_int(0,1)==1) {
                        // numero
                        $num = random_int($RangoNum[0], $RangoNum[1]);
                    } else {
                        // alfabeto
                        $num = random_int($RangoAlfa[0], $RangoAlfa[1]);
                    }
                }
                if ($simbolos=='si') {
                   $lenArray = count($this->tablaSimbolos)-1;
                   $pos = random_int(0, $lenArray);
                   $num  = $this->tablaSimbolos[$pos];
                }
                // coloca 1 simbolos al final
                if ($simbolos=='mix' && $i+1==$largo ) {
                    $lenArray = count($this->tablaSimbolos)-1;
                    $pos = random_int(0, $lenArray);
                    $num  = $this->tablaSimbolos[$pos];
                }
                // concatenar
                $cadena.= chr($num);
            }
        // mayusculas
        if ($mayuscula=='si') {
            $cadena = strtoupper($cadena);      
        }
       return $prefijo . $cadena . $sufijo;
    }

} // fin clase

?>