<?php
include("config.php");

switch ($_REQUEST["acao"] ?? '') {
    case "cadastrar":
        $nome = $_POST["nome_marca"];
        $cor = $_POST["cor_carro"];
        $ano = $_POST["ano_carro"];

        $sql = "INSERT INTO marca (nome_marca, cor_carro, ano_carro) VALUES ('$nome', '$cor', '$ano')";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Marca cadastrada com sucesso!');</script>";
            print "<script>location.href='?page=listar-marca';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar marca.');</script>";
        }
        break;

    case "editar":
        $id = $_POST["id_marca"];
        $nome = $_POST["nome_marca"];
        $cor = $_POST["cor_carro"];
        $ano = $_POST["ano_carro"];

        $sql = "UPDATE marca SET nome_marca = '$nome', cor_carro = '$cor', ano_carro = '$ano' WHERE id_marca = $id";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Marca atualizada com sucesso!');</script>";
            print "<script>location.href='?page=listar-marca';</script>";
        } else {
            print "<script>alert('Erro ao atualizar marca.');</script>";
        }
        break;

    case "excluir":
        $id = $_REQUEST["id_marca"];
        $sql = "DELETE FROM marca WHERE id_marca = $id";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Marca excluída com sucesso!');</script>";
            print "<script>location.href='?page=listar-marca';</script>";
        } else {
            print "<script>alert('Erro ao excluir marca.');</script>";
        }
        break;
}
?>