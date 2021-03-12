<?php //nebbia_v1a.php

//primero abre la carpeta img y busca los archivos que haya allí.
//los asigna a un array, genera un número aleatorio y selecciona uno
//luego selecciona un numero aleatorio de imágenes y las encadena
//graba en la BBDD esa secuencia y la asocia a un codigo,
//ese código que se usará en la URL

//abrimos el directorio
$directorio = "./img";
$separador = "/";

$dir = opendir($directorio);
$n = 0;

$imagenes = array();
$numeros = array();

while($elemento = readdir($dir)){
	//filtramos los . y .. y ficheros ocultos (empiezan por .)
	if(substr($elemento, 0, 1) == "."){
		continue;//lo saltamos
	}
	if(is_dir($directorio.$separador.$elemento)){
		continue;	
	}

	print "\n<br>Imagen $n > $elemento";

	//$numeros[]=$n;
	$imagenes[$n] = $elemento;
	$n++;
}

//ahora que tenemos las imágenes en un array, vamos a mostrar unas cuantas aleatoriamente
$max=$n;
$min=0;
if($min > $n){
	$min = rand(0, $n);
	$min = 0;
}
if($max > $n){
	//$max = rand($min, $n);
	$max = $n;
}
if($max < $min){
	$max = rand($min, $n);
}

//$num_a_mostrar = rand(0,$max);
$num_a_mostrar = 6;
print "<br>Mostramos: $num_a_mostrar (0,$n,$min, $max)";

//ahora seleccionamos las imágenes
//$candidatos[] = $numeros;

print "<br><br>imagenes: ";
print_r($imagenes);


$n_imagenes = array();
$mezcla_imagenes = array_suffle($imagenes);

print "<br><br>imagenes_barajadas: ";
print_r($mezcla_imagenes);

$i = 0;
while($i < $num_a_mostrar){
	print "HELLO";
	$imagen = array_pop($imagenes);
	$n_imagenes[] = $imagen;
	$i++;
	print "i: $i > $imagen";
}

print "<br><br>n_imagenes: ";
print_r($n_imagenes);


?>