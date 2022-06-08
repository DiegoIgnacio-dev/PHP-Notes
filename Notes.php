<?php 

#BOLEANOS

echo TRUE ,"<br>";
echo FALSE,"<br>";

#NUMEROS
echo 20.4,"<br>";
echo -12 ,"<br>";

#var_dump para conocer el tipo de dato y en el caso de los string su extencion 
echo var_dump(TRUE) ,"<br>";
echo var_dump(10) ,"<br>";
echo var_dump("hola"),"<br>";

#VARIABLES
/*Pueden comenzar con el simbolo de $MyVar ,MyVar_, MyVar_dos, MyVar123
  Se puede usar Camel Case o si vienes de JS lowerCamelCase
*/

$nombre_paciente ='Diego';
echo $nombre_paciente,"<br>";

$_nombre_programador ="Diego Ignacio";
echo $_nombre_programador ,"<br>";
 #CONSTANTE
//forma antigua
define("NOMBRE","PEDRO");
echo NOMBRE,"<br>";

//forma nueva
const _DNI ='ARN1212'; 

//const _DNI ='ARN1s';

#ARRAY de tipo escalar indice autoincrementable
define('CARS',array("nissan","chevrolet","Toyota"));
$frutas = array("manzana","pera","Uva");
$Num = array(1,2,3,4,5,6);
$animales=["perro","gato","pollo"];
$animales[3]="Sapo";

echo $Num[3],"<br>";
echo $frutas[2],"<br>";
echo CARS[2],"<br>";
echo $animales[3],"<br>";

#ARRAY de tipo Asociativo
$paciente =[
  "nombre"=>"Juan",
  "apellido"=>"Carlos",
  "Edad"=>35
];

echo $paciente["nombre"],"<br>";
#Array bidemencional
$pacienteDos =[
  "nombre"=>"Juan",
  "apellido"=>"Carlos",
  "Edad"=>35,
  "direccion"=>["ciudad"=>"osorno","sector"=>"Mirasur","numero"=>2023]
];

echo $pacienteDos["direccion"]["ciudad"],"<br>";
echo $pacienteDos["direccion"]["sector"];
echo count($paciente),"<br>";
echo count($pacienteDos,COUNT_RECURSIVE);
