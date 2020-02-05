<?php
include_once "_contenido/global.php";
include_once "_libs/RegistradorDeDatos.php";
//Mockup (temporal)
//TODO: Crear método para leer campos de la base de datos
$campos = [
    [
        "legend" => "Datos personales ",
        "cliente" => [
            "required" => true,
            "type" => TiposDeCampo::texto,
            "label" => "Cliente:"
        ],
        "concepto" => [
            "required" => true,
            "type" => TiposDeCampo::texto,
            "label" => "Concepto:"
        ],
        "cantidad" => [
            "required" => true,
            "type" => TiposDeCampo::texto,
            "label" => "Cantidad:"
        ],
        "inicio" => [
            "required" => true,
            "type" => TiposDeCampo::texto,
            "label" => "Fecha de inicio"
        ],
        "final" => [
            "required" => true,
            "type" => TiposDeCampo::texto,
            "label" => "Fecha final:"
        ],
        "frecuencia" => [
            "type" => TiposDeCampo::texto,
            "label" => "Frecuencia:"
        ],
    ]
];
$form = new RegistradorDeDatos($campos, "Registrar Factura recurrente");
$menu = new MenuNavegacion();
?>
<!doctype html>
<html lang="es">
<?php echo crearHead("Factura recurrente"); ?>
<body>
<header>
    <?php $menu->imprimir(); ?>
</header>
<div class="container">
    <?php $form->imprimirForm(); ?>
</div>
</body>
</html>
