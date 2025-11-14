<?php
include("config.php");

switch ($_POST["acao"] ?? $_GET["acao"]) {
    case "cadastrar":
        $cliente = $_POST["cliente_id"];
        $funcionario = $_POST["funcionario_id"];
        $modelo = $_POST["modelo_id"];
        $valor = $_POST["valor_venda"];
        $data = $_POST["data_venda"];

        $sql = "INSERT INTO venda (cliente_id, funcionario_id, modelo_id, valor_venda, data_venda)
                VALUES ('$cliente', '$funcionario', '$modelo', '$valor', '$data')";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Venda cadastrada com sucesso!');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar venda.');</script>";
        }
        break;

    case "editar":
        $id = $_POST["id_venda"];
        $cliente = $_POST["cliente_id"];
        $funcionario = $_POST["funcionario_id"];
        $modelo = $_POST["modelo_id"];
        $valor = $_POST["valor_venda"];
        $data = $_POST["data_venda"];

        $sql = "UPDATE venda SET 
                    cliente_id = '$cliente',
                    funcionario_id = '$funcionario',
                    modelo_id = '$modelo',
                    valor_venda = '$valor',
                    data_venda = '$data'
                WHERE id_venda = $id";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Venda atualizada com sucesso!');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        } else {
            print "<script>alert('Erro ao atualizar venda.');</script>";
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
            print "<script>alert('Erro ao excluir venda.');</script>";
        }
        break;
}
?>