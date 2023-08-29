<?php
$titulo = 'Portifolio';
include __DIR__ . '/header.php';
include_once __DIR__ . '/config/connection.php';

ini_set('display_errors', 1);

if (isset($_POST['titulo']) && isset($_POST['descricao'])) {
    $diretorio = __DIR__ . '/' . $image_folder;
    $nomeArquivo = $_FILES['imagem']['name'];
    $arquivo = $diretorio . $nomeArquivo;

    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo)) {
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];

        $pdo->query("INSERT INTO portifolio (titulo, descricao, imagem) VALUES ('$titulo', '$descricao', '$nomeArquivo')");

        echo 'Arquivo salvo com sucesso!';
    } else {
        echo 'Erro ao salvar arquivo!';
    }
} else {
    echo 'Erro ao salvar arquivo!';
}
?>

<main class="mt-5 mb-2">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Bem vindo ao meu portifolio profissional.</h1>
                <p>Aqui estão alguns dos meus projetos e trabalhos.</p>
                <?php
                    $resultado = $pdo->query("SELECT * FROM portifolio");
                    if($resultado) {
                        while($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                            echo '<div class="card mt-1">';
                            echo '  <img class="d-img-top" src="' . $image_folder . $linha['imagem'] . '" alt="Imagem do projeto">';
                            echo '  <div class="card-body">';
                            echo '      <h5 class="card-title">' . $linha['titulo'] . '</h5>';
                            echo '      <p class="card-text">' . $linha['descricao'] . '</p>';
                            echo '      <a href="#" class="btn btn-primary">Ver mais</a>';
                            echo '  </div>';
                            echo '</div>';

                        }
                    }
                ?>
            </div>
            <div class="col-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mt-1">
                        <label for="descricao" class="form-label">Titulo</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Dê um titulo">
                        <div class="mt-1">
                            <label class="form-label" for="descricao">Descrição</label>
                            <textarea class="form-control" name="descricao" id="descricao" rows="4"></textarea>
                        </div>
                        <div class="mt-1">
                            <label class="form-label" for="imagem">Selecione sua Imagem</label>
                            <input type="file" class="form-control" name="imagem" id="imagem">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary mt-2" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/footer.php';
?>