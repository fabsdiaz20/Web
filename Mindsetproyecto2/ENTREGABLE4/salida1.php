<?php
$dni=$_GET['dni'];
$nom=$_GET['nombre'];
$ape=$_GET['apellidos'];
$cor=$_GET['correo'];
$tel=$_GET['telefono'];
$tip=$_GET['tipo'];
$rec=$_GET['reclamo'];

echo "DNI: ".$dni."<br><br><br>";
echo "Nombre: ".$nom."<br><br><br>";
echo "Apellidos: ".$ape."<br><br><br>";
echo "Correo: ".$cor."<br><br><br>";
echo "Telefono: ".$tel."<br><br><br>";
echo "Tipo: ".$tip."<br><br><br>";
echo "Reclamo: ".$rec."<br><br><br>";
?>