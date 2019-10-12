
# Libreria generadora de clave:
 Autor: **Alexander Rodriguez.**
 email: **alexander4096@gmail.com**
 ver: **1.0.0**
 fecha: **11/10/2019**
 Licencia: **MIT**


## 0) Variables que pueden configurarse para cambiar la respuesta:

    public $longitud=8;       // cantidad a generar
    public $tipo='numerico';  // numerico, alfabetico, alfanumerico
    public $simbolos ='no';   // si / no , mix (tabla de caracteres de simbolos ascii)
    public $mayuscula ='no';  // si, no '
    public $prefijo ='';      // vacio no pone prefijo
    public $sufijo='';        // vacio no pone sufijo
	

## 1) Como las configuro:

  Al crear la instancia de la clase asigne nuevos valores a las variables de la clase
  $clave = new generarclave();
  
// configuracion opcional V2

    $clave->longitud=10;   //
    $clave->tipo='alfanumerico'; //
    $clave->prefijo="US";  //
    $clave->sufijo="CODE"; //
    $clave->simbolos="mix"; //
    $clave->mayuscula="no";  //

## 2) COMO USO LA CLASE;
```
   require __DIR__.'/../vendor/autoload.php'; 
   use generarclave\generarclave;             
   $clave = new generarclave();               
   echo "<br> Clave:" . $clave->generarV1();  
```	
## 3) EJEMPLO DE SALIDA:
```
Clave:89046806
Clave V2:US1elb1z39f)CODE
Clave V3:CLO2RRGC
```
## 4) Archivo de ejemplo para probar la clase.

Para probar creamo una subcarpeta con un archivo de prueba en php y coloque este codigo.
```
<?php
// se llama desde una subcarpeta
require __DIR__.'/../vendor/autoload.php';

use generarclave\generarclave;


$clave = new generarclave();

// con valores por defecto
echo "<br> Clave:" . $clave->generarV1();

// configuracion opcional V2
    $clave->longitud=10;
    $clave->tipo='alfanumerico';
    $clave->prefijo="US";
    $clave->sufijo="CODE";
    $clave->simbolos="mix";
    $clave->mayuscula="no";

// nuevos valores  
echo "<br> Clave V2:" . $clave->generarV1();


// configuracion opcional V3
$clave->longitud=6;
$clave->tipo='alfanumerico';
$clave->prefijo="CL";
$clave->sufijo="";
$clave->simbolos="no";
$clave->mayuscula="si";

// nuevos valores  
echo "<br> Clave V3:" . $clave->generarV1();
?>
```
