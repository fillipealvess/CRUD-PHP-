<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['idc'])){
        die("Acesso recusado, loge para acessar. <p><a href=\"telai.php\">Entrar</a></p>");
    }
?>