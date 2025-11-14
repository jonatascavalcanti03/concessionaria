<h1>Listar Modelos</h1>
<?php
include("config.php");

$sql = "SELECT * FROM modelo";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p>Encontrou <b>$qtd</b> modelo(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th><th>Nome</th><th>Cor</th><th>Ano</th><th>Tipo</th><th>Marca ID</th><th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>$row->id_modelo</td><td>$row->nome_modelo</td><td>$row->cor_modelo</td><td>$row->ano_modelo</td><td>$row->tipo_modelo</td><td>$row->marca_id</td>";
        print "<td>
            <button class='btn btn-success' onclick=\"location.href='?page=editar-modelo&id_modelo=$row->id_modelo';\">Editar</button>
            <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza?')){location.href='?page=salvar-modelo&acao=excluir&id_modelo=$row->id_modelo';}\">Excluir</button>
        </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p>Não encontrou modelos cadastrados.</p>";
}
?>