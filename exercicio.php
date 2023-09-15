<?php
include __DIR__ . "/header.php";
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Exercício</h1>
                <p>Exercício de PHP</p>
                <form action="">
                    <div>
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div>
                        <label for="profissao" class="form-label">Profissão</label>
                        <input type="text" class="form-control" name="profissao" id="profissao">
                    </div>
                    <div>
                        <button id="executar">Adicionar Pessoa</button>
                    </div>
                </form>
                <table class="table" id="tabelaPessoas">
                    <tr>
                        <th>Nome</th>
                        <th>Profissão</th>
                    </tr>
                </table>
            </div>
        </div>
</main>
<script>
    let listaPessoas = [];

    function adicionarPessoa(nome, profissao) {
        let pessoa = {
            nome: nome,
            profissao: profissao
        };
        listaPessoas.push(pessoa);
        console.log(listaPessoas);
    }
    

    function cadastrarPessoa() {
        let nome = document.getElementById('nome').value;
        let profissao = document.getElementById('profissao').value;
        adicionarPessoa(nome, profissao);
    }

    const botao = document.getElementById('executar');

    botao.addEventListener('click', function(event) {
        cadastrarPessoa();
        adicionarTabela();
    });

    function adicionarTabela () {
        let tr = document.createElement('tr');
        let tdNome = document.createElement('td');
        let tdProfissao = document.createElement('td');

        tdNome.innerText = getElementById('nome').value;
        tdProfissao.innerText = getElementById('profissao').value;

        btTrash = document.createElement('button');
        btTrash.classList.add('bi', 'bi-trash');
        btTrash.innerText = " ";

        btTrash.addEventListener('click', function(event) {
            event.preventDefault();
            tr.remove();
        });
        
        const tabela = document.getElementById('tabelaPessoas');

        tr.appendChild(tdNome);
        tr.appendChild(tdProfissao);
        tabela.appendChild(tr);
    }

</script>
<?php
include __DIR__ . "/footer.php";
?>