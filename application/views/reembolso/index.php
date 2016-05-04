
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
                        <h2><p>Reembolsos</p></h2>
                    </div>
                       <div class="col-md-2" style: align="right">  
                            <button onclick="location.href=`<?php echo base_url() ?>reembolso/formulario`" type="button" class="btn btn-success btn-default">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo                              
                            </button>
                        </div>                   
                </div>
                </div>
            </div>

    <!--<table id="example" class="display" cellspacing="0" width="100%">-->        
            <table id="example" class="table table-striped">
    <thead>
        <tr>
                <th>ID</th>        
                <th>Mês</th>        
                <th>Cliente Corporativo</th>                        
                <th>Chegada Documentação</th>        
                <th>Serviço</th>        
                <th>Sub Serviço</th>  
                <th>Ações</th>                
            </tr>            
            </thead>
            <tbody>
                <?php foreach ($reembolso as $reemb) { ?>            
            <tr>
                <td><?php echo $reemb->id; ?></td>
                <td><?php echo $reemb->mes; ?></td>
                <td><?php echo $reemb->cliente_id; ?></td>                
                <td><?php echo $reemb->doc_chegada; ?></td> 
                <td><?php echo $reemb->servico_id; ?></td> 
                <td><?php echo $reemb->sub_servico_id; ?></td> 
                <td>
                    <a href="<?php echo base_url('reembolso/atualizar/'.$reemb->id) ?>" class="glyphicon glyphicon-pencil btn-group"></a>
                    <a href="<?php echo base_url('reembolso/excluir/'.$reemb->id) ?>" class="glyphicon glyphicon-remove btn-group" onclick="return confirm('Deseja realmente Excluir o Registro?');"></a>
                </tr>            
                <?php }?>   
        </tbody>
    </table>
                
    </div> <!-- /container coluna 12-->
</div> <!-- /container -->
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable({
    "oLanguage": {
    "sProcessing": "Aguarde enquanto os dados são carregados ...",
    "sLengthMenu": "Mostrar _MENU_ registros por pagina",
    "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
    "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
    "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
    "sInfoFiltered": "",
    "sSearch": "Procurar",
    "oPaginate": {
       "sFirst":    "Primeiro",
       "sPrevious": "Anterior",
       "sNext":     "Próximo",
       "sLast":     "Último"
    }
    }    
    });    
});


</script>