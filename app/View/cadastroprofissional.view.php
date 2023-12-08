<?php componente('topo')?>

<main id="mainCP" style=" min-height: 50vh;">

        <section class="loginForm">
            <h2>Cadastro de Profissionais</h2>
            <p>Preencha as informações a seguir e compartilhe o seus serviços</p>

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

                <label for="profissao">Profissão:</label> <br>
                <input type="profissao" id="profissão" name="profissao" placeholder="Ex: Eletricista" required> <br>
                <i class="bi bi-lock" id="passIcon"></i>

                <label for="categoria">Categoria dos serviços que você realiza:</label> <br>
                <input type="categoria" id="categoria" name="categoria" placeholder="Assistência Técnica" required> <br>
                <i class="bi bi-lock" id="passIcon"></i>

                <label for="cep">CEP:</label> <br>
                <input type="cep" id="cep" name="cep" placeholder="Ex: 46114-150" required> <br>
                <i class="bi bi-lock" id="passIcon"></i>

                <label for="endereco">Rua/Avenida:</label> <br>
                <input type="endereco" id="endereco" name="endereco" placeholder="Ex: Rua Teodora da Silva Leite" required> <br>
                <i class="bi bi-lock" id="passIcon"></i>

                <label for="complemento">Complemento:</label> <br>
                <input type="complemento" id="complemento" name="complemento" placeholder="Ex: Casa" required> <br>
                <i class="bi bi-lock" id="passIcon"></i>

                <label for="disponibilidade">Disponibilidade para a realização do serviço:</label> <br>
                <input type="disponibilidade" id="disponibilidade" name="disponibilidade" placeholder="Ex: Alta" required> <br>
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
        
                Detalhe seu pedido

                <button type="submit">Enviar</button>
            </form>
        </section>
       
    </main>

<?php componente('rodape')?>
