<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>Servicio de Notificaciones Tovarsat C.A</title>
</head>
<body>
	<p>Se ha reportado una nuevo caso de solicitud de Atención al Cliente.</p>
    <p>Estos son los datos del usuario que ha realizado la solicitud:</p>
    <ul>
        <li>Nombre: {{ $request['fname'] }}</li>
        <li>Email: {{ $request['femail'] }}</li>
        <li>Sucursal: {{ $request['foffice'] }}</li>
        <li>Comentario: {{ $request['comment'] }}</li>
    </ul>
</body>
</html>