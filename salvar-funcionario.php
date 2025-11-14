<?php
include("config.php");

switch ($_POST["acao"] ?? $_GET["acao"]) {
    case "cadastrar":
        $nome = $_POST["nome_funcionario"];
        $telefone = $_POST["telefone_funcionario"];
        $email = $_POST["email_funcionario"];

        $sql = "INSERT INTO funcionario (nome_funcionario, telefone_funcionario, email_funcionario)
                VALUES ('$nome', '$telefone', '$email')";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Funcionário cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar-funcionario';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar funcionário.');</script>";
        }
        break;

    case "editar":
        $id = $_POST["id_funcionario"];
        $nome = $_POST["nome_funcionario"];
        $telefone = $_POST["telefone_funcionario"];
        $email = $_POST["email_funcionario"];

        $sql = "UPDATE funcionario SET 
                    nome_funcionario = '$nome',
                    telefone_funcionario = '$telefone',
                    email_funcionario = '$email'
                WHERE id_funcionario = $id";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Funcionário atualizado com sucesso!');</script>";
            print "<script>location.href='?page=listar-funcionario';</script>";
        } else {
            print "<script>alert('Erro ao atualizar funcionário.');</script>";
        }
        break;

    case "excluir":
        $id = $_GET["id_funcionario"];
        $sql = "DELETE FROM funcionario WHERE id_funcionario = $id";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Funcionário excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar-funcionario';</script>";
        } else {
            print "<script>alert('Erro ao excluir funcionário.');</script>";
        }
        break;
}
?>