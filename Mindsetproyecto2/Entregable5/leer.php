<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Estilos/crud.css">
    <link rel="stylesheet" type="text/css" href="../Estilos/estilo.css">
</head>

<body>
        <div class="encabezado" >
          <a href="inicio.php"> <img src="../Imagen/logo.jpg" alt="Logo" class="logo" align="left"></a>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          <a href="../iniciosesion.php" class="btn"><button>Iniciar Sesion</button></a>
          </div>
          
        <header class="header">
       <nav>   

        <ul class="nav-links">
            <li><a href="../inicio.php" >Inicio</a></li>
            <li><a href="../paginas/populares.php" >Más populares</a></li>
            <li><a href="../paginas/Implementacion.php" >Implementación</a></li>
            <li><a href="../paginas/Preguntas.php" >Preguntas Frecuentes</a></li>
            <li><a href="../entregable.php">Entregable 3 </a></li>
            <li><a href="../entregable4.php">Entregable 4 </a></li>
            <li><a href="../Entregable5/leer.php">Entregable 5 </a></li>
        </ul>
        <div class="burger active" aria-label="Abrir menu de navegacion">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        </nav>
    </header>


<?php
include('../conexion.php');

$sql = "SELECT * FROM datos";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1 ><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Correo</th><th>Fecha_Nacimiento</th><th>Genero</th><th>Grado</th><th>Contraseña</th><th>Acciones</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["Nombre"]."</td><td>".$row["Apellido"]."</td><td>".$row["Correo"]."</td><td>".$row["Fecha_Nacimiento"]."</td><td>".$row["Genero"]."</td><td>".$row["Grado"]."</td><td>".$row["pass"]."</td>";
        echo "<td><a href='actualizar.php?id=".$row["ID"]."'>Editar</a>"." ";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$con->close();
?>
		
	</div>
    <br><br>
     <div>
        <form action="borrar.php">
            <label>Ingrese Id</label><br>
            <input type="num" name="id">
            <button>Borrar</button>
        </form>
    </div><br>
      <a href="leer.php"><button>Mostrar Datos</button> </a>
      <a href="../registro.php"><button>Ingresar Datos</button> </a>
      <a href="../inicio.php"><button>Atrás</button> </a>

     




      <br><br><br><br><br><br><br>
      <hr>
      <div>
            &copy; Registrado por Fabiana Diaz y Fabiana Geronimo 2024 
        </div>

</body>
</html>