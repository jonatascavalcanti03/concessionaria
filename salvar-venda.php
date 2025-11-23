<?php
include("config.php");

switch ($_POST["acao"] ?? $_GET["acao"]) {
    case "cadastrar":
        $cliente = $_POST["cliente_id_cliente"];
        $funcionario = $_POST["funcionario_id_funcionario"];
        $modelo = $_POST["modelo_id_modelo"];
        $valor = $_POST["valor_venda"];
        $data = $_POST["data_venda"];

        $sql = "INSERT INTO venda (cliente_id_cliente, funcionario_id_funcionario, modelo_id_modelo, valor_venda, data_venda)
                VALUES ('$cliente', '$funcionario', '$modelo', '$valor', '$data')";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Venda cadastrada com sucesso!');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar venda: " . $conn->error . "');</script>";
        }
        break;

    case "editar":
        $id = $_POST["id_venda"];
        $cliente = $_POST["cliente_id_cliente"];
        $funcionario = $_POST["funcionario_id_funcionario"];
        $modelo = $_POST["modelo_id_modelo"];
        $valor = $_POST["valor_venda"];
        $data = $_POST["data_venda"];

        $sql = "UPDATE venda SET 
                    cliente_id_cliente = '$cliente',
                    funcionario_id_funcionario = '$funcionario',
                    modelo_id_modelo = '$modelo',
                    valor_venda = '$valor',
                    data_venda = '$data'
                WHERE id_venda = $id";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Venda atualizada com sucesso!');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        } else {
            print "<script>alert('Erro ao atualizar venda: " . $conn->error . "');</script>";
        }
        break;

    case "excluir":
        $id = $_GET["id_venda"];
        $sql = "DELETE FROM venda WHERE id_venda = $id";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Venda excluída com sucesso!');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        } else {
            print "<script>alert('Erro ao excluir venda: " . $conn->error . "');</script>";
        }
        break;
}
?>