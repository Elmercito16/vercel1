<?php
/*****
NOTICIA DE LA CATEGORÍA CIENCIA
*****/

$ciencia = [
    "titulo" => "NASA descubre un exoplaneta con posibles condiciones para la vida",
    "autor" => "Agencia Espacial NASA",
    "resumen" => "Astrónomos de la NASA han identificado un nuevo exoplaneta en la zona habitable de una estrella similar al Sol. El planeta, llamado Kepler-452b, presenta características que podrían permitir la existencia de agua líquida, lo que lo convierte en un candidato potencial para albergar vida.",
];

// Mostrar contenido (opcional)
echo "<h1>" . $ciencia['titulo'] . "</h1>";
echo "<p><strong>Autor:</strong> " . $ciencia['autor'] . "</p>";
echo "<p>" . $ciencia['resumen'] . "</p>";
?>
