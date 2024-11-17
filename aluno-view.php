<?php
require 'connection.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aluno - Visualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Visualizar usuário
                            <a href="telap.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body mt-0">
                        <?php
                            if (isset($_GET['id'])) {
                            $cliente_id = mysqli_real_escape_string($mysqli, $_GET['id']);
                            $sql = "SELECT * FROM cliente WHERE id='$cliente_id'";
                            $query = mysqli_query($mysqli, $sql);
                             if (mysqli_num_rows($query) > 0) {
                            $cliente = mysqli_fetch_array($query);
                        ?>
                        <div class="container mt-0">
                            <table class="table table-bordered table-striped table-dark ">
                                <thead>
                                    <tr>
                                        <th colspan="3">Treino de <?=$cliente['nome'];?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Início espaço treino1 -->
                                    <tr>
                                        <td rowspan="3" class="text-center align-middle">
                                            <p class="h3">Treino de Costas</p>
                                            <p class="text-uppercase">
                                                <?=$cliente['dia1_c'];?>
                                                <br>
                                                <?=$cliente['dia2_c'];?>
                                            </p>
                                        </td>
                                        <td colspan="2">
                                            <p><?=$cliente['exec1'];?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exec2'];?></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exec3'];?></p>
                                        </td>
                                    </tr>
                                    <!-- Fim espaço treino 1 -->
                                    <tr>
                                        <td rowspan="3" class="text-center align-middle">
                                            <p class="h3">Treino de Bíceps</p>
                                            <p class="text-uppercase">
                                                <?=$cliente['dia1_b'];?>
                                                <br>
                                                <?=$cliente['dia2_b'];?>
                                            </p>
                                        </td>
                                        <td colspan="2">
                                            <p><?=$cliente['exeb1'];?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exeb2'];?></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exeb3'];?></p>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td rowspan="3" class="text-center align-middle">
                                            <p class="h3">Treino de Peito</p>
                                            <p class="text-uppercase">
                                                <?=$cliente['dia1_p'];?>
                                                <br>
                                                <?=$cliente['dia2_p'];?>
                                            </p>
                                        </td>
                                        <td colspan="2">
                                            <p><?=$cliente['exep1'];?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exep2'];?></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exep3'];?></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td rowspan="3" class="text-center align-middle">
                                            <p class="h3">Treino de Tríceps</p>
                                            <p class="text-uppercase">
                                                <?=$cliente['dia1_t'];?>
                                                <br>
                                                <?=$cliente['dia2_t'];?>
                                            </p>
                                        </td>
                                        <td colspan="2">
                                            <p><?=$cliente['exet1'];?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exet2'];?></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exet3'];?></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td rowspan="3" class="text-center align-middle">
                                            <p class="h3">Treino de Ombro</p>
                                            <p class="text-uppercase">
                                                <?=$cliente['dia1_o'];?>
                                                <br>
                                                <?=$cliente['dia2_o'];?>
                                            </p>
                                        </td>
                                        <td colspan="2">
                                            <p><?=$cliente['exeo1'];?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exeo2'];?></p>
                                        </td>
                                    </tr>
                                    <tr>

                                    </tr>

                                    <tr>
                                        <td rowspan="6" class="text-center align-middle">
                                            <p class="h3">Treino de Perna</p>
                                            <p class="text-uppercase">
                                                <?=$cliente['dia1_pe'];?>
                                                <br>
                                                <?=$cliente['dia2_pe'];?>
                                            </p>
                                        </td>
                                        <td colspan="2">
                                            <p><?=$cliente['exepe1'];?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exepe2'];?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exepe3'];?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exepe4'];?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exepe5'];?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p><?=$cliente['exepe6'];?></p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <?php
                } else {
                  echo "<h5>Usuário não encontrado</h5>";
                }
              }
              ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>