
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title" style="margin-bottom: 0px; text-align: center;">
            <h2>Cobros de Créditos</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <section class="flex-containertabla">
            
                <section class="container-lupa">
                    <button class="btn btn-lupa fa fa-refresh fa-lg" type="button" id=refrescar onclick="buscar('refrescar')"></button>               
                </section>

                <section class="container-date">
                    <div class="form-groupdate">
                        <div class='input-group date' id='myDatepicker3'>
                            <input type='text' class="form-control" placeholder="Desde" id="desde" value=""/>
                            <span class="input-group-addon" >
                            <span class="fa fa-calendar" style="padding: 5px; display: flex;"></span>
                            </span>
                        </div>
                    </div>
                </section>

                <section class="container-date">
                    <div class="form-groupdate">
                        <div class='input-group date' id='myDatepicker4'>
                            <input type='text' class="form-control" placeholder="Hasta" id="hasta" value=""/>
                            <span class="input-group-addon" >
                            <span class="fa fa-calendar" style="padding: 5px; display: flex;"></span>
                            </span>
                        </div>
                    </div>
                </section>

                <section class="container-dropdown1" >
                    <div class="form-group">
                        <select class="selectpicker form-control" data-style="btn-primary" id="select1">
                            <option value="Todos">Todos</option>
                            <option value="Desembolsado">Desembolsado</option>
                            <option value="Pagado">Pagado</option>
                        </select>
                    </div>
                </section>

                <section class="container-idcredito">
                        <input type="text" class="form-control" placeholder="ID Crédito" id="idcredito" name="idcredito">
                </section>

                <section class="container-buscar">
                    <input type="text" name="prestatario" id="prestatario" class="form-control" placeholder="Buscar...">   
                </section>

                <section class="container-lupa">
                        <button class="btn btn-lupa fa fa-search fa-lg" id="btnbuscar" onclick="buscar('buscar')"></button>             
                </section>
            
            </section>
            <section class="flex-containertabla1">
                <section class="container-dropdown2">
                    <div class="form-group">
                    <form>
                        <select class="selectpicker" multiple data-size="6" multiple data-live-search="true" title="Estado" id="select2" multiple="multiple" data-style="btn-primary">
                            <option value="Iniciado">Iniciado</option>
                            <option value="Contesto">Contesto</option>
                            <option value="Aplaza">Aplaza</option>
                        </select>
                    </form>
                    </div>
                </section>
                <section class="container-lupa">
                        <a href="production/componentes/excel.php"><button class="btn btn-flecha fa fa-arrow-down fa-lg" type="button"></button></a>              
                </section>
                <section class="container-lupa">
                        <button class="btn btn-secondary" type="text" id="reiniciar" value="reiniciar" onclick="buscar('reiniciar')">Reiniciar</button>             
                </section>
                
            </section>
    
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">   
                    
                        <div id="tabla"></div>  

                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>        
      

<!-- SELECCION DE FECHA -->
<script  type="text/javascript">
   $(document).ready(function(){
        $('#myDatepicker3').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        
        $('#myDatepicker4').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $('#select1').selectpicker();
        $('#select2').selectpicker();
    });
</script>    