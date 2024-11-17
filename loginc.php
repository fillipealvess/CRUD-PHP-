<?php
    include "connection.php";
    
    if(isset($_POST['email']) || isset($_POST['senha'])){
        if (strlen($_POST['email']) == 0) {
            echo "<script>alert('Digite seu e-mail!')</script>";
        }else if(strlen($_POST['senha']) == 0){
            echo "<script>alert('Digite sua senha!')</script>";
        }else{
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sqlcode = "SELECT * FROM cliente WHERE email = '$email' LIMIT 1";
            $sqlquery = $mysqli->query($sqlcode) or die("Falha ao executar o código SQL: " . $mysqli->error);


                $usuario = $sqlquery->fetch_assoc();
                
                if (password_verify($senha, $usuario['senha'])) {
                    if(!isset($_SESSION)){
                        session_start();
    
                        $_SESSION['idc'] = $usuario['id'];
                        $_SESSION['nomec'] = $usuario['nome'];
    
                        header("Location: telac.php");
                    }
                }else{
                    echo "Falha ao logar, e-mail ou senha incorretos!";
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

    <main style="width: 100vw; height: 90vh;" class="d-flex flex-column justify-content-md-center align-items-md-center">
        <div style="width: 60vw; height: 60vh;" class="d-flex justify-content-md-center">
            <div class="bg-dark rounded container-sm text-white d-flex flex-column justify-content-center align-item-center">
                <div class="mb-3 text-center">
                    <h2>Acesse sua conta</h2>
                </div>
                <form method="POST" action="">
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