
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-primary">


        <div class="panel-heading">Prestadores</div>
        <div class="panel-body">                           

            <div class="panel-heading">                
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-10">                    
                            <h2><p>Prestadores</p></h2>
                        </div>

                      <div class="col-md-2" style: align="right">  
                            <button onclick="location.href=`<?php echo base_url() ?>prestador/formulario`" type="button" class="btn btn-success btn-default">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo                              
                            </button>
                        </div>                  
                    </div>
                </div>
            </div>

            <table class="table table-striped" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>        
                        <th>Nome Prestador</th>                                        
                        <th>Telefone</th>                                        
                        <th>Ações</th>                    
                    </tr>     
                </thead>
                <tbody>
                    <?php foreach ($prestador as $p) { ?>                            
                        <tr>
                            <td><?php echo $p->id; ?></td>
                            <td><?php echo $p->nome; ?></td>                                        
                            <td><?php echo $p->telefone; ?></td>                                        
                            <td>
                                <a href="<?php echo base_url('prestador/atualizar/' . $p->id) ?>" class="glyphicon glyphicon-pencil btn-group"></a>
                                <a href="<?php echo base_url('prestador/excluir/' . $p->id) ?>" class="glyphicon glyphicon-remove btn-group" onclick="return confirm('Deseja realmente Excluir o Registro?');"></a>                        
                            </td>
                        </tr>            
                    <?php } ?>     
                </tbody>
            </table>

            <!--</div>-->
        </div>
    </div>



    <script>

        $(document).ready(function () {
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
                        "sFirst": "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext": "Próximo",
                        "sLast": "Último"
                    }
                }
            });
        });

    </script>    
