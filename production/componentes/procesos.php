<?php

  session_start();

  $_SESSION['CARGARTABLA']  = $_POST["cargarTabla"];

  $_SESSION['IDMORA']  = $_POST["idmora"];
  
  $_SESSION['MORA_ID']  = $_POST["idmora"];

  $_SESSION['PRESTATARIO']  = $_POST["prestatario"];

  $_SESSION['IDCREDITO']  = $_POST["idcredito"];

  $_SESSION['SELECT1']  = $_POST["select1"];

  $_SESSION['SELECT2']  = $_POST["select2"];

  $_SESSION['REFRESCAR']  = $_POST["refrescar"];
  
  $_SESSION['DESDE']  = $_POST["desde"];

  $_SESSION['HASTA']  = $_POST["hasta"];

  $_SESSION['REINICIAR']  = $_POST["reiniciar"];

  $_SESSION['COBRAR']  = $_POST["cobrar"];


  //$_SESSION['CONSULTA']  = $_POST["consulta"];

  
?>


