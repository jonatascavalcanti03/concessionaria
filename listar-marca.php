<h1>Listar Marcas</h1>
<?php
include("config.php");

$sql = "SELECT * FROM marca";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p>Encontrou <b>$qtd</b> marca(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th><th>Nome</th><th>Cor</th><th>Ano</th><th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>$row->id_marca</td><td>$row->nome_marca</td><td>$row->cor_carro</td><td>$row->ano_carro</td>";
        print "<td>
            <button class='btn btn-success' onclick=\"location.href='?page=editar-marca&id_marca=$row->id_marca';\">Editar</button>
            <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza?')){location.href='?page=salvar-marca&acao=excluir&id_marca=$row->id_marca';}\">Excluir</button>
        </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p>Não encontrou marcas cadastradas.</p>";
}
?>