<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=loginvlad', 'vlad', 'AdministradorBD123');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>