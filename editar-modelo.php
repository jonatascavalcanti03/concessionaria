<h1>Editar Modelo</h1>
<?php
include("config.php");

$id = $_GET["id_modelo"] ?? null;
$sql = "SELECT * FROM modelo WHERE id_modelo = $id";
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action='?page=salvar-modelo' method='POST'>
    <input type="hidden" name='acao' value='editar'>
    <input type="hidden" name='id_modelo' value='<?php echo $row->id_modelo; ?>'>

    <div class='mb-3'>
        <label>Nome do Modelo:</label>
        <input type='text' name='nome_modelo' class='form-control border-success' value='<?php echo $row->nome_modelo; ?>'>
    </div>

    <div class='mb-3'>
        <label>Cor:</label>
        <input type='text' name='cor_modelo' class='form-control border-success' value='<?php echo $row->cor_modelo; ?>'>
    </div>

    <div class='mb-3'>
        <label>Ano:</label>
        <input type='number' name='ano_modelo' class='form-control border-success' value='<?php echo $row->ano_modelo; ?>'>
    </div>

    <div class='mb-3'>
        <label>Tipo:</label>
        <input type='text' name='tipo_modelo' class='form-control border-success' value='<?php echo $row->tipo_modelo; ?>'>
    </div>

    <div class='mb-3'>
        <label>ID da Marca:</label>
        <input type='number' name='marca_id_marca' class='form-control border-success' value='<?php echo $row->marca_id_marca; ?>'>
    </div>

    <div>
        <button type='submit' class='btn btn-primary'>Salvar Alterações</button>
    </div>
</form>