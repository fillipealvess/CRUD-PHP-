<?php
    include('protect.php');
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include('navbar.php') ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista dos Alunos
                        <a href="aluno-create.php" class="btn btn-primary float-end">Adicionar aluno</a>
                        <a href="grafico.php" class="btn btn-warning float-end">Estatísticas</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM cliente WHERE id_personal = '$id'";
                                $clientes = mysqli_query($mysqli, $sql);
                                if(mysqli_num_rows($clientes) > 0){
                                    foreach($clientes as $cliente){
                                ?>
                                <tr>
                                    <td><?=$cliente['id']?></td>
                                    <td><?=$cliente['nome']?></td>
                                    <td><?=$cliente['email']?></td>
                                    <td>
                                        <a href="aluno-view.php?id=<?=$cliente['id']?>" class="btn btn-secondary btn-sm">Visualizar</a>
                                        <a href="aluno-edit.php?id=<?=$cliente['id']?>" class="btn btn-success btn-sm">Editar</a>
                                        <form action="acoes.php" method="post" class="d-inline">
                                            <button onclick="return confirm('Deseja realmente exluir ?')" type="submit" name="delete_usuario" class="btn btn-danger btn-sm" value="<?=$cliente['id'];?>">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php 
                                }
                            }else{
                                    echo "<h5>Nenhum usuário encontrado</h5>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="logout.php" class="btn btn-danger float-end mw-20">Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>