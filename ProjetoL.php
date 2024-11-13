<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="author" content="João Pedro Pereira" />
  <meta name="description" content="Projeto login" />
  <title>Gameaval: Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body background="imagens/background.gif">
  <nav class="navbar navbar-expand-lg mx-auto" style="width: 200px; font-family: 'Courier New', monospace;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light border border-light rounded-3" href="index.php">Introdução</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light border border-light rounded-3" href="ProjetoJ.php">Jogos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light border border-light rounded-3" href="sobre.php">Sobre</a>
          </li>
          <form class="container-fluid justify-content-start">
            <li class="nav-item">
              <button class="btn btn-primary rounded-3" type="button" onclick="sair()">Sair</button>
            </li>
          </form>
          <li class="nav-item">
            <span class="navbar-text fs-4 text-light text-decoration-underline" id="logado"></span>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  </br></br></br></br>
  <form action="#" method="post" class="p-3 text-light rounded-3 mx-auto border border-primary"
    style="width: 375px; font-family: 'Courier New', monospace;">
    <fieldset>
      <h3>Login</h3>
      <div id="msgError" class="text-danger"></div>
      <div>
        <label class="form-label" id="userLabel" for="usuario">Usuário:</label>
        <input type="text" class="form-control" id="usuario" placeholder="" style="width: 20em;" required /><br />
      </div><br />
      <div>
        <label class="form-label" id="senhaLabel" for="senha">Senha:</label>
        <input type="text" class="form-control" id="senha" placeholder="" style="width: 20em;" required /><br />
      </div><br />
      <p>
        Não tem uma conta?
        <a href="./ProjetoC.php">
          Cadastre-se
        </a>
      </p>
      <div>
        <button class="btn btn-primary" onclick="entrar()">Entrar</button>
      </div>
    </fieldset>



    <script src="javascript/ProjetoL.js"></script>
</body>

</html>