<div class="checkout_area section-padding-80">
    <div class="container">
        <div class="row justify-content-center align-items-center"> <!-- Adicionei as classes aqui -->
            <div class="col-12 col-md-6 text-center">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-page-heading mb-30">
                        <h3>Login de administrador</h3>
                    </div>

                    <form action="<?= URL_DEFAULT . 'login/entrar' ?>" method="POST">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="company">Email</label>
                                <input type="email" class="form-control" id="company" placeholder="Insira seu email" name="email" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="company">Senha</label>
                                <input type="password" class="form-control" id="company" placeholder="Insira sua senha" name="senha" required>

                                <?php if(isset($_SESSION['logado']) && !$_SESSION['logado']) { ?>
                                    <span class="text-danger">Email ou senha incorretos!</span>
                                <?php } 
                                    unset($_SESSION['logado']);
                                ?>
                            </div>

                            
                            <div class="col-12 mb-3">
                                <input type="submit" class="btn btn-primary" value="Logar"> <!-- Alterei a classe para usar um botão de Bootstrap -->
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
