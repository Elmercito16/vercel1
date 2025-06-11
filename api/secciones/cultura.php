<?php
/*****
NOTICIA DE LA CATEGORÍA CULTURA
*****/

$cultura = [
    "titulo" => "Premio Nobel de Literatura 2024 es otorgado a la escritora japonesa Yoko Ogawa",
    "autor" => "El País",
    "resumen" => "La escritora japonesa Yoko Ogawa ha sido galardonada con el Premio Nobel de Literatura 2024 por su sensibilidad narrativa y su capacidad de explorar la memoria, el silencio y la pérdida a través de una prosa íntima y conmovedora.",
];

// Mostrar contenido (opcional)
echo "<h1>" . $cultura['titulo'] . "</h1>";
echo "<p><strong>Autor:</strong> " . $cultura['autor'] . "</p>";
echo "<p>" . $cultura['resumen'] . "</p>";
?>
