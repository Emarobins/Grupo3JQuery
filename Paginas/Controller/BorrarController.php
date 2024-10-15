<?php
    include "../Includes/cargar_clases.php";

    $curdproducto = new CRUDProducto();

    if (isset($_GET["cod_prod"])) {
        $cod_prod = $_GET["cod_prod"];

        $codproducto->BorrarProducto($cod_prod);

        header("location: ../vista/lista_producto.php");
    }