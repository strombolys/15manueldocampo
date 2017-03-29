<?php
//Importamos los datos del formulario
@$name = addslashes($_POST['name']);
//@$apellidos = addslashes($_POST['apellidos']);
@$email = addslashes($_POST['email']);
//@$web = addslashes($_POST['web']);
@$mensaje = addslashes($_POST['mensaje']);
 
//Preparo el correo
$cabecemail = "From: $email\n" 
 . "Reply-To: $email\n";
$asunto = "Mensaje desde el formulario de contacto"; //asunto del mensaje
$email_to = "strombolys@gmail.com"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje desde el formulario de contacto, estos son sus datos:"
. "\n"
. "Nombre: $name\n"
//. "Apellidos: $apellidos\n"
. "Email: $email\n"
//. "Sitio Web: $web\n"
. "Comentarios: $mensaje\n"
. "\n";
 
//Enviamos el correo
if (@mail($email_to, $asunto ,$contenido ,$cabecemail )) {
 
//Si el mensaje se envía muestra una frase
//die("Gracias, hemos recibido sus datos correctamente.");
echo "Gracias, hemos recibido sus datos correctamente" ;
header("Location:http://www.manueldocampo.com");
}else{
 
//Si algo falla, sale error
die("Error: No hemos recibido sus datos, inténtelo más tarde.");
}
?>