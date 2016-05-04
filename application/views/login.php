
<div class="container">


    <form class="form-signin" method="post" action="<?php echo base_url(); ?>welcome/logar">
        <h2 class="form-signin-heading text-center">Acesso Restrito</h2>

        <label>Email</label>            
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="email" name="id" class="form-control" placeholder="Email" required autofocus>
        <br />

        <label>Senha</label>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
    </form>


</div> <!-- /container -->



