<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-primary">

        <div class="panel-heading">Produtos</div>
        <div class="panel-body">                            

            <!-- Default panel contents -->        
            <div class="panel-heading">
                <!--                <legend><h1>Cadastro de Clientes</h1></legend>-->
                <!--                <h1>Cadastro de Clientes</h1>                -->
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-10">                    
                            <h2><p>Atualizar Produtos</p></h2>
                        </div>
                        <div class="col-md-2" style: align="right">                         
                            <a class="btn btn-success" href="<?php echo base_url() ?>pj/formulario"> Novo Cliente</a>                           
                        </div>
                    </div>
                </div>
            </div>
            <form action="<?php echo base_url(); ?>produto/salvar_atualizacao" method="post">
                <input type="hidden" id="id" name="id" value="<?php echo $produto[0]->id; ?>">

                <div class="row">                  

                    <div class="col-md-6">    
                        <div class="form-group">
                            <label for="nome">Nome do Produto</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Produto" value="<?php echo $produto[0]->nome; ?>">
                        </div>
                    </div>    
                </div> <!--- FIM ROW -->


                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="submit" class="btn btn-default">Cancelar</button>

            </form>     

        </div>  <!--container coluna 12-->
    </div>
</div>  <!-- container -->

