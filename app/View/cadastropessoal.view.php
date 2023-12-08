<?php componente('topo')?>
<main id="mainLogin">

        <section class="loginForm">
            <h2>Cadastro de Clientes</h2>
            <p>Preencha as informações a seguir e se torne um de nossos clientes</p>

            <form onsubmit="return validateForm()" method="POST" action="<?=linkUrl('cadastrarconta')?>">
                <label for="nome">Nome Completo:</label> <br>
                <input type="nome" id="nome" name="nome" placeholder="Ex: João Augusto Santos" required> <br>
                <i class="bi bi-envelope" id="EmailIcon"></i>
        
                <label for="cpf">CPF ou CNPJ:</label> <br>
                <input type="cpf" id="cpf" name="cpf" placeholder="Ex: 123.456.789-00" required><br>
                <i class="bi bi-lock" id="passIcon"></i>

                <label for="celular">Celular:</label> <br>
                <input type="celular" id="celular" name="celular" placeholder="Ex: 77 12345-6789" required> <br>
                <i class="bi bi-lock" id="passIcon"></i>

                <label for="crieemail">Email:</label> <br>
                <input type="crieemail" id="crieemail" name="crieemail" placeholder="Digite seu e-mail" required> <br>
                <i class="bi bi-lock" id="passIcon"></i>

                <label for="senha">Senha:</label> <br>
                <input type="senha" id="senha" name="senha" placeholder="Digite sua senha" required> <br>
                <i class="bi bi-lock" id="passIcon"></i>

                <label for="confirmesenha">Confirme sua senha:</label> <br>
                <input type="confirmesenha" id="confirmesenha" name="confirmesenha" placeholder="Confirme sua senha" required> <br>
                <i class="bi bi-lock" id="passIcon"></i>
                            
                <div class="showForgot-password">
                    <div class="form-check">
                        <input type="checkbox" name="showPass" class="form-check-input" id="flexCheckDefault showPass" onchange="togglePassword()">
                        <label for="showPass">Li e concordo com as Políticas de Privacidade</label>
                    </div>
                </div>
        
                <div class="loginCreate">
                    <button type="submit" class="login">Confirmar</button>
                </div>
            </form>
        </section>
       
    </main>

<?php componente('rodape')?>
