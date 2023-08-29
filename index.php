<?php
$titulo = 'Inicial';
?>

<?php
include __DIR__ . '/header.php';
?>
<main>
    <div id="exemploCarrossel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/tecnico.png" class="d-block w-100" alt="Modelo ao centro sorrindo segurando um tablet, Escritas: Faculdade Senac.">
            </div>
            <div class="carousel-item">
                <img src="assets/images/ensinomedio.png" class="d-block w-100" alt="Modelo ao centro sorrindo segurando um tablet, Escritas: Faculdade Senac.">
            </div>
            <div class="carousel-item">
                <img src="assets/images/corporativo.png" class="d-block w-100" alt="Modelo ao centro sorrindo segurando um tablet, Escritas: Faculdade Senac.">
            </div>
            <div class="carousel-item">
                <img src="assets/images/faculdade.png" class="d-block w-100" alt="Modelo ao centro sorrindo segurando um tablet, Escritas: Faculdade Senac.">
            </div>
            <div class="carousel-item">
                <img src="assets/images/pos.png" class="d-block w-100" alt="Modelo ao centro sorrindo segurando um tablet, Escritas: Faculdade Senac.">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#exemploCarrossel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#exemploCarrossel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Bem vindos ao meu site feliz.</h1>
                <p>Seja bem vindo ao melhor site da América.</p>
            </div>
            <div class="col-6">
                <h1>Bem vindos ao meu site feliz.</h1>
                <p>Seja bem vindo ao melhor site da América.</p>
            </div>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/footer.php';
?>