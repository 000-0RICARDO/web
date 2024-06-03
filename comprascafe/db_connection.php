<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$codigo_postal = $_POST['codigo_postal'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$dia = $_POST['dia'];
$hora = $_POST['hora'];
$metodo_pago = $_POST['metodo_pago'];
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];


$servername = "localhost";
$username = "Ricardo";
$password = "mimamamemimA1";
$dbname = "cafechiapas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("conexión fallida: " . $conn->connect_error);
}

$sql = "INSERT INTO pedidos (nombre, direccion, ciudad, estado, codigo_postal, telefono, email, dia, hora, metodo_pago, tipo, cantidad)
VALUES ('$nombre', '$direccion', '$ciudad', '$estado', '$codigo_postal', '$telefono', '$email', '$dia', '$hora', '$metodo_pago', '$tipo', '$cantidad')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>¡gracias por tu compra!</h1>";
    echo "<p>Tu pedido ha sido recibido y está en proceso. Recibirás un correo de confirmación en breve.</p>";
} else {
    echo "error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
