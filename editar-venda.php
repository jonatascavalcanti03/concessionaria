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
        <label>Cliente:</label>
        <select name='cliente_id_cliente' class='form-control border-success' required>
            <option value="">Selecione um Cliente</option>
            <?php
            $sql_cliente = "SELECT * FROM cliente";
            $res_cliente = $conn->query($sql_cliente);
            while ($row_cliente = $res_cliente->fetch_object()) {
                $selected = ($row_cliente->id_cliente == $row->cliente_id_cliente) ? "selected" : "";
                print "<option value='" . $row_cliente->id_cliente . "' $selected>" . $row_cliente->nome_cliente . "</option>";
            }
            ?>
        </select>
    </div>

    <div class='mb-3'>
        <label>Funcionário:</label>
        <select name='funcionario_id_funcionario' class='form-control border-success' required>
            <option value="">Selecione um Funcionário</option>
            <?php
            $sql_func = "SELECT * FROM funcionario";
            $res_func = $conn->query($sql_func);
            while ($row_func = $res_func->fetch_object()) {
                $selected = ($row_func->id_funcionario == $row->funcionario_id_funcionario) ? "selected" : "";
                print "<option value='" . $row_func->id_funcionario . "' $selected>" . $row_func->nome_funcionario . "</option>";
            }
            ?>
        </select>
    </div>

    <div class='mb-3'>
        <label>Modelo:</label>
        <select name='modelo_id_modelo' class='form-control border-success' required>
            <option value="">Selecione um Modelo</option>
            <?php
            $sql_modelo = "SELECT * FROM modelo";
            $res_modelo = $conn->query($sql_modelo);
            while ($row_modelo = $res_modelo->fetch_object()) {
                $selected = ($row_modelo->id_modelo == $row->modelo_id_modelo) ? "selected" : "";
                print "<option value='" . $row_modelo->id_modelo . "' $selected>" . $row_modelo->nome_modelo . "</option>";
            }
            ?>
        </select>
    </div>

    <div class='mb-3'>
        <label>Valor da Venda:</label>
        <input type='number' step="0.01" name='valor_venda' class='form-control border-success' value='<?php echo $row->valor_venda; ?>'>
    </div>

    <div class='mb-3'>
        <label>Data da Venda:</label>
        <input type='date' name='data_venda' class='form-control border-success' value='<?php echo $row->data_venda; ?>'>
    </div>

    <div>
        <button type='submit' class='btn btn-primary'>Salvar Alterações</button>
    </div>
</form>