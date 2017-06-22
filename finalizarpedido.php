<?php
session_start();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];

$mi_carrito=$_SESSION['carrito'];
$pedido='

<h2>Gracias por su compra. <br></h2><h3>'.$nombre.'&nbsp;'.$apellido.'</h3>
Tu transacción ha finalizado y te hemos enviado un recibo de tu compra por correo electrónico.<br><br>
Un personal de la empresa Grupo CCred se comunicará con usted.<br><br>

Reciba un cordial saludo. <br>
Equipo Grupo CCred S.A de C.V

<br><br>';

if(isset($mi_carrito)){
			$total=0;
			$pedido.='
			<table width="657" border="1" align="center">
  			<tr>
    		<td colspan="4" align="center" bgcolor="#999999"><strong>LISTADO DE SUS COMPRAS</strong></td>
  			</tr>
  			<tr>
    			<td width="280" align="center" bgcolor="#FF6600">Producto</td>
    			<td width="131" align="center" bgcolor="#FF6600">Precio</td>
    			<td width="69" align="center" bgcolor="#FF6600">Cantidad</td>
    			<td width="149" align="center" bgcolor="#FF6600">Subtotal</td>
  			</tr>
			';


			for($i=0;$i<count($mi_carrito);$i++){
				if ($mi_carrito[$i]<>NULL)
				{

				$subtotal=$mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
				$total=$total+$subtotal;
				$pedido.='
				<tr>
    				<td width="280" align="center" valign="middle">'.$mi_carrito[$i]['nombre'].'</td>
    				<td align="center" valign="middle">'.$mi_carrito[$i]['precio'].'</td>
    				<td align="center" valign="middle">'.$mi_carrito[$i]['cantidad'].'</td>
					<td align="center" valign="middle">'.$subtotal.'</td>
				</tr>';

				}
			}

$pedido.='<tr><td> Total: '.$total;
$pedido.='</td></tr>';

echo $pedido;
//*****************************

// Varios destinatarios
$para  = $correo . ', '; // atención a la coma
$para .= 'samu.br0996@gmail.com';

// título
$título = 'Su compra realizada fue';

// mensaje
$mensaje = $pedido;

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Grupo CCred S.A de C.V <samu.br0996@gmail.com>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);



//*****************************
}

?>
