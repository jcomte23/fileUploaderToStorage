<?php

$name = $_FILES["archivo"]["name"];
$full_path = $_FILES["archivo"]["full_path"];
$type = $_FILES["archivo"]["type"];
$tmp_name = $_FILES["archivo"]["tmp_name"];
$size = $_FILES["archivo"]["size"];
$rutaStorage = "archives/$name";

echo "<center>";
echo "<h1>Archivo cuando llega al servidor</h1>";

echo "<p><strong>Nombre:</strong> " . $name . "<p>";
echo "<p><strong>Full path:</strong> " . $full_path . "<p>";
echo "<p><strong>Tipo:</strong> " . $type . "<p>";
echo "<p><strong>Ruta temporal:</strong> " . $tmp_name . "<p>";
echo "<p><strong>Peso en bytes:</strong> " . $size . "<p>";

echo "<h1>Archivo cuando va de salida al storage</h1>";
echo "<p><strong>Ruta en donde se guarda el archivo:</strong> " . $rutaStorage . "<p>";
move_uploaded_file($tmp_name, $rutaStorage);
echo "<form method='post'>";
echo "<button type='submit' name='redirect' value='true' style='background-color: #007bff;
border-color: #007bff;
color: #fff;
font-weight: bold;'>VOLVER</button>";
echo "</form>";
echo "</center>";

if (isset($_POST['redirect']) && $_POST['redirect'] == 'true') {
    header('Location: index.html');
    exit;
}
