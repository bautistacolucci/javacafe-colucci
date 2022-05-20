<?php
/* Variables */
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$cel = $_POST['cel'];
$postal = $_POST['postal'];
$domicilio = $_POST['domicilio'];
$entrega = $_POST['entrega'];
$mensaje = $_POST['mensaje'];

/* Datos de envio */
$para = 'bautitattoogmail.com';
$asunto = 'Datos del formulario Suscripción Sorpresa!';

/* Función */
mail($para, $asunto, utf8_decode($nombre, $apellido, $email, $cel, $postal, $domicilio, $entrega, $mensaje));

/* Redireccion */
header('location:./pages/pagar.html');

?>