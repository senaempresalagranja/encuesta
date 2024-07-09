<?php

require_once './conexion.php';

if ($conectarBD->connect_error){
    die("conexion fallida:".$conectarBD->conect_error);
}


$uno = $_POST['uno'];
$dos = $_POST['dos'];
$tres = $_POST['tres'];
$cuatro = $_POST['cuatro'];
$Nombre = $_POST['Nombre'];
$Documento =$_POST['Documento'];
$Ficha = $_POST['Ficha'];


$puntos = 0; 

if($uno == "grave"){
    
    $puntos = $puntos+25;
    
}

if($dos == "uno"){
    $puntos = $puntos+25;
}

if($tres == "leves, graves, muy graves"){
    
    $puntos = $puntos+25;
    
}

if($cuatro == "grave"){
    
    $puntos = $puntos+25;
}

if ($puntos >= 70){
    //crear una variable que guarde el resultado
    $resultado = 'A'; 
         
}else{
    
    $resultado = 'D';
    
}

//para saber si aprobó o NO debe crear un if para preguntat 
//si tiene más de 70 puntos, o sea, guardar "A" o "D"

$sql = "insert into encuesta (uno, dos, tres, cuatro, Nombre, Documento, Ficha, resultado, guardar_puntaje)"."values('$uno', '$dos', '$tres', '$cuatro', '$Nombre', '$Documento', '$Ficha', '$resultado', $puntos)";

if($conectarBD->query($sql) === TRUE){
    
    
         
    if ($puntos >= 70){
    
    $resultado = 'A'; 
    
    echo "su puntaje fue aprobado con ".$puntos;
             
    }else{
        $resultado = 'D';
        
        echo "su puntaje no fue aprobado con ".$puntos;
        
     
        
                 
}
    //crear un mensaje que diga el puntaje que sacó el aprendiz
    //y decir si aprobó o NO aprobó
    //¿Cómo se hace? con un if preguntando la letra, si la letra es A entonces debe imprimir "APROBADO"
    //si no, debe irmprimir NO APROBADO
    
  
    
    
}else{
    echo "error: ".$sql."<br>".$conectarBD->error;
    
}

$conectarBD->close();
echo "<p>";
echo "<span><a href='index.php'> nueva encuesta</a></span>";
echo "</p>";