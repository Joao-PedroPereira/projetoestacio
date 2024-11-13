<?php
session_start();
?>

<?php
include_once './conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="author" content="João Pedro Pereira" />
    <meta name="description" content="Projeto avaliação dos jogos" />
    <title>Red Dead Redemption II</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/custom.css">
</head>

<body background="imagens/background2.gif">
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
    <div class="p-3 text-light border border-primary rounded-3 container"
        style="font-family: 'Courier New', monospace;">
        <h1>Red Dead Redemption II</h1>
        <div class="card bg-transparent">
            <div class="row">
                <div class="col-md-2">
                    <img src="imagens/red-dead-capa.webp" height="320" width="200"
                        class="border border-primary rounded-3" />
                </div>
                <div class="col-md-8 text-light">
                    <div class="card-body">
                        <h3 class="card-title">Sinopse</h3>
                        <p class="card-text">Em 1899, Red Dead Redemption 2 segue a história de Arthur Morgan, um membro
                            da guangue de bandidos de Dutch Van der Linde.
                            Depois de tudo dar errado durante um roubo em uma cidade do oeste chamada Blackwater, Arthur
                            Morgan e a gangue Van der Linde são forçados a fugir. Com agentes federais e os melhores
                            caçadores de recompensa em seu encalço, a gangue precisa roubar, assaltar e lutar para
                            sobreviver no impiedoso coração dos Estados Unidos. Conforme divisões profundas ameaçam
                            despedaçar a gangue, Arthur deve fazer uma escolha entre os seus próprios ideais e a
                            lealdade à gangue que criou.</p>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div>
            <h3>Avaliação</h3>
        <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

<form method="POST" action="processamento2.php">
    <div class="col estrelas">

<input type="radio" name="estrela" id="vazio" value="" checked>

<label for="estrela_um"><i class="opcao fa"></i></label>
<input type="radio" name="estrela" id="estrela_um" id="vazio" value="1">

<label for="estrela_dois"><i class="opcao fa"></i></label>
<input type="radio" name="estrela" id="estrela_dois" id="vazio" value="2">

<label for="estrela_tres"><i class="opcao fa"></i></label>
<input type="radio" name="estrela" id="estrela_tres" id="vazio" value="3">

<label for="estrela_quatro"><i class="opcao fa"></i></label>
<input type="radio" name="estrela" id="estrela_quatro" id="vazio" value="4">

<label for="estrela_cinco"><i class="opcao fa"></i></label>
<input type="radio" name="estrela" id="estrela_cinco" id="vazio" value="5"><br><br>

<textarea name="mensagem" rows="4" cols="90" placeholder="Digite o seu comentário..."></textarea><br><br>

<input type="submit" value="Cadastrar"><br><br>

<h1>Avaliações dos Usuários</h1>
<?php
    $query_avaliacoes = "SELECT id, qtd_estrela, mensagem 
                        FROM avaliacoes2
                        ORDER BY id DESC";


    $result_avaliacoes = $conn->prepare($query_avaliacoes);


    $result_avaliacoes->execute();


    while ($row_avaliacao = $result_avaliacoes->fetch(PDO::FETCH_ASSOC)) {
 
        extract($row_avaliacao);

        echo "<p>Avaliação $id</p>";

        for ($i = 1; $i <= 5; $i++) {

            if ($i <= $qtd_estrela) {
                echo '<i class="estrela-preenchida fa-solid fa-star"></i>';
            } else {
                echo '<i class="estrela-vazia fa-solid fa-star"></i>';
            }
        }

        echo "<p>Mensagem: $mensagem</p><hr>";
    }
    ?>

</div>

</form>
    </div>
    </form>
    <script src="javascript/padrao.js"></script>
</body>

</html>