<h1>Listar Vendas</h1>
<?php
include("config.php");

$sql = "SELECT * FROM venda";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p>Encontrou <b>$qtd</b> venda(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th><th>Cliente</th><th>Funcionário</th><th>Modelo</th><th>Valor</th><th>Data</th><th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>$row->id_venda</td><td>$row->cliente_id</td><td>$row->funcionario_id</td><td>$row->modelo_id</td><td>$row->valor_venda</td><td>$row->data_venda</td>";
        print "<td>
            <button class='btn btn-success' onclick=\"location.href='?page=editar-venda&id_venda=$row->id_venda';\">Editar</button>
            <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza?')){location.href='?page=salvar-venda&acao=excluir&id_venda=$row->id_venda';}\">Excluir</button>
        </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p>Não encontrou vendas cadastradas.</p>";
}
?>