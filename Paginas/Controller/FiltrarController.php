<?php
    include "../Includes/cargar_clases.php";

    $crudprodcuto = new CRUDProducto();

    if (isset($_POST["valor"])) {
        $valor = $_POST["valor"];

        $crudprodcuto->FiltrarProducto($valor);
    }