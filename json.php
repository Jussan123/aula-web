<?php
$titulo = 'JSON';
include __DIR__ . '/header.php';
?>

<main>
    <div class="container">
        <h1>Json</h1>
        <div id="noticias">
            Lista de notícias
        </div>
    </div>
</main>

<script>
    let dados = fetch('./rest/index.php')
        .then(response => response.json())
        .then(data => criarNoticias(data));

    function criarNoticias(dados) {
        let noticias = document.getElementById('noticias');
        // inserir estes resultados dentro da div noticias
        // criar elementos depois fazer um for para percorrer os dados

        dados.forEach(noticia => {
            let h1 = document.createElement('h1');
            h1.innerHTML = noticia.Titulo;
            noticias.appendChild(h1);

            let p = document.createElement('p');
            p.innerHTML = noticia.Descricao;
            noticias.appendChild(p);

            let hr = document.createElement('hr');
            noticias.appendChild(hr);
        });

    }
</script>

<?php
include __DIR__ . '/footer.php';
?>