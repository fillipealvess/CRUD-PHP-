<?php
    include "connection.php";

    if (isset($_POST['email']) || isset($_POST['senha'])) {
        
        if(strlen($_POST['email']) == 0){
            echo "<script> alert('Preencha seu email!') </script>";
        }else if(strlen($_POST['senha']) == 0){
            echo "<script> alert('Preencha sua senha!') </script>";
        }else{
            
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM personal WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;
            if($quantidade == 1){
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: telap.php");

            }else{
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
        }

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>FitPlanner</title>
</head>

<body style="width: 100vw; height: 100vh;" class="d-flex flex-column align-items-md-center">
    <nav class="navbar bg-body-primary w-100 bg-primary ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                FitPlanner
            </a>
        </div>
    </nav>

    <main style="width: 100vw; height: 90vh;" class="d-flex flex-column justify-content-sm-center align-items-center">
        <div style="width: 60vw; height: 60vh;" class="d-flex justify-content-sm-center">
            <div class="bg-dark rounded container-sm text-white d-flex flex-column justify-content-center align-item-center">
                <div class="mb-3 text-center">
                    <h2>Acesse sua conta</h2>
                </div>
                <form method="post" action="">
                    <div class="mb-3 ">
                        <label for="formGroupExampleInput" class="form-label">E-mail</label>
                        <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="E-mail">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control" id="formGroupExampleInput2" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </main>


</body>

</html>