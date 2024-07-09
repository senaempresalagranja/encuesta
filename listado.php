<html>
    <head>
  <link type="text/css" rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
        
             
    </head>
    <body>
        
        <br>
        
        <div class="container">
        <?php
require_once './conexion.php';
if ($conectarBD->connect_error){
    die("conexion fallida ".$conectarBD->connect_error);
}
 
    $cadena = "<table class='table table-bordered'><tr><th>Nombre</th><th>Documento</th><th>Ficha</th><th>resultado</th><th>guardar_puntaje</th></tr>";

$sql = "select * from encuesta";

if ($conectarBD->query($sql)->num_rows > 0){
    
    foreach($conectarBD->query($sql) as $fila){
        
        $cadena = $cadena."<tr><td>".$fila['Nombre']."</td>"
                ."<td>".$fila['Documento']."</td>"
                ."<td>".$fila['Ficha']."</td>"
                ."<td>".$fila['resultado']."</td>"
                ."<td>".$fila['guardar_puntaje']."</td></tr>";
        
    }            
    
    echo $cadena."</table>";
}
$conectarBD->close();
?>   
            </div>
    <script src="./assets/jquery-3.3.1.dist/js/jquery.min.js"></script>
        <script src="./assets/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
  
    </body>
</html>


