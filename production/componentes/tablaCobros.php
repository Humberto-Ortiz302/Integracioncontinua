<?php
require_once "../php/conexion.php";
require_once "../php/consultas.php";
$conexion=conexion();

?>
        
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
        <tr style="text-align: center;">
            <th>Fecha</th>
            <th>Crédito</th>
            <th>Prestatario</th>
            <th>Total</th>
            <th>Capital en Mora</th>
            <th>Días</th>
            <th>Estado</th>
            <th>Fecha de Cobro</th>
            <th>Posible Pago</th>
        </tr>
    </thead>
    
    <tbody>   

        <?php
       
       while($ver=mysqli_fetch_row($resultado)){  
         $sql = "SELECT idmora,fecha,credito,prestatario,total,mora,dias
                FROM mora AS m
                INNER JOIN registro AS r ON r.mora_id=m.idmora 
                WHERE mora_id='$ver[0]' 
                GROUP BY idregistro DESC LIMIT 1";  

        if(!empty($_SESSION['DESDE'])){
            $sql = "SELECT idmora,fecha,credito,prestatario,total,mora,dias
                    FROM mora AS m
                    INNER JOIN registro AS r ON r.mora_id=m.idmora 
                    WHERE mora_id='$ver[0]' AND posiblepago 
                    BETWEEN '".$_SESSION['DESDE']."' AND '".$_SESSION['HASTA']."'
                    GROUP BY idregistro DESC LIMIT 1";
        }   
        if(!empty($_SESSION['SELECT2'])){
            $estado=implode("','",$_SESSION['SELECT2']);

            $sql = "SELECT idmora,fecha,credito,prestatario,total,mora,dias
                    FROM mora AS m
                    INNER JOIN registro AS r ON r.mora_id=m.idmora 
                    WHERE mora_id='$ver[0]' AND estado IN ('".$estado."')
                    GROUP BY idregistro DESC LIMIT 1";
        }
        if(isset($_SESSION['REINICIAR'])){
            $sql = "SELECT idmora,fecha,credito,prestatario,total,mora,dias
                    FROM mora AS m
                    INNER JOIN registro AS r ON r.mora_id=m.idmora 
                    WHERE mora_id='$ver[0]' 
                    GROUP BY idregistro DESC LIMIT 1";  
        } 
        
        $consulta="$sql";
        $resultInnerMoraRegistro=mysqli_query($conexion,$consulta); 
        
        while($ver=mysqli_fetch_row($resultInnerMoraRegistro)){  
        $sql = "SELECT estado,fechaCobro,posiblepago, MAX(idregistro) max_id_idregistro
                FROM registro AS r
                INNER JOIN mora AS m ON r.mora_id=m.idmora 
                WHERE mora_id='$ver[0]'
                GROUP BY idregistro DESC LIMIT 1";

        $resultMaxRegistro=mysqli_query($conexion,$sql);

        while($verEstado=mysqli_fetch_row($resultMaxRegistro)){
            $color="btn btn-info btn-xs";
            if($verEstado[0]=="Aplaza"){
                $color="btn btn-primary btn-xs";

            }else if($verEstado[0]=="Iniciado"){
                $color="btn Iniciado btn-xs";

            }else if($verEstado[0]=="Castigar"){
                $color="btn Castigar btn-xs";

            }else if($verEstado[0]=="Mora"){
                $color="btn Mora btn-xs";

            }else if($verEstado[0]=="Pagado"){
                $color="btn Pagado btn-xs";

            }else if($verEstado[0]=="Contesto"){
                $color="btn Contesto btn-xs";
            }
            
        }
        ?>

        <tr style="text-align: center;" >
            <td><?= $ver[1] ?></td>
            <td><?= $ver[2] ?></td>
            <td><?= utf8_encode($ver[3]) ?></td>
            <td><?= $ver[4] ?></td>
            <td><?= $ver[5] ?></td>
            <td><?= $ver[6] ?></td>
            <td><button class="<?= $color; ?>"onclick="mostrardatos('<?= $ver[0] ?>')" style="width: 88%;">

                <?php
                $sql = "SELECT estado,fechaCobro,posiblepago, MAX(idregistro) max_id_idregistro
                        FROM registro AS r
                        INNER JOIN mora AS m ON r.mora_id=m.idmora 
                        WHERE mora_id='$ver[0]'
                        GROUP BY idregistro DESC LIMIT 1";

                $resultt=mysqli_query($conexion,$sql);

                while($verr=mysqli_fetch_row($resultt)){

                ?>  
                <?= $verr[0] ?></button></td>
            <td><?= $verr[1] ?></td>
            <td><?= $verr[2] ?></td>

            <?php
            }}}
            ?>
        </tr>
        
    
    </tbody>

</table>
 
<div id="tmodal"></div>

<!-- Custom Theme Scripts 
<script src="../build/js/custom.min.js"></script>-->



<script type='text/javascript'>
    $(document).ready(function(){
        $('#datatable-responsive').DataTable({
            'searching':false,
           
        });

        
    });
</script>


