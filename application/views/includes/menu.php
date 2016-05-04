
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="<?php echo base_url() ?>home">Projeto IKÊ</a>
        </div>
          
        <div id="navbar" class="navbar-collapse collapse">
          <div class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="<?php echo base_url() ?>">Sair</a></li>          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        
            
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-check"></span>
              <span class="sidebar-title">Cadastro</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                  <a href="<?php echo base_url() ?>pf">
                  <span class="glyphicon glyphicon-user"></span> Pessoa Física </a>
              </li>
              <li>
                  <a href="<?php echo base_url() ?>pj">
                  <span class="glyphicon glyphicon-briefcase"></span> Pessoa Jurídica </a>
              </li>                                     
              <li>
                  <a href="<?php echo base_url()?>prestador">
                  <span class="glyphicon glyphicon-scale"></span> Prestador </a>
              </li>              
              <li>
                <a href="<?php echo base_url()?>produto">
                  <span class="glyphicon glyphicon-barcode"></span> Produto </a>
              </li>              
            </ul>
               
                  <a href="<?php echo base_url() ?>reembolso">
                  <span class="glyphicon glyphicon-usd"></span> Reembolso </a>              
              
               <ul class="nav sub-nav">
                   <li>
                  <a href="<?php echo base_url() ?>reembolso/formulario">
                  <span class="glyphicon glyphicon-edit"></span> Solicitação </a>
              </li>   
              </ul>
          
                  <a href="<?php echo base_url() ?>reclamacao">
                  <span class="glyphicon glyphicon-bullhorn"></span> Reclamação </a>              
              
               <ul class="nav sub-nav">
                   <li>
                  <a href="<?php echo base_url() ?>reclamacao/formulario">
                  <span class="glyphicon glyphicon-edit"></span> Solicitação </a>
              </li>   
              </ul>
            
             <a href="<?php echo base_url() ?>upload">
                <span class="glyphicon glyphicon-download-alt"></span> Upload 
             </a>
            
    </div>