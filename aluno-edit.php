<?php
    include('protect.php');
    require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Aluno</title>
</head>

<body>
    <?php include('navbar.php') ?>
    <div class="container mt-5 bg-dark text-white rounded p-4">
        <?php 
            if(isset($_GET['id'])){
                $aluno_id = mysqli_real_escape_string($mysqli, $_GET['id']);
                $sql = "SELECT * FROM cliente WHERE id='$aluno_id'";
                $query = mysqli_query($mysqli, $sql);
                if(mysqli_num_rows($query) > 0){
                    $aluno = mysqli_fetch_assoc($query);
                }
            
        ?>
        <form class="row g-3" method="POST" action="acoes.php">
            <input type="hidden" name="aluno_id" value="<?=$aluno['id'];?>">
            <div class="col-12">
                <h4>Editar aluno
                    <a href="telap.php" class="btn btn-danger float-end">Voltar</a>
                </h4>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Nome do Aluno</label>
                <input type="text" name="nome" value="<?=$aluno['nome'];?>" class="form-control" id="inputAddress" placeholder="Nome">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email" value="<?=$aluno['email'];?>" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <h4>Treino Peito</h4>
                <label for="inputAddress2" class="form-label">Exercício 1</label>
                <input type="text" name="ex1p" value="<?=$aluno['exep1'];?>" class="form-control" id="inputAddress2" placeholder="Exercício 1">
                <label for="inputAddress3" class="form-label">Exercício 2</label>
                <input type="text" name="ex2p" value="<?=$aluno['exep2'];?>" class="form-control" id="inputAddress3" placeholder="Exercício 2">
                <label for="inputAddress4" class="form-label">Exercício 3</label>
                <input type="text" name="ex3p" value="<?=$aluno['exep3'];?>" class="form-control" id="inputAddress4" placeholder="Exercício 3">
                <label for="inputState" class="form-label">1°Dia de treino</label>
                <select id="inputState" class="form-select" name="dia1p">
                    <option value="<?=$aluno['dia1_p'];?>" selected><?=$aluno['dia1_p'];?></option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                </select>
                <label for="inputState" class="form-label">2°Dia de treino</label>
                <select id="inputState" class="form-select" name="dia2p">
                    <option value="<?=$aluno['dia2_p'];?>" selected><?=$aluno['dia2_p'];?></option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                </select>
            </div>
            <div class="col-md-6">
                <h4>Treino Tríceps</h4>
                <label for="input2" class="form-label">Exercício 1</label>
                <input type="text" name="ex1t" value="<?=$aluno['exet1'];?>" class="form-control" id="input2" placeholder="Exercício 1">
                <label for="input3" class="form-label">Exercício 2</label>
                <input type="text" name="ex2t" value="<?=$aluno['exet2'];?>" class="form-control" id="input3" placeholder="Exercício 2">
                <label for="input4" class="form-label">Exercício 3</label>
                <input type="text" name="ex3t" value="<?=$aluno['exet3'];?>" class="form-control" id="input4" placeholder="Exercício 3">
                <label for="inputState" class="form-label">1°Dia de treino</label>
                <select id="inputState" class="form-select" name="dia1t">
                <option value="<?=$aluno['dia1_t'];?>" selected><?=$aluno['dia1_t'];?></option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                </select>
                <label for="inputState" class="form-label">2°Dia de treino</label>
                <select id="inputState" class="form-select" name="dia2t">
                <option value="<?=$aluno['dia2_t'];?>" selected><?=$aluno['dia2_t'];?></option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                </select>
            </div>
            <div class="col-md-6">
                <h4>Treino Costas</h4>
                <label for="input02" class="form-label">Exercício 1</label>
                <input type="text" name="ex1c" value="<?=$aluno['exec1'];?>" class="form-control" id="input02" placeholder="Exercício 1">
                <label for="input03" class="form-label">Exercício 2</label>
                <input type="text" name="ex2c" value="<?=$aluno['exec2'];?>" class="form-control" id="input03" placeholder="Exercício 2">
                <label for="input04" class="form-label">Exercício 3</label>
                <input type="text" name="ex3c" value="<?=$aluno['exec3'];?>" class="form-control" id="input04" placeholder="Exercício 3">
                <label for="inputState" class="form-label">1°Dia de treino</label>
                <select id="inputState" class="form-select" name="dia1c">
                    <option value="<?=$aluno['dia1_c'];?>" selected><?=$aluno['dia1_c'];?></option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                </select>
                <label for="inputState" class="form-label">2°Dia de treino</label>
                <select id="inputState" class="form-select" name="dia2c">
                    <option value="<?=$aluno['dia2_c'];?>" selected><?=$aluno['dia2_c'];?></option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                </select>
            </div>
            <div class="col-md-6">
                <h4>Treino Bíceps</h4>
                <label for="i2" class="form-label">Exercício 1</label>
                <input type="text" name="ex1b" value="<?=$aluno['exeb1'];?>"  class="form-control" id="i2" placeholder="Exercício 1">
                <label for="i3" class="form-label">Exercício 2</label>
                <input type="text" name="ex2b" value="<?=$aluno['exeb2'];?>"  class="form-control" id="i3" placeholder="Exercício 2">
                <label for="i4" class="form-label">Exercício 3</label>
                <input type="text" name="ex3b" value="<?=$aluno['exeb3'];?>"  class="form-control" id="i4" placeholder="Exercício 3">
                <label for="inputState" class="form-label">1°Dia de treino</label>
                <select id="inputState" class="form-select" name="dia1b">
                    <option value="<?=$aluno['dia1_b'];?>" selected><?=$aluno['dia1_b'];?></option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                </select>
                <label for="inputState" class="form-label">2°Dia de treino</label>
                <select id="inputState" class="form-select" name="dia2b">
                    <option value="<?=$aluno['dia2_b'];?>" selected><?=$aluno['dia2_b'];?></option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                </select>
            </div>
            <div class="col-md-6">
                <h4>Treino Pernas</h4>
                <label for="i02" class="form-label">Exercício 1</label>
                <input type="text" name="ex1pe" value="<?=$aluno['exepe1'];?>" class="form-control" id="i02" placeholder="Exercício 1">
                <label for="i03" class="form-label">Exercício 2</label>
                <input type="text" name="ex2pe" value="<?=$aluno['exepe2'];?>" class="form-control" id="i03" placeholder="Exercício 2">
                <label for="i04" class="form-label">Exercício 3</label>
                <input type="text" name="ex3pe" value="<?=$aluno['exepe3'];?>" class="form-control" id="i04" placeholder="Exercício 3">
                <label for="i05" class="form-label">Exercício 4</label>
                <input type="text" name="ex4pe" value="<?=$aluno['exepe4'];?>" class="form-control" id="i05" placeholder="Exercício 4">
                <label for="i06" class="form-label">Exercício 5</label>
                <input type="text" name="ex5pe" value="<?=$aluno['exepe5'];?>" class="form-control" id="i06" placeholder="Exercício 5">
                <label for="i07" class="form-label">Exercício 6</label>
                <input type="text" name="ex6pe" value="<?=$aluno['exepe6'];?>" class="form-control" id="i07" placeholder="Exercício 6">
                <label for="inputState" class="form-label">1°Dia de treino</label>
                <select id="inputState" class="form-select" name="dia1pe">
                    <option value="<?=$aluno['dia1_pe'];?>" selected><?=$aluno['dia1_pe'];?></option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                </select>
                <label for="inputState" class="form-label">2°Dia de treino</label>
                <select id="inputState" class="form-select" name="dia2pe">
                    <option value="<?=$aluno['dia2_pe'];?>" selected><?=$aluno['dia2_pe'];?></option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                </select>
            </div>
            <div class="col-md-6">
                <h4>Treino Ombro</h4>
                <label for="i02" class="form-label">Exercício 1</label>
                <input type="text" name="ex1o" class="form-control" id="i02" placeholder="Exercício 1">
                <label for="i03" class="form-label">Exercício 2</label>
                <input type="text" name="ex2o" class="form-control" id="i03" placeholder="Exercício 2">
                <label for="inputState" class="form-label">1°Dia de treino</label>
                <select id="inputState" class="form-select" name="dia1o">
                    <option value="<?=$aluno['dia1_o'];?>" selected><?=$aluno['dia1_o'];?></option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                </select>
                <label for="inputState" class="form-label">2°Dia de treino</label>
                <select id="inputState" class="form-select" name="dia2o">
                    <option value="<?=$aluno['dia2_o'];?>" selected><?=$aluno['dia2_o'];?></option>
                    <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="update_usuario">Editar</button>
            </div>
        </form>
        <?php 
            }else{
                echo "<h5>Aluno não encontrado!</h5>";
            }        
        ?>
    </div>

</body>

</html>