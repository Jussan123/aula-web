<?php
$titulo = "Notícias";
include __DIR__ . "/header.php";
include_once __DIR__ . "/config/connection.php";
?>
<main>
    <div class="row">
        <?php

            $sql = "SELECT * FROM Noticias";
            $resultado = $pdo->query($sql);

            if ($resultado) {
                while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="col-md-4">';
                    echo '  <div class="card">';
                    echo '    <img class="card-img-top" src="//picsum.photos/500/200/? '. rand() .' alt="Card image cap">';
                    echo '    <div class="card-body">';
                    echo '      <h2 class="card-title"> '. $linha['Titulo'] .' </h2>';
                    echo '      <p class="card-text">'. $linha['Descricao'] .'</p>';
                    echo '      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
                    echo '    </div>';
                    echo '  </div>';
                    echo '</div>';
                    //echo "<h2>" . $linha['Titulo'] . "</h2>";
                    //echo "<p>" . $linha['Descricao'] . "</p>";
                }
        }
        ?>
    </div>
<!--
    <div class="card-group">
        <div class="card">
          <img class="card-img-top" src="/assets/images/corporativo.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"> $linha </h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="/assets/images/ensinomedio.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="/assets/images/tecnico.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
    </div>
-->
   
</main>
<?php
include __DIR__ . "/footer.php";
?>