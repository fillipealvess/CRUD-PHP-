<?php 
    require('connection.php');
    require('protect.php');

   
$id_personal = $_SESSION['id']; 


$sql = "
SELECT 
    dia_da_semana, COUNT(*) AS frequencia
FROM (
    SELECT dia1_b AS dia_da_semana FROM cliente WHERE id_personal = $id_personal AND dia1_b <> ''
    UNION ALL
    SELECT dia2_b AS dia_da_semana FROM cliente WHERE id_personal = $id_personal AND dia2_b <> ''
    UNION ALL
    SELECT dia1_t AS dia_da_semana FROM cliente WHERE id_personal = $id_personal AND dia1_t <> ''
    UNION ALL
    SELECT dia2_t AS dia_da_semana FROM cliente WHERE id_personal = $id_personal AND dia2_t <> ''
    UNION ALL
    SELECT dia1_c AS dia_da_semana FROM cliente WHERE id_personal = $id_personal AND dia1_c <> ''
    UNION ALL
    SELECT dia2_c AS dia_da_semana FROM cliente WHERE id_personal = $id_personal AND dia2_c <> ''
    UNION ALL
    SELECT dia1_p AS dia_da_semana FROM cliente WHERE id_personal = $id_personal AND dia1_p <> ''
    UNION ALL
    SELECT dia2_p AS dia_da_semana FROM cliente WHERE id_personal = $id_personal AND dia2_p <> ''
    UNION ALL
    SELECT dia1_o AS dia_da_semana FROM cliente WHERE id_personal = $id_personal AND dia1_o <> ''
    UNION ALL
    SELECT dia2_o AS dia_da_semana FROM cliente WHERE id_personal = $id_personal AND dia2_o <> ''
) AS dias_unificados
GROUP BY dia_da_semana
ORDER BY frequencia DESC;
";


$result = mysqli_query($mysqli, $sql);


if (!$result) {
    die("Erro na consulta: " . mysqli_error($mysqli));
}


$segunda = 0;
$terca = 0;
$quarta = 0;
$quinta = 0;
$sexta = 0;


while ($row = mysqli_fetch_assoc($result)) {
    $dia = $row['dia_da_semana'];
    $frequencia = $row['frequencia'];

    switch ($dia) {
        case 'segunda':
            $segunda = $frequencia;
            break;
        case 'terca':
            $terca = $frequencia;
            break;
        case 'quarta':
            $quarta = $frequencia;
            break;
        case 'quinta':
            $quinta = $frequencia;
            break;
        case 'sexta':
            $sexta = $frequencia;
            break;
    }
}
?>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Segunda-Feira',   <?=$segunda?>],
          ['Terça-Feira',      <?=$terca?>],
          ['Quarta-Feira',  <?=$quarta?>],
          ['Quinta-Feira', <?=$quinta?>],
          ['Sexta-Feira',   <?=$sexta?>]
        ]);

        var options = {
          title: 'Dias mais escolhidos para treinos'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <?php include("navbar.php");?>
    <div class="d-lg-flex justify-content-sm-center align-items-sm-center ">
        <div id="piechart" style="width: 900px; height: 500px;" class="bg-dark" ></div>
        <a href="telap.php" class="btn btn-danger float-end">Voltar</a>
    </div>
    
  </body>
</html>