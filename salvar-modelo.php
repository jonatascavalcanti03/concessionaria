<?php
include("config.php");

switch ($_POST["acao"] ?? $_GET["acao"]) {
    case "cadastrar":
        $nome = $_POST["nome_modelo"];
        $cor = $_POST["cor_modelo"];
        $ano = $_POST["ano_modelo"];
        $tipo = $_POST["tipo_modelo"];
        $marca = $_POST["marca_id"];

        $sql = "INSERT INTO modelo (nome_modelo, cor_modelo, ano_modelo, tipo_modelo, marca_id)
                VALUES ('$nome', '$cor', '$ano', '$tipo', '$marca')";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Modelo cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar-modelo';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar modelo.');</script>";
        }
        break;

    case "editar":
        $id = $_POST["id_modelo"];
        $nome = $_POST["nome_modelo"];
        $cor = $_POST["cor_modelo"];
        $ano = $_POST["ano_modelo"];
        $tipo = $_POST["tipo_modelo"];
        $marca = $_POST["marca_id"];

        $sql = "UPDATE modelo SET 
                    nome_modelo = '$nome',
                    cor_modelo = '$cor',
                    ano_modelo = '$ano',
                    tipo_modelo = '$tipo',
                    marca_id = '$marca'
                WHERE id_modelo = $id";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Modelo atualizado com sucesso!');</script>";
            print "<script>location.href='?page=listar-modelo';</script>";
        } else {
            print "<script>alert('Erro ao atualizar modelo.');</script>";
        }
        break;

    case "excluir":
        $id = $_GET["id_modelo"];
        $sql = "DELETE FROM modelo WHERE id_modelo = $id";
        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('Modelo excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar-modelo';</script>";
        } else {
            print "<script>alert('Erro ao excluir modelo.');</script>";
        }
        break;
}
?>