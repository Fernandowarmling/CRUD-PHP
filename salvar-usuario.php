<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios (nome,email,senha, data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";
        $res = $conn->query($sql);
        if ($res == true) {
            print "<script>alert('Cadastro Realizado com Sucesso')</script>";
            print "<script>location.href='?page=default'</script>";
        } else {
            print "<script>alert('Erro ao Cadastrar Usuario')</script>";
            print "<script>location.href='?page=default'</script>";
        }

        break;

    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE usuarios SET  
        nome= '{$nome}',
        email= '{$email}',
        senha= '{$senha}',
        data_nasc = '{$data_nasc}'
        WHERE
         id=" . $_REQUEST["id"];

        $res = $conn->query($sql);
        if ($res == true) {
            print "<script>alert('Edição Realizada com Sucesso')</script>";
            print "<script>location.href='?page=default'</script>";
        } else {
            print "<script>alert('Erro ao Editar Usuario')</script>";
            print "<script>location.href='?page=default'</script>";
        }

        break;
    case 'excluir':
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);
        if ($res == true) {
            print "<script>alert('Exclusão Realizada com Sucesso')</script>";
            print "<script>location.href='?page=default'</script>";
        } else {
            print "<script>alert('Erro ao Excluir Usuario')</script>";
            print "<script>location.href='?page=default'</script>";
        }

        break;

        
}
