<?php
ini_set("display_error", "on");

// var_dump($_POST);

// var_dump($_FILES);

if (isset($_POST["bt_enviar"])) {
    echo "proceso de form<br>";
    
    
    
    if($_POST["nombre"]=="Marcos"){
        $nombre = trim($_POST["nombre"]);
    }else{
        $nombre = "---"; 
    }
    
    $apellido = $_POST["apellido"] ;

    // echo "Bienvenido administrador: $nombre $apellido <br>";

    $colores = $_POST["colores"];
    foreach ($colores as $unColor){
        // echo "Seleccionaste el color: $unColor <br>";
    }

    print ("Nombre del archivo: ".$_FILES["imagen"]["name"]."<br>");
    print ("El mime Type: ".$_FILES["imagen"]["type"]."<br>");
    print ("Nombre Temporal: ".$_FILES["imagen"]["tmp_name"]."<br>");
    print ("Error: ".$_FILES["imagen"]["error"]."<br>");
    print ("Tamaño: ".$_FILES["imagen"]["size"]."<br>");


    /* Estructura de mi computadora que no es un lugar temproral */
    $upload_dir= "/opt/lampp/htdocs/PHPGugler/Clase4/practicaDeLaClase/imagen/";
    /* Comprobar que se haya subido un archivo */
    if (is_uploaded_file($_FILES["imagen"]["tmp_name"])) {  

        $nombreArchivo = $_FILES["imagen"]["name"];
        
        /* aca le pregunto si puede mover el archivo temporal a un lugar que le estoy diciendo con el nombre que yo le estoy diciendo */
        if(move_uploaded_file($_FILES["imagen"]["tmp_name"] , $upload_dir.$nombreArchivo)){
            echo "el archivo se subio satisfactoriamente";
        }else{
            echo "no se pudo subir el archivo, intente nuevamente $upload_dir";
        }
    }else {
        echo "no se pudo subir el archivo";
    }



}else{
    echo "no cargo el formulario... volver a cargar";
}


?>

