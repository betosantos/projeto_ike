
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-primary">


        <div class="panel-heading">Clientes Pessoa Física</div>
        <div class="panel-body">                            
            
            <!-- Default panel contents -->        
            <div class="panel-heading">
<!--                <legend><h1>Cadastro de Clientes</h1></legend>-->
<!--                <h1>Cadastro de Clientes</h1>                -->
                <div class="row">
                <div class="form-group">
                    <div class="col-md-10">                    
                        <h2><p>Cadastro de Clientes </p></h2>
                    </div>
<!--                    <div class="col-md-2" style: align="right">                         
                        <a class="btn btn-success" href="<?php echo base_url() ?>pf/formulario"> Novo </a>                           
                    </div>-->
                </div>
                </div>
            </div>
            
            <form action="<?php echo base_url() ?>pf/cadastrar" method="post">
                
                <!--<h3><center><?php echo $this->session->flashdata('sucesso');?></center></h3> -->
                                
                <div class="col-md-12">    
                    <div class="form-group">
                        <label for="nome">Nome Cliente</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente" required>
                    </div>
                </div>    

                <div class="col-md-12">    
                    <div class="form-group">
                        <label for="nome">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" onblur="CPF(this.value);" required>
                    </div>
                </div>              
                
                
                  <div class="col-md-12">    
                    <div class="form-group">
                        <label for="nome">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                    </div>
                </div>            
                
<!--                <div class="col-md-12">    
                    <div class="form-group">
                        <label for="nome">Data</label>
                        <input type="text" class="form-control datepicker" id="data" name="data">
                    </div>
                </div>              -->                

            <button type="submit" class="btn btn-primary" onclick="mensagem();">Salvar</button>
            <button type="submit" class="btn btn-default">Cancelar</button>

        </form>     

        </div>  
    </div>
</div>

<script>
jQuery(function($){
   $("#cpf").mask("999.999.999-99");
});

function CPF(cpf) {
    if(!validarCPF(cpf)) {
        alert('Digite um CPF válido');
        $('#cpf').val('');
    }
}

jQuery(function($){
   $("#telefone").mask("(99)9999-9999");
});

$(document).ready(function () {
    $('#data').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR"
    });
});

function mensagem(){
	alert("Cadastrado com Sucesso.");
	window.location="<?php echo base_url() ?>pf/formulario";
}


// validador CPF
// Testando a validação usando jQuery
function validarCPF(cpf) {  
    
    cpf = cpf.replace('-', '');
    cpf = cpf.replace('.', '');
    
    cpf = cpf.replace(/[^\d]+/g,'');   
    if(cpf == '') return false; 
    // Elimina CPFs invalidos conhecidos    
    if (cpf.length != 11 || 
        cpf == "00000000000" || 
        cpf == "11111111111" || 
        cpf == "22222222222" || 
        cpf == "33333333333" || 
        cpf == "44444444444" || 
        cpf == "55555555555" || 
        cpf == "66666666666" || 
        cpf == "77777777777" || 
        cpf == "88888888888" || 
        cpf == "99999999999")
            return false;       
    // Valida 1o digito 
        
    add = 0;    
    for (i=0; i < 9; i ++)       
        add += parseInt(cpf.charAt(i)) * (10 - i);  
        rev = 11 - (add % 11);  
        if (rev == 10 || rev == 11)     
            rev = 0;    
        if (rev != parseInt(cpf.charAt(9)))     
            return false;       
            
    // Valida 2o digito 
    add = 0;    
    for (i = 0; i < 10; i ++)        
        add += parseInt(cpf.charAt(i)) * (11 - i);  
    rev = 11 - (add % 11);  
    if (rev == 10 || rev == 11) 
        rev = 0;    
    if (rev != parseInt(cpf.charAt(10)))
        return false;       
    return true;   
}
</script>
