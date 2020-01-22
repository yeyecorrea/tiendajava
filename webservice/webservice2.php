<?php  
$cnx =new PDO("mysql:host=localhost;dbname=Inventory","root","");
$res=$cnx->query("select * from user");

$datos=array();

foreach ($res as $row){
    array_push($datos, array(
    	'id_usuario'=>$row['id_usuario'],
        'Nombre_user'=>$row['Nombre_user'],
        'Contrasena_user'=>$row['Contrasena_user'],
        
    ));
    echo utf8_encode(json_encode($datos));   
}

?>