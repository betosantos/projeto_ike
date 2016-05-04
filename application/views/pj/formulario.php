
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-primary">

        <div class="panel-heading">Clientes Pessoa Jurídica</div>
        <div class="panel-body">                            

            <!-- Default panel contents -->        
            <div class="panel-heading">
                <!--                <legend><h1>Cadastro de Clientes</h1></legend>-->
                <!--                <h1>Cadastro de Clientes</h1>                -->
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-10">                    
                            <h2><p>Clientes - Pessoa Jurídica</p></h2>
                        </div>
<!--                        <div class="col-md-2" style: align="right">                         
                            <a class="btn btn-success" href="<?php echo base_url() ?>pj/formulario"> Novo</a>                           
                        </div>-->
                    </div>
                </div>
            </div>
            
            <form action="<?php echo base_url() ?>pj/cadastrar" method="post">
                <div class="col-md-12">    
                    <div class="form-group">
                        <label for="nome">Nome Cliente</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente" required>
                    </div>
                </div>    

                <div class="col-md-12">    
                    <div class="form-group">
                        <label for="nome">CNPJ</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" onblur="CNPJ(this.value);" required>
                    </div>
                </div>              

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

    function CNPJ(cnpj) {
        if (!validarCNPJ(cnpj)) {
            alert('Digite um CNPJ válido');
            $('#cnpj').val('');
        }
    }
// 
// validador CPF
// Testando a validação usando jQuery
//adiciona mascara de cnpj
    function validarCNPJ(cnpj) {

        cnpj = cnpj.replace('-', '');
        cnpj = cnpj.replace('.', '');
        cnpj = cnpj.replace('/', '');

        cnpj = cnpj.replace(/[^\d]+/g, '');

        if (cnpj == '')
            return false;

        if (cnpj.length != 14)
            return false;

        // Elimina CNPJs invalidos conhecidos
        if (cnpj == "00000000000000" ||
        cnpj == "11111111111111" ||
        cnpj == "22222222222222" ||
        cnpj == "33333333333333" ||
        cnpj == "44444444444444" ||
        cnpj == "55555555555555" ||
        cnpj == "66666666666666" ||
        cnpj == "77777777777777" ||
        cnpj == "88888888888888" ||
        cnpj == "99999999999999")
            return false;

        // Valida DVs
        tamanho = cnpj.length - 2
        numeros = cnpj.substring(0, tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0))
            return false;

        tamanho = tamanho + 1;
        numeros = cnpj.substring(0, tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1))
            return false;

        return true;
    }
    
function mensagem(){
	alert("Cadastrado com Sucesso.");
	window.location="<?php echo base_url() ?>pf/formulario";
}    
</script>