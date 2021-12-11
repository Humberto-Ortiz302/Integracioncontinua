<?php
require_once "conexion.php";
$conexion=conexion();
session_start();


/*
| --------------------------------------------------------------------------------
| CONSULTA - Todos los registro de la tabla mora, realiza busqueda por nombre del 
| Prestatario e ID Credito
| --------------------------------------------------------------------------------
| Resultado: Regresa todos los registros en la tabla seleccionada. 
| --------------------------------------------------------------------------------
*/     

$sql="SELECT idmora,fecha,credito,prestatario,total,mora,dias FROM mora";

if(!empty($_SESSION['PRESTATARIO'])){
    $sql="SELECT idmora,fecha,credito,prestatario,total,mora,dias
          FROM mora WHERE prestatario LIKE '%".$_SESSION['PRESTATARIO']."%'";
}
if(!empty($_SESSION['IDCREDITO'])){
    $sql="SELECT idmora,fecha,credito,prestatario,total,mora,dias
          FROM mora WHERE credito LIKE '".$_SESSION['IDCREDITO']."%'";
}

/*
if(empty($_SESSION['SELECT1'])==false){
    $where="SELECT idmora,fecha,credito,prestatario,total,mora,dias,fecha_cobro
    from mora where estadoCredito like '".$_SESSION['SELECT1']."'";
    
    if($_SESSION['SELECT1']=='Todos'){
        $where="SELECT idmora,fecha,credito,prestatario,total,mora,dias,fecha_cobro
        from mora";
    }
}
*/

$consulta="$sql";
$resultado=mysqli_query($conexion,$consulta);

/*
| --------------------------------------------------------------------------------
| REINICIA - Ingresa estado "No-Iniciado" a la tabla registro con el resto de 
| columnas en blanco
| --------------------------------------------------------------------------------
*/

if(!empty($_SESSION['REINICIAR'])){

    while($ver=mysqli_fetch_row($resultado)){  

        $sql="SELECT idmora,fecha,credito,prestatario,total,mora,dias
              FROM mora AS m
              INNER JOIN registro AS r ON r.mora_id=m.idmora 
              WHERE mora_id='$ver[0]' AND estado IN ('Pagado','Contesto','Iniciado')
              GROUP BY idregistro DESC LIMIT 1"; 

        $consultaEstado=mysqli_query($conexion,$sql);  

        while($ver=mysqli_fetch_row($consultaEstado)){  

            $reiniciar="INSERT IGNORE INTO registro (mora_id) VALUES ('$ver[0]')";
            mysqli_query($conexion,$reiniciar);

        }
    }

    $resultado=mysqli_query($conexion,$consulta);

}


?>