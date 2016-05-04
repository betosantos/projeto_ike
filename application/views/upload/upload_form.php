
    <script type = "text/javascript" src = "//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
    <script type = "text/javascript" src = "//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>        

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="panel panel-primary">

            <div class="panel-heading">Upload de Arquivos</div>
            <div class="panel-body">    

                <!--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <!-- AJAX Response will be outputted on this DIV container -->
                <div class = "col-md-12">
                    <!-- Generate the form using form helper function: form_open_multipart(); -->
                    <legend><h3>Enviar Arquivo </h3></legend>                

                    <form name="form_open_multipart" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>upload/do_upload">
                        <input type="file" multiple = "multiple" accept = "image/*" name="uploadfile[]" size="20" /><br />
                        <input type="submit" name = "submit" value="Upload" class = "btn btn-primary" onclick="mensagem();">
                    </form>       
                </div>                    
            </div>            
        </div>
    </div>


    <script>
        jQuery(document).ready(function ($) {

            var options = {
                beforeSend: function () {
                    // Replace this with your loading gif image
                    $(".upload-image-messages").html('<p><img src = "<?php echo base_url() ?>images/loading.gif" class = "loader" /></p>');
                },
                complete: function (response) {
                    // Output AJAX response to the div container
                    $(".upload-image-messages").html(response.responseText);
                    $('html, body').animate({scrollTop: $(".upload-image-messages").offset().top - 100}, 150);

                }
            };
            // Submit the form
            $(".upload-image-form").ajaxForm(options);

            return false;
        });
        
        function mensagem(){
            alert("Arquivo enviado com Sucesso.");
            window.location="<?php echo base_url() ?>pf/formulario";
        }    
        
    </script>        

