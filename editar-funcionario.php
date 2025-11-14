<h1>Editar Funcionário</h1>
<?php
include("config.php");

$id = $_GET["id_funcionario"] ?? null;
$sql = "SELECT * FROM funcionario WHERE id_funcionario = $id";
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action='?page=salvar-funcionario' method='POST'>
    <input type="hidden" name='acao' value='editar'>
    <input type="hidden" name='id_funcionario' value='<?php echo $row->id_funcionario; ?>'>

    <div class='mb-3'>
        <label>Nome:</label>
        <input type='text' name='nome_funcionario' class='form-control border-success' value='<?php echo $row->nome_funcionario; ?>' required>
    </div>

    <div class='mb-3'>
        <label>Telefone:</label>
        <input type='text' name='telefone_funcionario' class='form-control border-success' value='<?php echo $row->telefone_funcionario; ?>'>
    </div>

    <div class='mb-3'>
        <label>E-mail:</label>
        <input type='email' name='email_funcionario' class='form-control border-success' value='<?php echo $row->email_funcionario; ?>'>
    </div>

    <div>
        <button type='submit' class='btn btn-primary'>Salvar Alterações</button>
    </div>
</form>