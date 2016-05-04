
<div class="container">
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

             <div class="page-header text-center">
                    <h1>Formulário de Reembolso </h1>
                </div>

                <form action="<?php echo base_url() ?>reembolso/cadastrar" method="post">

                    <div class="row">                  
                        <div class="col-md-2">    
                            <div class="form-group">
                                <label for="nome">Mês/Ano</label>
                                <input type="text" class="form-control" id="datepicker" name="mes" placeholder="Ano / Mês" >
                            </div>
                        </div>    
                        
                         <div class="col-md-6">    
                            <div class="form-group">
                                <label for="nome">Cliente</label>
                                <input type="text" class="form-control" name="cliente_id" id="cliente_id" placeholder="Ano / Mês" >
                            </div>
                        </div>    
                                                                       
                    </div>        
 
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="submit" class="btn btn-default">Cancelar</button>
                    
                </form>     
    
</div>