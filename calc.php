<?php
    $Vh = $_POST['txtValor'];
    $Qh = $_POST['txtQuant'];
    $grat = $_POST['txtGrat'];
    $conta = ($Vh * $Qh) + $grat;
    echo "O valor do salário é :" .$conta;
?>