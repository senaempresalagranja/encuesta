<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<title>PRIMERA PREGUNTA</title>
        <link type="text/css" rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
        
        <style rel="stylesheet" type="text/css">
            body{
                background-color:#E8DEF2;
                
                                
            }
            
            label{
                font-family: arial;
            }
            
            #contenedor{
                border: solid 1px;
                width: 700px;
                margin: auto;
                
            }
            #boton{
                width: 200px;
	        padding: 10px;
	        width: 250px;
	        margin-left: 35px;
	        margin-top: 20px;
	        font-size: 14px;
	        border-radius: 3px;
                text-align: center;
                background-color: #565BEF ;
                border: scrollbar, solid 1px;
            }
        </style>
        
      
</head>
<body>
  
    
      <!-- 
        conectarse a la base de datos,
        consultar las preguntas que hay con las respuestas
        imprimir las preguntas y la respuesta correcta. Las respuestas incorrectas van en HTML
        -->
        <?php
        
        require_once './conexion.php';
        
        if ($conectarBD->connect_error){
            die("conexion fallida: ".$conectarBD->connect_error);
        }
        //hacer la consulta de la tabla preguntas
        $sql = "select * from preguntas"; 
        //Crear un arreglo para guardar la información de las preguntas
        $arreglo = array();
        
        if ($conectarBD->query($sql)->num_rows >0){
            
            
            //con el foreach alimenta el arreglo de las preguntas para poderlo manipular más adelante
            foreach($conectarBD->query($sql) as $pregunta){
                //array_push permite ir agregando elementos al arreglo
                array_push($arreglo, array($pregunta['id_pregunta'], $pregunta['nombre_pregunta'], $pregunta['respuesta_pregunta']));
            //debe terminar la línea    
            }
            
        }else{
            
            echo"";
            
        }        
       
?>
    
    <div id="contenedor" >
        <legend>INGRESE SUS DATOS</legend>
        <br>
  <script type="text/javascript"> alert("Bienvenido")</script>
  <form method="post" action="recibe.php">
       <label>Nombre</label>
    <input type="text" name="Nombre" id="Nombre" class="campos">
    <br><br>
    <label>Documento</label>
    <input type="text" name="Documento" id="Documento" class="campos">
    <br><br>
    <label>Ficha</label>
    <input type="text" name="Ficha" id="Ficha" class="campos">
    <br><br>
    
  <label>
<!-- Aquí debe reemplazar cada pregunta echo $preguntaUno -->
<?php

echo "BIENVENIDO A LA ENCUESTA";
echo "<br><br>";

echo $arreglo[0][1];

?>
</label>
  <br>
  <input type="radio" name="uno" value="leve">leve
  <br>
  <input type="radio" name="uno" value="gravisima">gravisima
  <br>
  <input type="radio" name="uno" value="<?php echo $arreglo[0][2]; ?>"><?php echo $arreglo[0][2]; ?>
  <br>
  <input type="radio" name="uno" value="ninguna de las anteriores">ninguna de las anteriores
  <br><br>
  
    <label>

<?php

echo "<br><br>";

echo $arreglo[1][1];


?>
  
 </label>
  <br>
  <input type="radio" name="dos" value="muchos">muchos
  <br>
  <input type="radio" name="dos" value="<?php echo $arreglo[1][2]; ?>"><?php echo $arreglo[1][2]; ?>
  <br>
  <input type="radio" name="dos" value="cinco">cinco
  <br>
  <input type="radio" name="dos" value="todas las anteriores">todas las anteriores
  <br><br>
  
     <label>

<?php

echo "<br><br>";

echo $arreglo[2][1];


?>
  
 </label>
  <br>
  <input type="radio" name="tres" value="cumplimiento,sana convivencia,leves">cumplimiento,sana convivencia,leves
  <br>
  <input type="radio" name="tres" value="<?php echo $arreglo[2][2]; ?>"><?php echo $arreglo[2][2]; ?>
  <br>
  <input type="radio" name="tres" value="muy graves,incumplimiento,leves">muy graves,incumplimiento,leves
  <br>
  <input type="radio" name="tres" value="todas las anteriores">todas las anteriores
  <br><br>
  
     <label>

<?php

echo "<br><br>";

echo $arreglo[3][1];


?>
  
 </label>
  <br>
  <input type="radio" name="cuatro" value="leve">leve
  <br>
  <input type="radio" name="cuatro" value="<?php echo $arreglo[3][2];  ?>"><?php echo $arreglo[3][2]; ?>
  <br>
  <input type="radio" name="cuatro" value="gravisima">gravisima
  <br>
  <input type="radio" name="cuatro" value="todas las anteriores">todas las anteriores
  <br><br>
  
  
  <input type="submit" value="enviar" id="boton">
</form>
<div id="pregunta"></div>
  <div id="respuesta"></div>
    </div>
        
        <script src="./assets/jquery-3.3.1.dist/js/jquery.min.js"></script>
        <script src="./assets/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
 
</body>

<?php

$conectarBD->close();
