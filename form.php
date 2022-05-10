<?php
/* Variables */
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$cel = $_POST['cel'];
$postal = $_POST['postal'];
$domicilio = $_POST['domicilio'];
$entrega = $_POST['entrega'];

/* Datos de envio */
$para = 'bautitattoogmail.com'
$asunto = 'Datos del formulario Suscripción Sorpresa!'

/* Función */
mail($para, $asunto, utf8_decode($nombre, $apellido, $email, $cel, $postal, $domicilio, $entrega));

/* Redireccion */
header('location:pages/pagar.html')

?>