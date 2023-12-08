<?php componente('topo')?>

<main id="mainLogin">

<section class="loginForm">
    <h2>Seja Bem-Vindo(a)</h2>
    <p>Somos mais de <strong>1 milhão</strong> de profissionais cadastrados e mais de <strong>500 mil</strong> pedidos mensalmente.</p>

    <?=flash();?>
    
    <form onsubmit="return validateForm()">
        <label for="email">E-mail:</label> <br>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required> <br>
        <i class="bi bi-envelope" id="EmailIcon"></i>

        <label for="password">Senha:</label> <br>
        <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
        <i class="bi bi-lock" id="passIcon"></i>
                    
        <div class="showForgot-password">
            <div class="form-check">
                <input type="checkbox" name="showPass" class="form-check-input" id="flexCheckDefault showPass" onchange="togglePassword()">
                <label for="showPass">Mostrar senha</label>
            </div>
            <a href="#" class="forgotPasswordLink">Esqueci minha senha</a>
        </div>

        <div class="loginCreate">
            <a href="<?= linkUrl('cadastropessoal') ?>" class="createAccount">Criar conta</a>
            <button type="submit" class="login">Entrar</button>
        </div>
    </form>
</section>

</main>

<!-- MODAL EMAIL -->
<div class="modal fade" id="emailModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Erro de Validação</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Por favor, insira um e-mail válido.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entendi</button>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL PASSWORD-->
  <div class="modal fade" id="passModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Erro de Validação</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Por favor, insira uma senha válida.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Entendi</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
     
<?php componente('rodape')?>