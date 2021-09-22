<center>
<?php 

error_reporting(E_ALL ^ E_NOTICE);

 echo "<strong><h1> PlayStation Store </h1></strong>";


 //Suma de Producto

    $Primer_Numero = $_POST["Primer_Numero"];
    $Segundo_Numero = $_POST["Segundo_Numero"];
    
    $suma = $Primer_Numero + $Segundo_Numero;

echo "El total de la compra es: $suma";


echo '<hr>';

//Formulario

$ID = $_POST['ID'];
$Contraseña = $_POST["Contraseña"];
$Correo = $_POST["Correo"];
$Compra = $_POST["Compra"];
$Valor = $_POST["Valor"];
$Metodo_de_Pago = $_POST["Metodo_Pago"];

echo "<strong> Los datos que se registraron son: </Strong><br/>";
echo "ID registrada: " . $ID . "<br/>";
echo "Contraseña: " . $Contraseña . "<br/>";
echo "Correo electronico: " . $Correo . "<br/>";
echo "Compra realizada: : " . $Compra . "<br/>";
echo "El valor de la compra fue: " . $Valor . "<br/>";
echo "El metodo de pago sera: " . $Metodo_de_Pago . "<br/>";

?>
</center>
