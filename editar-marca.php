<h1>Editar Marca</h1>
<?php
include("config.php");

$id = $_GET["id_marca"] ?? null;
$sql = "SELECT * FROM marca WHERE id_marca = $id";
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action='?page=salvar-marca' method='POST'>
    <input type="hidden" name='acao' value='editar'>
    <input type="hidden" name='id_marca' value='<?php echo $row->id_marca; ?>'>

    <div class='mb-3'>
        <label>Nome da Marca:</label>
        <input type='text' name='nome_marca' class='form-control border-success' value='<?php echo $row->nome_marca; ?>'>
    </div>

    <div class='mb-3'>
        <label>Cor do Carro:</label>
        <input type='text' name='cor_carro' class='form-control border-success' value='<?php echo $row->cor_carro; ?>'>
    </div>

    <div class='mb-3'>
        <label>Ano:</label>
        <input type='number' name='ano_carro' class='form-control border-success' value='<?php echo $row->ano_carro; ?>'>
    </div>

    <div>
        <button type='submit' class='btn btn-primary'>Salvar Alterações</button>
    </div>
</form>