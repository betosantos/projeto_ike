<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-primary">

        <div class="panel-heading">Reclamação</div>
        <div class="panel-body">                           

            <!-- Default panel contents -->        
            <div class="panel-heading">
                <!--                <legend><h1>Cadastro de Clientes</h1></legend>-->
                <!--                <h1>Cadastro de Clientes</h1>                -->
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-10">                    
                            <h2><p>Reclamações</p></h2>
                        </div>
                         <div class="col-md-2" style: align="right">  
                            <button onclick="location.href=`<?php echo base_url() ?>reclamacao/formulario`" type="button" class="btn btn-success btn-default">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo                              
                            </button>
                        </div>                    
                    </div>
                </div>
            </div>

            
    <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
            <tr>
                <th>ID</th>        
                <th>Mês</th>        
                <th>Reclamante</th>        
                <th>sise</th>        
                <th>produto</th>  
                <th>Açoes</th>
                
                
            </tr>            
            </thead>
            <tbody>
                <?php foreach ($reclamacao as $reemb) { ?>            
            <tr>
                <td><?php echo $reemb->id; ?></td>
                <td><?php echo $reemb->mes; ?></td>
                <td><?php echo $reemb->reclamante; ?></td>
                <td><?php echo $reemb->sise; ?></td>
                <td><?php echo $reemb->produto ?></td>
            <td>
                    <a href="<?php echo base_url('reclamacao/atualizar/'.$reemb->id) ?>" class="glyphicon glyphicon-pencil btn-group"></a>
                    <a href="<?php echo base_url('reclamacao/excluir/'.$reemb->id) ?>" class="glyphicon glyphicon-remove btn-group" onclick="return confirm('Deseja realmente Excluir o Registro?');"></a>
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