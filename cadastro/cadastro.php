<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cadastro.css">
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <title>Exemplo Bootstrap</title>
</head>

<body>

<?php include '../cabecalho/cabecalho.php'; ?>

  <form action="inserircadastro.php" method="post" >
    <div id='forms'>
      <h3> Crie sua conta <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-book" viewBox="0 0 16 16">
          <path
            d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
        </svg>
      </h3>
      <div class="form-row">
        <div class="form-group col-md-9">
          <label for="inputEmail4">Nome</label>
          <input type="text" class="form-control" id="inputEmail4" name="nome" placeholder="Nome" required>
        </div>
        <div class="form-group col-md-9">
          <label for="inputPassword4">Email</label>
          <input type="email" class="form-control" id="inputPassword4" name="email" placeholder="Email" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-9" id="password-box">
          <label for="inputCity">Senha</label>
          <input type="password" class="form-control" id="inputCity" name="senha" placeholder="Senha" required>
          <div id="show-password-button">
            <img src="../img/olho2.png" alt="Mostrar Senha" id="eye-icon">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-9">
            <label for="inputCity">Telefone</label>
            <input type="text" class="form-control" id="inputCity" name="telefone" placeholder="Telefone">
          </div>

        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Desejo receber e-mails promocionais e informativos do Rebook.
            </label>
          </div>
        </div>
        <button type="submit" id="buttom">Criar a conta</button>
      </div>
  </form>



  <script>
    const showPasswordButton = document.getElementById('show-password-button');
    const passwordInput = document.getElementById('inputCity');
    const eyeIcon = document.getElementById('eye-icon');
  
    showPasswordButton.addEventListener('click', function () {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.setAttribute('src', '../img/olho.png');
      } else {
        passwordInput.type = 'password';
        eyeIcon.setAttribute('src', '../img/olho2.png');
      }
    });
  </script>
  

</body>

</html>