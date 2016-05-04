
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
                                <h2><p>Cadastro de Produtos</p></h2>
                            </div>                            
                        </div>
                    </div>
                </div>

                <form action="<?php echo base_url() ?>produto/cadastrar" method="post">

                    <div class="row">  
                        <div class="col-md-6">    
                            <div class="form-group">
                                <label for="nome">Nome Produto</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Produto" required>
                            </div>
                        </div>    
                    </div> <!--- FIM ROW -->

                    <button type="submit" class="btn btn-primary" onclick="mensagem();">Salvar</button>
                    <button type="submit" class="btn btn-default">Cancelar</button>


                </form>     

                <!--</div>  /container coluna 12-->
            </div>  <!-- container -->
        </div>
    </div>

<script>
    jQuery(function ($) {
        $("#cnpj").mask("99.999.999/9999-99");
    });
    
    function mensagem(){
	alert("Cadastrado com Sucesso.");
	window.location="<?php echo base_url() ?>pf/formulario";
}
</script>