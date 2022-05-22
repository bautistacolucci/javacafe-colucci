<?php
/* Variables */
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

/* Datos de envio */
$para = 'bautitattoo@gmail.com';
$asunto = 'Datos del formulario Suscripción Sorpresa!';

/* Función */
mail($para, $asunto, utf8_decode($nombre));
mail($para, $asunto, utf8_decode($apellido));
mail($para, $asunto, utf8_decode($email));
mail($para, $asunto, utf8_decode($asunto));
mail($para, $asunto, utf8_decode($mensaje));


/* Redireccion */
header('Location:../pages/redireccion.html');

?>