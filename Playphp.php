<?php 
 echo "<strong><h1> PlayStation Store </h1></strong>";
 echo  "<p>Grandes descuentos, colecciones cuidadas y baratas de temporada en éxitos de PS5, PS4 y PS VR, todo en el mismo lugar.</p>";

 //Suma de Producto

if ($_SERVER['REQUEST_METHOD'] -- "POST ") {
    $Primer_Numero = $_POST["Primer_Numero"];
    $Segundo_Numero = $_POST["Segundo_Numero"];
    
    $Suma = $Primer_Numero + $Segundo_Numero;
    
} 


echo "El total de la compra es: ". $Suma . "br/>";


//Formulario

if ($_SERVER['REQUEST_METHOD'] -- 'POST') {
    $ID = $_POST["ID"];
$Contraseña = $_POST["Contraseña"];
$Correo = $_POST["Correo"];
$Compra = $_POST["Compra"];
$Valor = $_POST["Valor"];
$Metodo_de_Pago = $_POST["Metodo_Pago"];

} 


echo "<strong> Los datos que se registraron son: </Strong>";
echo "ID registrada: " . $ID . "br/>";
echo "Contraseña: " . $Contraseña . "br/>";
echo "Correo electronico: " . $Correo . "br/>";
echo "Compra realizada: : " . $Compra . "br/>";
echo "El valor de la compra fue: " . $Valor . "br/>";
echo "El metodo de pago sera: " . $Metodo_de_Pago . "br/>";


?>
