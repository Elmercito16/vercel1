<?php
/*****
NOTICIA DE LA CATEGORÍA ECONOMÍA
*****/

$economia = [
    "titulo" => "Inflación en Perú cae por tercer mes consecutivo",
    "autor" => "El Comercio",
    "resumen" => "El Instituto Nacional de Estadística e Informática (INEI) informó que la inflación nacional disminuyó un 0.2% en mayo, marcando el tercer mes consecutivo de descenso. Esta baja se debe principalmente a la reducción en los precios de alimentos y transporte.",
];

// Mostrar contenido (opcional)
echo "<h1>" . $economia['titulo'] . "</h1>";
echo "<p><strong>Autor:</strong> " . $economia['autor'] . "</p>";
echo "<p>" . $economia['resumen'] . "</p>";
?>
