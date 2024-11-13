<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="author" content="João Pedro Pereira" />
  <meta name="description" content="Projeto avaliação dos jogos" />
  <title>Gameaval: Jogos</title>
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
            <a class="nav-link text-info border border-info rounded-3" href="ProjetoJ.php">Jogos</a>
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
  <fieldset class="p-3 text-light rounded-3 mx-auto" style="width: 1800px; font-family: 'Courier New', monospace;">
    <h1 class="text-center">Lista de Jogos</h1>
    <div class="container text-center">
      <div class="row row-cols-3">
        <div class="col">
          <img src="imagens/Persona_5_capa.jpg" height="320" width="200" class="border border-primary rounded-3" />
          <h4>Persona 5</h4>
          <a href="persona5.php">
            <button class="btn btn-primary">Avaliar</button>
          </a>
        </div>
        <div class="col">
          <img src="imagens/red-dead-capa.webp" height="320" width="200" class="border border-primary rounded-3" />
          <h4>Red Dead Redemption II</h4>
          <a href="reddead.php">
            <button class="btn btn-primary">Avaliar</button>
          </a>
        </div>
        <div class="col">
          <img src="imagens/The_Last_of_Us_2_capa.webp" height="320" width="200"
            class="border border-primary rounded-3" />
          <h4>The Last of Us Part II</h4>
          <a href="thelastofus2.php">
            <button class="btn btn-primary">Avaliar</button>
          </a>
        </div>
      </div>
    </div>


  </fieldset>
  </form>
  <script src="javascript/ProjetoJ.js"></script>
</body>

</html>