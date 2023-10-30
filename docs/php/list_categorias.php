<?PHP
include('conexion.php');
$querycategoria = "SELECT * FROM lblogCategoria ORDER BY nombreCategoria";
$rtscategoria = mysqli_query($conexion, $querycategoria);
//$localidad=mysqli_fetch_assoc($rtslocalidad)
