<?php 
    session_start();
    require "connection.php";
    $idpersonal = $_SESSION['id'];

    if (isset($_POST['create_usuario'])) {
        $nome = mysqli_real_escape_string($mysqli,trim($_POST['nome']));
        $email = mysqli_real_escape_string($mysqli,trim($_POST['email']));
        $senha = isset($_POST['senha']) ? mysqli_real_escape_string($mysqli, password_hash($_POST['senha'], PASSWORD_DEFAULT)):"";
        $dia1b = mysqli_real_escape_string($mysqli,trim($_POST['dia1b']));
        $dia2b = mysqli_real_escape_string($mysqli,trim($_POST['dia2b']));
        $dia1c = mysqli_real_escape_string($mysqli,trim($_POST['dia1c']));
        $dia2c = mysqli_real_escape_string($mysqli,trim($_POST['dia2c']));
        $dia1p = mysqli_real_escape_string($mysqli,trim($_POST['dia1p']));
        $dia2p = mysqli_real_escape_string($mysqli,trim($_POST['dia2p']));
        $dia1t = mysqli_real_escape_string($mysqli,trim($_POST['dia1t']));
        $dia2t = mysqli_real_escape_string($mysqli,trim($_POST['dia2t']));
        $dia1pe = mysqli_real_escape_string($mysqli,trim($_POST['dia1pe']));
        $dia2pe = mysqli_real_escape_string($mysqli,trim($_POST['dia2pe']));
        $dia1o = mysqli_real_escape_string($mysqli,trim($_POST['dia1o']));
        $dia2o = mysqli_real_escape_string($mysqli,trim($_POST['dia2o']));
        $exp1 = mysqli_real_escape_string($mysqli,trim($_POST['ex1p']));
        $exp2 = mysqli_real_escape_string($mysqli,trim($_POST['ex2p']));
        $exp3 = mysqli_real_escape_string($mysqli,trim($_POST['ex3p']));
        $ext1 = mysqli_real_escape_string($mysqli,trim($_POST['ex1t']));
        $ext2 = mysqli_real_escape_string($mysqli,trim($_POST['ex2t']));
        $ext3 = mysqli_real_escape_string($mysqli,trim($_POST['ex3t']));
        $exc1 = mysqli_real_escape_string($mysqli,trim($_POST['ex1c']));
        $exc2 = mysqli_real_escape_string($mysqli,trim($_POST['ex2c']));
        $exc3 = mysqli_real_escape_string($mysqli,trim($_POST['ex3c']));
        $exb1 = mysqli_real_escape_string($mysqli,trim($_POST['ex1b']));
        $exb2 = mysqli_real_escape_string($mysqli,trim($_POST['ex2b']));
        $exb3 = mysqli_real_escape_string($mysqli,trim($_POST['ex3b']));
        $exo1 = mysqli_real_escape_string($mysqli,trim($_POST['ex1o']));
        $exo2 = mysqli_real_escape_string($mysqli,trim($_POST['ex2o']));
        $expe1 = mysqli_real_escape_string($mysqli,trim($_POST['ex1pe']));
        $expe2 = mysqli_real_escape_string($mysqli,trim($_POST['ex2pe']));
        $expe3 = mysqli_real_escape_string($mysqli,trim($_POST['ex3pe']));
        $expe4 = mysqli_real_escape_string($mysqli,trim($_POST['ex4pe']));
        $expe5 = mysqli_real_escape_string($mysqli,trim($_POST['ex5pe']));
        $expe6 = mysqli_real_escape_string($mysqli,trim($_POST['ex6pe']));

        if (strlen($nome) == 0 ||strlen($email) == 0  || strlen($senha) == 0) {
            echo "<script> alert('Preencha o formulário corretamente!') </script>";
            header("Location: aluno-create.php");
        }else{
            $sql = "INSERT INTO cliente (id_personal, email, senha, nome, dia1_c, dia2_c, dia1_b, dia2_b, dia1_t, dia2_t, dia1_p, dia2_p, dia1_pe, dia2_pe, dia1_o, dia2_o, exec1, exec2, exec3, exeb1, exeb2, exeb3, exet1,exet2, exet3, exep1, exep2, exep3, exeo1, exeo2, exepe1, exepe2, exepe3, exepe4, exepe5, exepe6) VALUES ($idpersonal, '$email', '$senha', '$nome', '$dia1c', '$dia2c', '$dia1b', '$dia2b', '$dia1t', '$dia2t', '$dia1p', '$dia2p', '$dia1pe', '$dia2pe', '$dia1o', '$dia2o', '$exc1', '$exc2', '$exc3', '$exb1', '$exb2', '$exb3', '$ext1', '$ext2', '$ext3', '$exp1', '$exp2', '$exp3', '$exo1', '$exo2', '$expe1', '$expe2', '$expe3', '$expe4', '$expe5', '$expe6')";

            mysqli_query($mysqli, $sql);
            if(mysqli_affected_rows($mysqli) > 0){
                echo "<script> alert('Aluno cadastrado!') </script>";
                header("Location: telap.php");
                exit;
            }else{
                echo "<script> alert('Aluno não cadastrado!') </script>";
                header("Location: telap.php");
                exit;
            }
        }
    }

    if (isset($_POST['update_usuario'])) {
        $aluno_id = mysqli_real_escape_string($mysqli,$_POST['aluno_id']);
    
        $nome = mysqli_real_escape_string($mysqli,trim($_POST['nome']));
        $email = mysqli_real_escape_string($mysqli,trim($_POST['email']));
        $senha = mysqli_real_escape_string($mysqli, trim($_POST['senha']));
        $dia1b = mysqli_real_escape_string($mysqli,trim($_POST['dia1b']));
        $dia2b = mysqli_real_escape_string($mysqli,trim($_POST['dia2b']));
        $dia1c = mysqli_real_escape_string($mysqli,trim($_POST['dia1c']));
        $dia2c = mysqli_real_escape_string($mysqli,trim($_POST['dia2c']));
        $dia1p = mysqli_real_escape_string($mysqli,trim($_POST['dia1p']));
        $dia2p = mysqli_real_escape_string($mysqli,trim($_POST['dia2p']));
        $dia1t = mysqli_real_escape_string($mysqli,trim($_POST['dia1t']));
        $dia2t = mysqli_real_escape_string($mysqli,trim($_POST['dia2t']));
        $dia1pe = mysqli_real_escape_string($mysqli,trim($_POST['dia1pe']));
        $dia2pe = mysqli_real_escape_string($mysqli,trim($_POST['dia2pe']));
        $dia1o = mysqli_real_escape_string($mysqli,trim($_POST['dia1o']));
        $dia2o = mysqli_real_escape_string($mysqli,trim($_POST['dia2o']));
        $exp1 = mysqli_real_escape_string($mysqli,trim($_POST['ex1p']));
        $exp2 = mysqli_real_escape_string($mysqli,trim($_POST['ex2p']));
        $exp3 = mysqli_real_escape_string($mysqli,trim($_POST['ex3p']));
        $ext1 = mysqli_real_escape_string($mysqli,trim($_POST['ex1t']));
        $ext2 = mysqli_real_escape_string($mysqli,trim($_POST['ex2t']));
        $ext3 = mysqli_real_escape_string($mysqli,trim($_POST['ex3t']));
        $exc1 = mysqli_real_escape_string($mysqli,trim($_POST['ex1c']));
        $exc2 = mysqli_real_escape_string($mysqli,trim($_POST['ex2c']));
        $exc3 = mysqli_real_escape_string($mysqli,trim($_POST['ex3c']));
        $exb1 = mysqli_real_escape_string($mysqli,trim($_POST['ex1b']));
        $exb2 = mysqli_real_escape_string($mysqli,trim($_POST['ex2b']));
        $exb3 = mysqli_real_escape_string($mysqli,trim($_POST['ex3b']));
        $exo1 = mysqli_real_escape_string($mysqli,trim($_POST['ex1o']));
        $exo2 = mysqli_real_escape_string($mysqli,trim($_POST['ex2o']));
        $expe1 = mysqli_real_escape_string($mysqli,trim($_POST['ex1pe']));
        $expe2 = mysqli_real_escape_string($mysqli,trim($_POST['ex2pe']));
        $expe3 = mysqli_real_escape_string($mysqli,trim($_POST['ex3pe']));
        $expe4 = mysqli_real_escape_string($mysqli,trim($_POST['ex4pe']));
        $expe5 = mysqli_real_escape_string($mysqli,trim($_POST['ex5pe']));
        $expe6 = mysqli_real_escape_string($mysqli,trim($_POST['ex6pe']));
    
       
            $sql = "UPDATE cliente SET email = '$email', nome = '$nome', dia1_c = '$dia1c', dia2_c = '$dia2c', dia1_b = '$dia1b', dia2_b = '$dia2b', dia1_t = '$dia1t', dia2_t = '$dia2t', dia1_p = '$dia1p', dia2_p = '$dia2p', dia1_pe = '$dia1pe', dia2_pe = '$dia2pe', dia1_o = '$dia1o', dia2_o = '$dia2o', exec1 = '$exc1', exec2 = '$exc2', exec3 = '$exc3', exeb1 = '$exb1', exeb2 = '$exb2', exeb3 = '$exb3', exet1 = '$ext1',exet2 = '$ext2', exet3 = '$ext3', exep1 = '$exp1', exep2 = '$exp2', exep3 = '$exp3', exeo1 = '$exo1', exeo2 = '$exo2', exepe1 = '$expe1', exepe2 = '$expe2', exepe3 = '$expe3', exepe4 = '$expe4', exepe5 = '$expe5', exepe6 = '$expe6'";
    
            if (!empty($senha)) {
                $sql .= ", senha='" . password_hash($senha, PASSWORD_DEFAULT) . "'";
            }
    
            $sql .= " WHERE id = '$aluno_id'";
    
            mysqli_query($mysqli, $sql);
            if(mysqli_affected_rows($mysqli) > 0){
                echo "<script> alert('Aluno atualizado!') </script>";
                header("Location: telap.php");
                exit;
            }else{
                echo "<script> alert('Aluno não atualizado!') </script>";
                header("Location: telap.php");
                exit;
            }
        }


    
        
        
    if(isset($_POST['delete_usuario'])){
        $aluno_id = mysqli_real_escape_string($mysqli, $_POST['delete_usuario']);
        $sql = "DELETE FROM cliente WHERE id = '$aluno_id'";

        mysqli_query($mysqli, $sql);

        if(mysqli_affected_rows($mysqli) > 0){
            $_SESSION['message'] = "Usuário deletado com sucesso";
            header('Location: telap.php');
            exit;
        }else{
            $_SESSION['message'] = "Usuário não foi deletado";
            header('Location: telap.php');
            exit;
        }
    }




?>