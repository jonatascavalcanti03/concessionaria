<?php
include("config.php"); 

switch ($_REQUEST["acao"] ?? '') {
    case "editar":
        $id = $_POST["id_cliente"];
        $nome = $_POST["nome_cliente"];
        $telefone = $_POST["telefone_cliente"];
        $cpf = $_POST["cpf_cliente"];
        $email = $_POST["email_cliente"];
        $endereco = $_POST["endereco_cliente"];
        $nascimento = $_POST["dt_nasc_cliente"];

        $sql = "UPDATE cliente SET 
                    nome_cliente = '$nome',
                    telefone_cliente = '$telefone',
                    cpf_cliente = '$cpf',
                    email_cliente = '$email',
                    endereco_cliente = '$endereco',
                    dt_nasc_cliente = '$nascimento'
                WHERE id_cliente = $id";

        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Cliente atualizado com sucesso!');</script>";
            print "<script>location.href='?page=listar-cliente';</script>";
        } else {
            print "<script>alert('Erro ao atualizar cliente.');</script>";
        }
        break;

    case "cadastrar":
        $nome = $_POST["nome_cliente"];
        $telefone = $_POST["telefone_cliente"];
        $cpf = $_POST["cpf_cliente"];
        $email = $_POST["email_cliente"];
        $endereco = $_POST["endereco_cliente"];
        $nascimento = $_POST["dt_nasc_cliente"];

        $sql = "INSERT INTO cliente (nome_cliente, telefone_cliente, cpf_cliente, email_cliente, endereco_cliente, dt_nasc_cliente)
                VALUES ('$nome', '$telefone', '$cpf', '$email', '$endereco', '$nascimento')";

        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Cliente cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar-cliente';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar cliente.');</script>";
        }
        break;

    case "excluir":
        $id = $_REQUEST["id_cliente"];
        $sql = "DELETE FROM cliente WHERE id_cliente = $id";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Cliente excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar-cliente';</script>";
        } else {
            print "<script>alert('Erro ao excluir cliente.');</script>";
        }
        break;
}
?>