<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="author" content="João Pedro Pereira" />
  <meta name="description" content="Projeto site de avaliação de jogos" />
  <title>Gameaval</title>
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
            <a class="nav-link text-info border border-info rounded-3" href="index.php">Introdução</a>
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
  <div class="p-3 text-light rounded-3" style="font-family: 'Courier New', monospace;">
    </a>

    <h1 style="padding-left: 50px; padding-top: 100px;">Gameaval</h1>
    <p class="fs-4 text-start text-break" style="padding-left: 50px; padding-right: 400px;">Este é um site feito para
      aqueles que amam jogos ou que querem conhecer jogos novos, aqui você pode enviar a sua própria
      avaliação sobre os jogos do catálogo além de ver outras avaliações sobre o jogo em questão
    </p>
    <br /><br />
    <p>
      Não tem uma conta?
      <a href="./ProjetoC.php">
        Cadastre-se
      </a>
    </p>
    <br />
    <p>
      Caso já tenha uma conta faça seu
      <a href="./ProjetoL.php">
        login
      </a>
    </p>
  </div>
  <script src="javascript/padrao.js"></script>
</body>

</html>