<?php
$titulo = 'Contato';
include __DIR__ . '/header.php';
include_once __DIR__ . '/config/connection.php';
?>

<main class="mt-5 mb-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" enctype="multipart/form-data">
                    <h1>Sou Jussan. Seja bem vindo.</h1>
                    <p>Preencha o formulário para entrar em contato.</p>

                    <div class="mb-3">
                        <label for="nome_input" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome_input" placeholder="João do Caminhão">
                    </div>
                    <div class="mb-3">
                        <label for="email_input" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email_input" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="mensagem_input" class="form-label">Deixe sua mensagem!</label>
                        <textarea class="form-control" name="mensagem" id="mensagem_input" rows="3"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </form>
            </div>
            <div class="col-md-6">
                <?php
                echo isset($_GET['nome']) ? $_GET['nome'] . '<br>' : 'Nome não informado <br>';
                echo isset($_GET['email']) ? $_GET['email'] . '<br>' : 'E-mail não informado<br>';
                echo isset($_GET['mensagem']) ? $_GET['mensagem'] . '<br>' : 'Mensagem não informada';

                if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['mensagem'])) {
                    $nome = $_GET['nome'];
                    $email = $_GET['email'];
                    $mensagem = $_GET['mensagem'];

                    $pdo -> query("INSERT INTO contato (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')");
                    if($pdo){
                        echo '<div class="alert alert-success">Mensagem enviada com sucesso!</div>';
                    } else {
                        echo '<div class="alert alert-danger">Erro ao enviar mensagem!</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</main>
<?php
include __DIR__ . '/footer.php';
?>