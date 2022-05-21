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
$para = 'bautitattoogmail.com';
$asunto = 'Datos del formulario Suscripción Sorpresa!';

/* Función */
mail($para, $asunto, utf8_decode($nombre));
mail($para, $asunto, utf8_decode($apellido));
mail($para, $asunto, utf8_decode($email));
mail($para, $asunto, utf8_decode($cel));
mail($para, $asunto, utf8_decode($postal));
mail($para, $asunto, utf8_decode($domicilio));
mail($para, $asunto, utf8_decode($entrega));

/* Redireccion */
header('Location:./pages/pagar.html');

?>