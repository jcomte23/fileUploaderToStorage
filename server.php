<?php
$name=$_FILES["archivo"]["name"];
$full_path=$_FILES["archivo"]["full_path"];
$type=$_FILES["archivo"]["type"];
$tmp_name=$_FILES["archivo"]["tmp_name"];
$size=$_FILES["archivo"]["size"];
$rutaStorage="archives/$name";

echo "archivo cuando llega al servidor"."<br>"."<br>";

echo "nombre: ".$name."<br>";
echo "full path: ".$full_path."<br>";
echo "tipo: ".$type."<br>";
echo "ruta temporal: ".$tmp_name."<br>";
echo "peso en bytes: ".$size."<br>";

echo "archivo cuando va de salida al storage"."<br>"."<br>";
move_uploaded_file($tmp_name,$rutaStorage);