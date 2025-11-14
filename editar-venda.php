<h1>Editar Venda</h1>
<?php
include("config.php");

$id = $_GET["id_venda"] ?? null;
$sql = "SELECT * FROM venda WHERE id_venda = $id";
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action='?page=salvar-venda' method='POST'>
    <input type="hidden" name='acao' value='editar'>
    <input type="hidden" name='id_venda' value='<?php echo $row->id_venda; ?>'>

    <div class='mb-3'>
        <label>ID do Cliente:</label>
        <input type='number' name='cliente_id' class='form-control border-success' value='<?php echo $row->cliente_id; ?>'>
    </div>

    <div class='mb-3'>
        <label>ID do Funcionário:</label>
        <input type='number' name='funcionario_id' class='form-control border-success' value='<?php echo $row->funcionario_id; ?>'>
    </div>

    <div class='mb-3'>
        <label>ID do Modelo:</label>
        <input type='number' name='modelo_id' class='form-control border-success' value='<?php echo $row->modelo_id; ?>'>
    </div>

    <div class='mb-3'>
        <label>Valor da Venda:</label>
        <input type='number' step='0.01' name='valor_venda' class='form-control border-success' value='<?php echo $row->valor_venda; ?>'>
    </div>

    <div class='mb-3'>
        <label>Data da Venda:</label>
        <input type='date' name='data_venda' class='form-control border-success' value='<?php echo $row->data_venda; ?>'>
    </div>

    <div>
        <button type='submit' class='btn btn-primary'>Salvar Alterações</button>
    </div>
</form>