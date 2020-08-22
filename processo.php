<?php
    session_start();

    $id = 0;
    $update = false;
    $nome = '';
    $cidade = '';

    // conectando no banco de dados 
    $mysqli = new mysqli('localhost', 'root', '', 'erp_crud') or die(mysqli_error($mysqli));

    // rotina de inclusão de registros no banco de dados (registros passados via formulario)
    if(isset($_POST['gravar'])) {
        $nome = $_POST['nome'];
        $cidade = $_POST['cidade'];

        $mysqli->query("INSERT INTO erp_tb_pessoas(nome, cidade) VALUES('$nome', '$cidade')") or
            die($mysqli->error);

        $_SESSION['message'] = "Registro inserido!";
        $_SESSION['msg_type'] = "success";

        chamarHeader();
    }

    // rotina para deletar registros no banco de dados 
    if(isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM erp_tb_pessoas WHERE id=$id") or die($mysqli->error());

        $_SESSION['message'] = "Registro deletado!";
        $_SESSION['msg_type'] = "danger";

        chamarHeader();
    }

    if(isset($_GET['apagarTudo'])) {
        $id = $_GET['apagarTudo'];
        $mysqli->query("DELETE FROM erp_tb_pessoas") or die($mysqli->error());

        $_SESSION['message'] = "Todos registros deletados!";
        $_SESSION['msg_type'] = "danger";

        chamarHeader();
    }

    if(isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $resultado = $mysqli->query("SELECT * FROM erp_tb_pessoas WHERE id=$id") or 
            die($mysqli->error());

        if(is_iterable($resultado)==1) {
            $linha = $resultado->fetch_array();
            $nome = $linha['nome'];
            $cidade = $linha['cidade'];
        }
    }

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cidade = $_POST['cidade'];

        $mysqli->query("UPDATE erp_tb_pessoas SET nome='$nome', cidade='$cidade' WHERE id=$id") or 
            die($mysqli->error());

        $_SESSION['message'] = "Registro alterado!";
        $_SESSION['msg_type'] = "warning";

        chamarHeader();
    }

    function chamarHeader() {
        header("location: index.php");
    }
?>