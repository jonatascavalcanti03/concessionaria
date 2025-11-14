<h1>Editar Cliente</h1>
<?php
include("config.php");

$id = $_GET["id_cliente"] ?? null;

$sql = "SELECT * FROM cliente WHERE id_cliente = $id";
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action='?page=salvar-cliente' method='POST'>
    <input type="hidden" name='acao' value='editar'>
    <input type="hidden" name='id_cliente' value='<?php echo $row->id_cliente; ?>'>

    <div class='mb-3'>
        <label>Nome:</label>
        <input type='text' name='nome_cliente' class='form-control border-success' value='<?php echo $row->nome_cliente; ?>' required>
    </div>

    <div class='mb-3'>
        <label>Telefone:</label>
        <input type='text' name='telefone_cliente' class='form-control border-success' value='<?php echo $row->telefone_cliente; ?>' required>
    </div>

    <div class='mb-3'>
        <label>CPF:</label>
        <input type='text' name='cpf_cliente' class='form-control border-success' value='<?php echo $row->cpf_cliente; ?>' required>
    </div>

    <div class='mb-3'>
        <label>E-mail:</label>
        <input type='email' name='email_cliente' class='form-control border-success' value='<?php echo $row->email_cliente; ?>'>
    </div>

    <div class='mb-3'>
        <label>Endereço:</label>
        <input type='text' name='endereco_cliente' class='form-control border-success' value='<?php echo $row->endereco_cliente; ?>'>
    </div>

    <div class='mb-3'>
        <label>Data de Nascimento:</label>
        <input type='date' name='dt_nasc_cliente' class='form-control border-success' value='<?php echo $row->dt_nasc_cliente; ?>'>
    </div>

    <div>
        <button type='submit' class='btn btn-primary'>Salvar Alterações</button>
    </div>
</form>