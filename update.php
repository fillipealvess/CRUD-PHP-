<?php 
    session_start();
    require "connection.php";
    $idpersonal = $_SESSION['id'];

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



?>