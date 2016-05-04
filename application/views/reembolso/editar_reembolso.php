<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-primary">


        <div class="panel-heading">Reembolso</div>
        <div class="panel-body">                           

            <!-- Default panel contents -->        
            <div class="panel-heading">
                <!--                <legend><h1>Cadastro de Clientes</h1></legend>-->
                <!--                <h1>Cadastro de Clientes</h1>                -->
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-10">                    
                           <h2><p>Atualizar Reembolso</p></h2>
                        </div>                        
                    </div>
                </div>
            </div>

        <form action="<?php echo base_url(); ?>reembolso/salvar_atualizacao" method="post">
        <input type="hidden" id="id" name="id" value="<?php echo $reembolso[0]->id; ?>">
            
        <div class="row">                  
            <div class="col-md-2">    
                <div class="form-group">
                    <label for="nome">Mês/Ano</label>
                    <input type="text" class="form-control" id="mes" name="mes" placeholder="Ano / Mês" value="<?php echo $reembolso[0]->mes; ?>">
                </div>
            </div>    


            <div class="col-md-4">    
                <div class="form-group">
                    <label for="nome">Cliente Corporativo</label>
                    <input type="text" class="form-control" id="cliente_id" name="cliente_id" placeholder="Cliente Corporativo" value="<?php echo $reembolso[0]->cliente_id; ?>">
                </div>
            </div>    

            <div class="col-md-6">    
                <div class="form-group">
                    <label for="nome">Titular</label>
                    <input type="text" class="form-control" id="titular" name="titular" placeholder="Titular" value="<?php echo $reembolso[0]->titular; ?>">
                </div>
            </div>    

        </div> <!--- FIM ROW -->


        <div class="row">  

            <div class="col-md-3">    
                <div class="form-group">
                    <label for="nome">SISE</label>
                    <input type="text" class="form-control" id="sise" name="sise" placeholder="SISE" value="<?php echo $reembolso[0]->sise; ?>">
                </div>
            </div>   


            <div class="col-md-3">    
                <div class="form-group">
                    <label for="nome">Chegada Documentação</label>
                    <input type="text" class="form-control" id="doc_chegada" name="doc_chegada" placeholder="Chegada da Documentação" value="<?php echo $reembolso[0]->doc_chegada; ?>">
                </div>
            </div>    

            <div class="col-md-3">    
                <div class="form-group">
                    <label for="nome">Serviço</label>
                    <input type="text" class="form-control" id="servico_id" name="servico_id" placeholder="Serviço" value="<?php echo $reembolso[0]->servico_id; ?>">
                </div>
            </div>    

            <div class="col-md-3">    
                <div class="form-group">
                    <label for="nome">Sub Serviço</label>
                    <input type="text" class="form-control" id="sub_servico_id" name="sub_servico_id" placeholder="Sub Serviço" value="<?php echo $reembolso[0]->sub_servico_id; ?>"> 
                </div>
            </div>    

        </div> <!--- FIM ROW -->

        <div class="row">  

            <div class="col-md-3">    
                <div class="form-group">
                    <label for="nome">Atendido em</label>
                    <input type="text" class="form-control" id="atendido" name="atendido" placeholder="Atendido" value="<?php echo $reembolso[0]->atendido; ?>"> 
                </div>
            </div>                    


            <div class="col-md-3">    
                <div class="form-group">
                    <label for="nome">Estado</label>
                    <input type="text" class="form-control" id="estado_id" name="estado_id" placeholder="Estado" value="<?php echo $reembolso[0]->estado_id; ?>">
                </div>
            </div>    

            <div class="col-md-6">    
                <div class="form-group">
                    <label for="nome">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="<?php echo $reembolso[0]->cidade; ?>">
                </div>
            </div>    

        </div> <!--- FIM ROW -->                 


        <div class="row">
            <div class="col-md-12">    
                <div class="form-group">
                    <label for="nome">Detalhes Reembolso</label>
                    <textarea rows="2" type="textarea" class="form-control" id="detalhes" name="detalhes" value="<?php echo $reembolso[0]->detalhes; ?>"></textarea>           
                </div>
            </div>    
        </div> <!--- FIM ROW --->


        <div class="row">  

            <div class="col-md-4">    
                <div class="form-group">
                    <label for="nome">Autorizado por</label>
                    <input type="text" class="form-control" id="autorizado_id" name="autorizado_id" placeholder="Autorizado por" value="<?php echo $reembolso[0]->autorizado_id; ?>">
                </div>
            </div>                    


            <div class="col-md-4">    
                <div class="form-group">
                    <label for="nome">Falha</label>
                    <input type="text" class="form-control" id="falha" name="falha" placeholder="Falha" value="<?php echo $reembolso[0]->falha; ?>">
                </div>
            </div>    

            <div class="col-md-4">    
                <div class="form-group">
                    <label for="nome">Departamento Envolvido</label>
                    <input type="text" class="form-control" id="departamento_id" name="departamento_id" placeholder="Departamento Envolvido" value="<?php echo $reembolso[0]->departamento_id; ?>">
                </div>
            </div>  

        </div> <!--- FIM ROW -->

        <div class="row">          

            <div class="col-md-8">    
                <div class="form-group">
                    <label for="nome">Motivo Liberação</label>
                    <input type="text" class="form-control" id="motivo_liberacao" name="motivo_liberacao" placeholder="Motivo da Liberação" value="<?php echo $reembolso[0]->motivo_liberacao; ?>">
                </div>
            </div>    


            <div class="col-md-3">    
                <div class="form-group">
                    <label for="nome">Analisado em</label>
                    <input type="text" class="form-control" id="analisado_em" name="analisado_em" placeholder="Analisado em" value="<?php echo $reembolso[0]->analisado_em; ?>">
                </div>
            </div>                    


            <div class="col-md-1">    
                <div class="form-group">
                    <label for="nome">Procede </label>
                    <input type="text" class="form-control" id="procede" name="procede" placeholder="Procede" value="<?php echo $reembolso[0]->procede; ?>">
                </div>
            </div>    

        </div> <!--- FIM ROW -->         

        <div class="row">
            <div class="col-md-12">    
                <div class="form-group">
                    <label for="nome">Motivo Pendência</label>
                    <textarea class="form-control" id="motivo_pend" name="motivo_pend" placeholder="Motivo da Pendência" ></textarea>
                </div>
            </div>    
        </div><!--- FIM ROW -->     


        <div class="row"> 
            <div class="col-md-4">    
                <div class="form-group">
                    <label for="nome">Enviado ao Financeiro </label>
                    <input type="text" class="form-control" id="enviado_financ" name="enviado_financ" placeholder="Enviado ao Financeiro em" value="<?php echo $reembolso[0]->enviado_financ; ?>">
                </div>
            </div>    

            <div class="col-md-4">    
                <div class="form-group">
                    <label for="nome">Reembolso Realizado</label>
                    <input type="text" class="form-control" id="reembolso_em" name="reembolso_em" placeholder="Reembolso em" value="<?php echo $reembolso[0]->reembolso_em; ?>">
                </div>
            </div>                    

            <div class="col-md-4">    
                <div class="form-group">
                    <label for="nome">Valor</label>
                    <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor" value="<?php echo $reembolso[0]->valor; ?>">
                </div>
            </div>    
        </div> <!-- FIM ROW -->

        
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="submit" class="btn btn-default">Cancelar</button>
        
    </form>     

    </div>  <!--container coluna 12-->
</div>  <!-- container -->
</div>
