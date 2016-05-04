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
                            <h2><p>Cadastro de Reembolso</p></h2>
                        </div>                        
                    </div>
                </div>
            </div>

            <form action="<?php echo base_url() ?>reembolso/cadastrar" method="post">
                    <div class="row">                  
                        <div class="col-md-2">    
                            <div class="form-group">
                                <label for="nome">Mês/Ano</label>
                                <input type="text" class="form-control datepicker" id="mes" name="mes">
                            </div>
                        </div>     

                        <div class="col-md-4">    
                            <div class="form-group">
                                <label for="nome">Cliente Corporativo</label>
                               <!-- <input type="text" class="form-control" id="cliente_id" name="cliente_id" placeholder="Cliente Corporativo" >-->
                                <select id="cliente_id" class="form-control" name="cliente_id">
                                    <option value="0">Selecione</option>
                                    <?php foreach ($corporativo as $s) { ?>
                                    <option value="<?php echo $s->id ?>"> <?php echo $s->nome; ?> </option>
                                    <?php } ?>
                                </select>
                                
                            </div>
                        </div>    

                        <div class="col-md-6">    
                            <div class="form-group">
                                <label for="nome">Titular</label>
                                <input type="text" class="form-control" id="titular" name="titular" placeholder="Titular" >
                            </div>
                        </div>    

                    </div> <!--- FIM ROW -->


                    <div class="row">  

                        <div class="col-md-3">    
                            <div class="form-group">
                                <label for="nome">SISE</label>
                                <input type="text" class="form-control" id="sise" name="sise" placeholder="SISE" >
                            </div>
                        </div>   


                        <div class="col-md-3">    
                            <div class="form-group">
                                <label for="nome">Chegada Doc.</label>
                                <input type="text" class="form-control datepicker" id="doc_chegada" name="doc_chegada" placeholder="Chegada da Documentação" >
                            </div>
                        </div>    

                        <div class="col-md-3">    
                            <div class="form-group">
                                <label for="nome">Serviço</label>
                                <!--<input type="text" class="form-control" id="servico_id" name="servico_id" placeholder="Serviço" > -->                                
                                <select id="servico_id" class="form-control" name="servico_id">
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

                        <div class="col-md-3">    
                            <div class="form-group">
                            <label for="nome">Sub Serviço</label>                                
                            <select id="sub_servico_id" class="form-control" name="sub_servico_id">    
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

                    </div> <!-- FIM ROW -->

                    <div class="row">  

                        <div class="col-md-3">    
                            <div class="form-group">
                                <label for="nome">Atendido em</label>
                                <input type="text" class="form-control datepicker" id="atendido" name="atendido" placeholder="Atendido" >
                            </div>
                        </div>                    


                        <div class="col-md-3">    
                            <div class="form-group">
                                <label for="nome">Estado</label>
                                <select id="estado_id" class="form-control" name="estado_id">
                                    <option value="0">Selecione</option>
                                    <?php foreach ($estado as $s) { ?>
                                    <option value="<?php echo $s->id ?>"> <?php echo $s->sigla; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>    

                        <div class="col-md-6">    
                            <div class="form-group">
                                <label for="nome">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" >
                            </div>
                        </div>    

                    </div> <!--- FIM ROW -->                 

                    <div class="row">
                        <div class="col-md-12">    
                            <div class="form-group">
                                <label for="nome">Detalhes Reembolso</label>
                                <textarea rows="2" type="textarea" class="form-control" id="detalhes" name="detalhes" placeholder="Detalhes" ></textarea>
                            </div>
                        </div>    
                    </div> <!--- FIM ROW --->


                    <div class="row">  

                        <div class="col-md-4">    
                            <div class="form-group">
                                <label for="nome">Autorizado por</label>                                 
                                <select id="autorizado_id" class="form-control" name="autorizado_id">
                                    <option value="0">Selecione</option>
                                    <?php foreach ($departamento as $s) { ?>
                                    <option value="<?php echo $s->id ?>"> <?php echo $s->nome; ?> </option>
                                    <?php } ?>
                                </select>                                
                            </div>
                        </div>                    


                        <div class="col-md-4">    
                            <div class="form-group">
                                <label for="nome">Falha</label>
                                <select id="falha" class="form-control" name="falha">
                                    <option value="0">---</option>
                                    <option value="1">SIM</option>
                                    <option value="2">NÃO</option>
                                </select>
                            </div>
                        </div>    

                        <div class="col-md-4">    
                            <div class="form-group">
                                <label for="nome">Departamento Envolvido</label>
                                <select id="departamento_id" class="form-control" name="departamento_id">
                                    <option value="0">Selecione</option>
                                    <?php foreach ($departamento as $s) { ?>
                                    <option value="<?php echo $s->id ?>"> <?php echo $s->nome; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>  

                    </div> <!--- FIM ROW -->

                    <div class="row">          

                        <div class="col-md-8">    
                            <div class="form-group">
                                <label for="nome">Motivo Liberação</label>
                                <input type="text" class="form-control" id="motivo_liberacao" name="motivo_liberacao" placeholder="Motivo da Liberação" >
                            </div>
                        </div>    


                        <div class="col-md-2">    
                            <div class="form-group">
                                <label for="nome">Analisado em</label>
                                <input type="text" class="form-control datepicker" id="analisado_em" name="analisado_em" placeholder="Analisado em" >
                            </div>
                        </div>                    


                        <div class="col-md-2">    
                            <div class="form-group">
                                <label for="nome">Procede </label>
                                <input type="text" class="form-control" id="procede" name="procede" placeholder="Procede" >
                            </div>
                        </div>    
                    </div> <!--- FIM ROW -->         

                    <div class="row"> 
                        <div class="col-md-4">    
                            <div class="form-group">
                                <label for="nome">Enviado ao Financeiro </label>
                                <input type="text" class="form-control datepicker" id="enviado_financ" name="enviado_financ" placeholder="Enviado ao Financeiro em" >
                            </div>
                        </div>    

                        <div class="col-md-4">    
                            <div class="form-group">
                                <label for="nome">Reembolso Realizado</label>
                                <input type="text" class="form-control datepicker" id="reembolso_em" name="reembolso_em" placeholder="Reembolso em" >
                            </div>
                        </div>                    

                        <div class="col-md-4">    
                            <div class="form-group">
                                <label for="nome">Valor</label>
                                <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor" >                        
                            </div>
                        </div>    
                    </div> <!-- FIM ROW -->

                    <div class="row">
                        <div class="col-md-12">    
                            <div class="form-group">
                                <label for="nome">Motivo Pendência</label>
                                <textarea class="form-control" id="motivo_pend" name="motivo_pend" placeholder="Motivo da Pendência" ></textarea>
                            </div>
                        </div>    
                    </div><!--- FIM ROW -->   
                    
                    

                    <button type="submit" class="btn btn-primary" onclick="mensagem();">Salvar</button>
                    <button type="submit" class="btn btn-default">Cancelar</button>

                </form>     

                <!--</div>  /container coluna 12-->
            </div>  <!-- container -->
        </div>
</div>

<script>
    
function mensagem(){
	alert("Cadastrado com Sucesso.");
	window.location="<?php echo base_url() ?>pf/formulario";
}
    
$(document).ready(function () {
    $('#mes').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR"
    });
});

$(document).ready(function () {
    $('#doc_chegada').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR"
    });
});

$(document).ready(function () {
    $('#analisado_em').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR"
    });
});

$(document).ready(function () {
    $('#enviado_financ').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR"
    });
});

$(document).ready(function () {
    $('#reembolso_em').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR"
    });
});

$(document).ready(function () {
    $('#atendido').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR"
    });
});
 
</script>

<script type="text/javascript">
    $(function(){
    $("#valor").maskMoney({symbol:'R$ ', 
    showSymbol:true, thousands:'.', decimal:',', symbolStay: true});
})
</script>

