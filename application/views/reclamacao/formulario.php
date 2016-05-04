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
                            <h2><p>Cadastro de Reclamação</p></h2>
                        </div>                        
                    </div>
                </div>
            </div>

            <form action="<?php echo base_url() ?>reclamacao/cadastrar" method="post">

                <div class="row">      
                    <div class="col-md-2">    
                        <div class="form-group">
                            <label for="nome">Mês/Ano</label>
                            <input type="text" class="form-control datepicker" id="mes" name="mes">
                        </div>
                    </div>  

                    <div class="col-md-3">    
                        <div class="form-group">
                            <label for="nome">Interna ou Externa</label>            
                            <select id="interna" class="form-control" name="interna">
                                <option value="0">Selecione</option>
                                <option value="1">Interna</option>
                                <option value="2">Externa</option>
                            </select>                                 
                        </div>
                    </div>    


                    <div class="col-md-7">    
                        <div class="form-group">
                            <label for="nome">Enviado por</label>
                            <input type="text" class="form-control" id="enviado" name="enviado" placeholder="Enviado Por">
                        </div>
                    </div>   
                </div> <!-- fim row -->

                <div class="row">    
                    <div class="col-md-6">    
                        <div class="form-group">
                            <label for="nome">Nome Cliente Reclamante</label>
                            <input type="text" class="form-control" placeholder="Reclamante" id="reclamante" name="reclamante">
                        </div>
                    </div>  

                    <div class="col-md-2">    
                        <div class="form-group">
                            <label for="nome">Gênero</label>
                            <select id="genero" class="form-control" name="genero">
                                <option value="0">Selecione</option>
                                <option value="1">Masculino</option>
                                <option value="2">Feminino</option>
                            </select>   
                        </div>
                    </div>  

                    <div class="col-md-4">    
                        <div class="form-group">
                            <label for="nome">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="cpf" onblur="CPF(this.value)">
                        </div>
                    </div>   

                </div><!--- FIM ROW -->   
                <div class="row">
                    <div class="col-md-4">    
                        <div class="form-group">
                            <label for="nome">Data de atendimento</label>
                            <input type="text" class="form-control datepicker" id="data_atend" name="data_atend" placeholder="Data de Atendimento" >
                        </div>
                    </div>    


                    <div class="col-md-4">    
                        <div class="form-group">
                            <label for="nome">SISE</label>
                            <input type="text" class="form-control" id="sise" name="sise" placeholder="SISE" >
                        </div>
                    </div>                           
                </div>

                <div class="row">                       
                    <div class="col-md-4">    
                        <div class="form-group">
                            <label for="nome">Produto</label>
                            <!--<input type="text" class="form-control" id="produto" name="produto" > -->                            
                                <select id="produto" class="form-control" name="produto">
                                <option value="0">Selecione </option>     
                                <option value="1">ACE -  BANPARA - RESIDENCIAL </option> 
                                <option value="2"> ACE -  CITIBANK - PROTEÇÃO URBANA </option>
                                <option value="3"> ACE -  TRANQUILIDADE TOTAL - ELETROZEMA </option>
                                <option value="4"> ACE - BANCO DAYCOVAL - MELHOR IDADE </option>
                                <option value="5"> ACE - BANCO DAYCOVAL - VOCÊ PROTEGIDO </option>
                                <option value="6"> ACE - BAU DE PREMIOS OURO E BAU DE PREMIO DIAMANTE RJ </option>
                                <option value="7"> ACE - BEM ESTAR BANRISUL </option>
                                <option value="8"> ACE - BUONNY - AMIGOS DA CARGA PREMIADO </option>
                                <option value="9"> ACE - BUONNY - RESIDENCIAL </option>
                                <option value="10"> ACE - CETELEM - SERVICE CLUB </option>
                                <option value="11"> ACE - CETELEM VIDA MAIS SEGURA </option>
                                <option value="12"> ACE - CITI RESIDENCIA PROTEGIDA </option>
                                <option value="13"> ACE - CITIBANK - CITILAR ESPECIAL </option>
                                <option value="14"> ACE - CITIBANK - CITILAR MAIS VERANIO </option>
                                <option value="15"> ACE - CITIBANK - CITILAR SIMPLIFICADO </option>
                                <option value="16"> ACE - CITIBANK - MIGRAÇÃO RETAIL - CITIRESIDENCIAL</option>
                                <option value="17"> ACE - CITIBANK - RESIDENCIAL - MIGRAÇÃO TOKIO </option>
                                <option value="18"> ACE - CITIBANK - RESIDENCIAL MIGRATPO CHUBB </option>
                                <option value="19"> ACE - CREDICAR CITI - PROTEÇÃO DA SORTE </option>
                                <option value="20"> ACE - CREDICARD - RENDA PREMIADA </option>
                                <option value="21"> ACE - CREDICARD - RESIDENCIAL PREMIADO </option>
                                <option value="22">  ACE - CREDICARD CITI - RESIDENCIAL PREMIADO </option>
                                <option value="23"> ACE - CREDICARD CITI - SUPER PROTEÇÃO </option>
                                <option value="24">  ACE - CREDICARD FAI - RENDA PREMIADA </option>
                                <option value="25">  ACE - CREDICARDCITI - LAR PROTEGIDO </option>
                                <option value="26"> ACE - CREDICARDCITI - RESIDENCIAL PREMIADO </option>
                                <option value="27"> ACE - DACASA FINANCEIRA - SEGURO MELHOR IDADE</option>
                                <option value="28"> ACE - DIREÇÃO PREMIADA REPOM </option>
                                <option value="29"> ACE - DOMICILIAR SANTANDER (PROTEÇÃO FINANCEIRA)</option>
                                <option value="30"> ACE - DS CARD - CASA PROTEGIDA SUPER </option>>
                                <option value="31"> ACE - BANCO DAYCOVAL - MELHOR IDADE </option>
                                <option value="32"> ACE - BANCO DAYCOVAL - VOCÊ PROTEGIDO </option>
                                <option value="33"> ACE - BAU DE PREMIOS OURO E BAU DE PREMIO DIAMANTE RJ </option>
                                <option value="34"> ACE - BEM ESTAR BANRISUL </option>
                                <option value="35"> ACE - BUONNY - AMIGOS DA CARGA PREMIADO </option>
                                <option value="36"> ACE - BUONNY - RESIDENCIAL </option>
                                <option value="37"> ACE - CETELEM - SERVICE CLUB </option>
                                <option value="38"> ACE - CETELEM VIDA MAIS SEGURA </option>
                                <option value="39"> ACE - CITI RESIDENCIA PROTEGIDA </option>
                                <option value="40"> ACE - CITIBANK - CITILAR ESPECIAL </option>
                                <option value="41"> ACE - CITIBANK - CITILAR MAIS VERANIO </option>
                                <option value="42"> ACE - CITIBANK - CITILAR SIMPLIFICADO </option>
                                <option value="43"> ACE - CITIBANK - MIGRAÇÃO RETAIL - CITIRESIDENCIAL</option>
                                <option value="44"> ACE - CITIBANK - RESIDENCIAL - MIGRAÇÃO TOKIO </option>
                                <option value="45"> ACE - CITIBANK - RESIDENCIAL MIGRATPO CHUBB </option>
                                <option value="46"> ACE - CREDICAR CITI - PROTEÇÃO DA SORTE </option>
                                <option value="47"> ACE - CREDICARD - RENDA PREMIADA </option>
                                <option value="48"> ACE - CREDICARD - RESIDENCIAL PREMIADO </option>
                                <option value="49"> ACE - CREDICARD CITI - RESIDENCIAL PREMIADO </option>
                                <option value="50"> ACE - CREDICARD CITI - SUPER PROTEÇÃO </option>
                                <option value="51"> ACE - CREDICARD FAI - RENDA PREMIADA </option>
                                <option value="52"> ACE - CREDICARDCITI - LAR PROTEGIDO </option>
                                <option value="53"> ACE - CREDICARDCITI - RESIDENCIAL PREMIADO </option>
                                <option value="54"> ACE - DACASA FINANCEIRA - SEGURO MELHOR IDADE</option>
                                <option value="55"> ACE - DIREÇÃO PREMIADA REPOM </option>
                                <option value="56"> ACE - DOMICILIAR SANTANDER (PROTEÇÃO FINANCEIRA)</option>
                                <option value="57"> ACE - DS CARD - CASA PROTEGIDA SUPER </option>>
                            </select>   

                        </div>
                    </div>                           


                    <div class="col-md-4">    
                        <div class="form-group">
                            <label for="nome">Serviço</label>
                            <!--<input type="text" class="form-control" id="servico" name="servico" placeholder="Serviço" > -->                                
                            <select id="servico" class="form-control" name="servico">
                                <option value="0">Selecione</option>
                                <option value="1">ASSISTENCIA AUTOMÓVEL</option>
                                <option value="2">ASSISTENCIA EM VIAJES</option>
                                <option value="3">ASSISTENCIA FARMACIA</option>
                                <option value="4">ASSISTENCIA FUNERAL</option>
                                <option value="5">ASSISTENCIA MÉDICA</option>
                                <option value="6">ASSISTENCIA PARALEGAL</option>
                                <option value="7">ASSISTENCIA PET</option>
                                <option value="8">ASSISTENCIA RESIDENCIAL</option>
                                <option value="9">CONCIERGE</option>
                                <option value="10">CONDOMINIO</option>
                                <option value="11">DESEMPREGO</option>
                                <option value="12">HELP DESK</option>
                                <option value="13">INFORMAÇÕES</option>
                                <option value="14">INFORMAÇÕES SOBRE SINISTROS</option>
                                <option value="15">PESSOAS</option>
                                <option value="16">PRONTA RESPOSTA</option>
                                <option value="17">RECOLOCAÇÃO PROFISSIONAL</option>
                            </select>
                        </div>
                    </div>    

                    <div class="col-md-4">    
                        <div class="form-group">
                            <label for="nome">Sub Serviço</label>                                
                            <select id="sub_servico" class="form-control" name="sub_servico">    
                                <option value="0">Selecione</option>    
                                <option value="1">AGENDAMENTO DE CONSULTAS</option>
                                <option value="2">AGENDAMENTO DE CONSULTAS/INDICAÇÃO DE PROFISSIONAIS</option>
                                <option value="3">AMBULANCIA</option>
                                <option value="4">ASSISTÊNCIA MEDICO HOSPITALAR</option>
                                <option value="5">AVALIAÇÃO E/OU ELABORAÇÃO DO CURRÍCULO</option>
                                <option value="6">CARRO RESERVA</option>
                                <option value="7">CESTA BASICA</option>
                                <option value="8">CHAVEIRO AUTO</option>
                                <option value="9">CHAVEIRO LAR</option>
                                <option value="10">CHECKUP LAR</option>
                                <option value="11">CONSERTO DE ELETRODOMESTICOS</option>
                                <option value="12">CONSERTO DE LINHA BRANCA</option>
                                <option value="13">CONSERTO DE LINHA MARROM</option>
                                <option value="14">CREMAÇÃO</option>
                                <option value="15">DESCONTOS E DELIVERY DE MEDICAMENTOS</option>
                                <option value="16">ELETRICISTA</option>
                                <option value="17">ENCANADOR</option>
                                <option value="18">ENCANADOR PARA DESENTUPIMENTO</option>
                                <option value="19">ENVIO DE ACOMPANHANTE</option>
                                <option value="20">ENVIO DE CESTA BÁSICA</option>
                                <option value="21">ENVIO DE COMBUSTÍVEL</option>
                                <option value="22">ENVIO DE MEDICO NA RESIDENCIA</option>
                                <option value="23">ENVIO DE SOS</option>
                                <option value="24">EXPOSIÇÃO DO CURRÍCULO VIA WEB</option>
                                <option value="25">GUARDA DE ANIMAIS DOMESTICOS</option>
                                <option value="26">GUARDA DE DOMICILIO</option>
                                <option value="27">GUARDO DO VEICULO</option>
                                <option value="28">HIDRAULICO PARA DESENTUPIMENTO</option>
                                <option value="29">HOSPEDAGEM</option>
                                <option value="30">INDICAÇÃO DE PRESTADORES DE SERVIÇO</option>
                                <option value="31">INFORMAÇÕES</option>
                                <option value="32">INSPEÇÃO DOMICILIAR</option>
                                <option value="33">LIMPEZA DO IMÓVEL</option>
                                <option value="34">LOCAÇÃO DE CAÇAMBA</option>
                                <option value="35">LOCACAO DE LINHA BRANCA</option>
                                <option value="36">LOCACAO DE LINHA MARROM</option>
                                <option value="37">MEIO DE TRANSPORTE ALTERNATIVO</option>
                                <option value="38">MOTORISTA SUBSTITUTO</option>
                                <option value="39">MUDANÇA</option>
                                <option value="40">ORÇAMENTISTA</option>
                                <option value="41">ORIENTACAO FITNESS</option>
                                <option value="42">ORIENTACAO NUTRICIONAL</option>
                                <option value="43">PASSAGEM AÉREA</option>
                                <option value="44">REBOQUE</option>
                                <option value="45">REBOQUE EXTRA PESADO</option>
                                <option value="46">REBOQUE LEVE</option>
                                <option value="47">REBOQUE MOTO</option>
                                <option value="48">REBOQUE PESADO</option>
                                <option value="49">REBOQUE UTILITARIO</option>
                                <option value="50">REMOÇÃO HOSPITALAR (AMBULÂNCIA)</option>
                                <option value="51">REPARO DE FIAÇÃO TELEFONICA</option>
                                <option value="52">REPARO DE TELHADOS</option>
                                <option value="53">SEPULTAMENTO</option>
                                <option value="54">SERVIÇO DE VIGILANCIA</option>
                                <option value="55">SERVIÇOS DOMESTICOS PROVISORIOS</option>
                                <option value="56">SERVIÇOS HIDRAULICOS</option>
                                <option value="57">SOS</option>
                                <option value="58">TAXI</option>
                                <option value="59">TRANSLADO DE CORPO</option>
                                <option value="60">TRANSPORTE DE FAMILIAR</option>
                                <option value="61">TRANSPORTE E GUARDA-MOVEIS</option>
                                <option value="62">TROCA DE PNEUS</option>
                                <option value="63">VIDRACEIRO</option>
                            </select>
                        </div>
                    </div>    
                </div> <!--- FIM ROW -->                 


                <div class="row">
                    <div class="col-md-2">    
                        <div class="form-group">
                            <label for="nome">Estado</label>
                            <select id="estado_id" class="form-control" name="estado">
                                <option value="0">Selecione</option>
                                <?php foreach ($estado as $s) { ?>
                                    <option value="<?php echo $s->id ?>"> <?php echo $s->sigla; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>    

                    <div class="col-md-10">    
                        <div class="form-group">
                            <label for="nome">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" >
                        </div>
                    </div>                           
                </div> <!--- FIM ROW -->                 



                <div class="row">
                    <div class="col-md-4">    
                        <div class="form-group">                                                        
                            <label for="nome">Motivo da Reclamação</label>
                            <select id="motivo" class="form-control" name="motivo">
                                <option value="0">Selecione</option>
                                <?php foreach ($reclamacao as $s) { ?>
                                    <option value="<?php echo $s->id ?>"> <?php echo $s->nome; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>                    

                    <div class="col-md-4">    
                        <div class="form-group">
                            <label for="nome">Origem do Problema</label>
                            <select id="problema" name="problema" class="form-control">
                                <option value="0">Selecione </option>>
                                <option value="1">TI </option>>
                                <option value="2">Acionamento </option>>
                                <option value="3">Rede de Prestadores </option>>
                                <option value="4">Qualidade </option>>                                
                                <option value="4">Financeiro </option>>  
                                <option value="4">Comercial </option>>                                
                            </select>    
                        </div>
                    </div>    
                    
                    <div class="col-md-4">    
                        <div class="form-group">
                            <label for="nome">Base do Prestador</label>
                            <select id="prestador" name="prestador" class="form-control">
                                <option value="0">Selecione </option>>
                                 <?php foreach ($prestador as $s) { ?>
                                    <option value="<?php echo $s->id ?>"> <?php echo $s->nome; ?> </option>
                                <?php } ?>
                            </select>                                
                        </div>
                    </div>                        
                </div> <!--- FIM ROW --->

                <div class="row">
                    <div class="col-md-12">    
                        <div class="form-group">
                            <label for="nome">Nome do Agente</label>
                            <input type="text" class="form-control" id="agente" name="agente" placeholder="Nome do Agente" >
                        </div>
                    </div>                            
                </div>

                <div class="row">
                    <div class="col-md-3">    
                        <div class="form-group">
                            <label for="nome">Enviado Dpto.</label>
                            <input type="text" class="form-control" id="env_dpto" name="env_dpto" placeholder="Enviado ao Departamento" >
                        </div>
                    </div>                            

                    <div class="col-md-3">    
                        <div class="form-group">
                            <label for="nome">Resposta Dpto.</label>
                            <input type="text" class="form-control" id="resp_dpto" name="resp_dpto" placeholder="Resposta do Departamento" >
                        </div>
                    </div>   

                    <div class="col-md-6">    
                        <div class="form-group">
                            <label for="nome">Responsável</label>
                            <input type="text" class="form-control datepicker" id="responsavel" name="responsavel" placeholder="Responsável" >
                        </div>
                    </div>                    
                </div> <!--- FIM ROW -->         

                <div class="row"> 
                    <div class="col-md-6">    
                        <div class="form-group">
                            <label for="nome">Ação do Departamento </label>
                            <input type="text" class="form-control datepicker" id="acao" name="acao" placeholder="Ação do Departamento" >
                        </div>
                    </div>    

                    <div class="col-md-6">    
                        <div class="form-group">
                            <label for="nome">Comentário</label>
                            <input type="text" class="form-control datepicker" id="comentario" name="comentario" placeholder="Comentáio" >
                        </div>
                    </div>  
                </div>

                <div class="row">
                    <div class="col-md-4">    
                        <div class="form-group">
                            <label for="nome">Recebido em</label>
                            <input type="text" class="form-control datepicker" id="recebido" name="recebido" placeholder="Comentáio" >
                        </div>
                    </div>    

                    <div class="col-md-4">    
                        <div class="form-group">
                            <label for="nome">Respondido em</label>
                            <input type="text" class="form-control datepicker" id="respondido" name="respondido" placeholder="Comentáio" >
                        </div>
                    </div>    

                    <div class="col-md-4">    
                        <div class="form-group">
                            <label for="nome">Procedencia</label>
                            <select class="form-control">
                                <option value="0">Selecione</option>
                                <option value="1">Procedente</option>
                                <option value="2">Improcedente</option>
                            </select>    
                        </div>
                    </div>    
                </div><!--- FIM ROW -->   

                <div class="row">
                    <div class="col-md-12">    
                        <div class="form-group">
                            <label for="nome">Parecer da Qualidade</label>
                            <input type="text" class="form-control" id="qualidade" name="qualidade" placeholder="Comentáio" >
                        </div>
                    </div>        
                </div> <!-- FIM ROW -->


                <button type="submit" class="btn btn-primary" onclick="mensagem();">Salvar</button>
                <button type="submit" class="btn btn-default">Cancelar</button>

            </form>     

            <!--</div>  /container coluna 12-->
        </div>  <!-- container -->
    </div>
</div>

<script>

    $(document).ready(function () {
        $('#mes').datepicker({
            format: "dd/mm/yyyy",
            language: "pt-BR"
        });
    });

    $(document).ready(function () {
        $('#data_atend').datepicker({
            format: "dd/mm/yyyy",
            language: "pt-BR"
        });
    });

    $(document).ready(function () {
        $('#env_dpto').datepicker({
            format: "dd/mm/yyyy",
            language: "pt-BR"
        });
    });

    $(document).ready(function () {
        $('#resp_dpto').datepicker({
            format: "dd/mm/yyyy",
            language: "pt-BR"
        });
    });

    $(document).ready(function () {
        $('#recebido').datepicker({
            format: "dd/mm/yyyy",
            language: "pt-BR"
        });
    });

    $(document).ready(function () {
        $('#respondido').datepicker({
            format: "dd/mm/yyyy",
            language: "pt-BR"
        });
    });



    jQuery(function ($) {
        $("#cpf").mask("999.999.999-99");
    });

    function validarCPF(cpf) {

        cpf = cpf.replace('-', '');
        cpf = cpf.replace('.', '');

        cpf = cpf.replace(/[^\d]+/g, '');
        if (cpf == '')
            return false;
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
        for (i = 0; i < 9; i ++)
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
    
function mensagem(){
	alert("Cadastrado com Sucesso.");
	window.location="<?php echo base_url() ?>pf/formulario";
}    

</script>

