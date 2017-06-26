<?php
//Comprobamos que se haya presionado el boton enviar
if(isset($_POST['enviar'])){
//Guardamos en variables los datos enviados
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$confirmpass = $_POST['confirmpass'];

///Validamos del lado del servidor que el nombre y el email no estén vacios
if($nombre == ''){
echo "Debe ingresar su nombre";
}
else if($correo == ''){
echo "Debe ingresar su email";
}
else{
$para = "samu.br0996@gmail.com";//Email al que se enviará
$asunto = "Contacto para Grupo CCred S.A de C.V";//Puedes cambiar el asunto del mensaje desde aqui
//Este sería el cuerpo del mensaje
$mensaje = "
<table border='0' cellspacing='3' cellpadding='2'>
<tr>
<td width='30%' align='left' bgcolor='#f0efef'><strong>Nombre/s:</strong></td>
<td width='80%' align='left'>$nombre</td>
</tr>
<tr>
<td align='left' bgcolor='#f0efef'><strong>Apellido/s:</strong></td>
<td align='left'>$apellido</td>
</tr>
<tr>
<td width='30%' align='left' bgcolor='#f0efef'><strong>Correo electrónico:</strong></td>
<td width='70%' align='left'>$correo</td>
</tr>
<tr>
<td width='30%' align='left' bgcolor='#f0efef'><strong>Teléfono:</strong></td>
<td width='70%' align='left'>$telefono</td>
</tr>
<tr>
<td width='30%' align='left' bgcolor='#f0efef'><strong>Usuario:</strong></td>
<td width='70%' align='left'>$usuario</td>
</tr>
<tr>
</table>
";

//Cabeceras del correo
$headers = "From: $nombre <$correo>\r\n"; //Quien envia?
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //

//Comprobamos que los datos enviados a la función MAIL de PHP estén bien y si es correcto enviamos
if(mail($para, $asunto, $mensaje, $headers)){
echo "Sus datos de registro se han enviado correctamente. En un lapso de 72hrs el personal de CCred le notificará
si se validan sus datos.";
echo "<br />";
echo '<a href="registro.php">Volver</a>';
}else{
echo "Hubo un error en el envío, inténtelo más tarde";
}
}
}
?>
