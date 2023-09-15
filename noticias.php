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
      $i = 0; // iniciar como zero
      while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="col-md-4">';
        echo '  <div class="card">';
        echo '    <img class="card-img-top" src="//picsum.photos/500/200/? ' . rand() . ' alt="Card image cap">';
        echo '    <div class="card-body">';
        echo '      <h2 class="card-title" id="titulo_' . $i . '"> ' . $linha['Titulo'] . ' </h2>';
        echo '      <p class="card-text">' . $linha['Descricao'] . '</p>';
        echo '      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
        $i++;
        //echo "<h2>" . $linha['Titulo'] . "</h2>";
        //echo "<p>" . $linha['Descricao'] . "</p>";
      }
    }
    ?>
  </div>


</main>
<script>
  const h2 = document.querySelectorAll('h2');
  console.log(h2);
  //h2[0].innerText = "Troquei o titulo!";

  h2.forEach(function(element, index) {
    console.log(element);
    console.log(index);
    // h2 = document.querySelectorAll('h2');
    // console.log(h2);
    // h2[index].innerText = "Titulo " + index + "!";
    element.innerText = "Titulo " + index + "!";

  });

  const titulo3 = document.getElementById('titulo_3');
  titulo3.innerText = "Troquei o titulo 3!";

  const links = document.querySelectorAll('.card a');

  links.forEach(function(element, index) {
    console.log("Achei os as: ", element);
    element.href = "http://google.com";
  });

  let pessoa = {
    nome: "João",
    profissao: "Programador",
    sexo: "Masculino",
    cpf: "123.456.789-00"
  }

  console.log("Nome: ", pessoa['nome']);
  console.log("Nome: ", pessoa.nome);

  let funcionario = [
    'João Pai',
    'CEO',
    'Masculino',
    '123.456.789-00'
  ];

  console.log(funcionario[0]);

  let listaPessoas = [];

  function adicionarPessoa(nome, profissao) {
    let pessoa = {
      nome: nome,
      profissao: profissao
    }
    listaPessoas.push(pessoa);
  }

  adicionarPessoa('João', 'Programador');
  adicionarPessoa('Maria', 'Analista');
  adicionarPessoa('José', 'Gerente');
  console.log(pessoa);
</script>
<?php
include __DIR__ . "/footer.php";
?>