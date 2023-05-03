<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Nuevo mensaje de contacto - Asesoramientos inmobiliarios.</title>
</head>
<body>
<h1>Futuro cliente - Asesoramientos inmobiliarios.</h1>
<h2>Información Personal</h2>
<p><b>Nombre: </b>{{ isset($detalles['Nombre']) ? $detalles['Nombre'] : '(Sin datos).' }}</p>
<p><b>Email: </b>{{ isset($detalles['Correo']) ? $detalles['Correo'] : '(Sin datos).' }}</p>
<p><b>Teléfono: </b>{{ isset($detalles['Telefono']) ? $detalles['Telefono'] : '(Sin datos).' }}</p>
<p><b>Mensaje: </b>{{ isset($detalles['Mensaje']) ? $detalles['Mensaje'] : '(Sin datos).' }}</p>
<h2>Información de la Propiedad</h2>
<p><b>Tipo de operación: </b>{{ isset($detalles['Operacion']) ? $detalles['Operacion'] : '(Sin datos).' }}</p>
<p><b>Precio o Presupuesto: </b>{{ isset($detalles['Precio']) ? $detalles['Precio'] : '(Sin datos).' }}</p>
<p><b>¿Cómo desea ser contactado?: </b>{{ isset($detalles['Tipo_contacto']) ? $detalles['Tipo_contacto'] : '(Sin datos).' }}</p>
<h2>Atención de la inmobiliaria</h2>
<p>¡Felicitaciones! Ha sido seleccionado por el cliente para brindarles atención personalizada.</p>
</body>
</html>

