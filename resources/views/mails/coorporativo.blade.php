<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>Servicio de Notificaciones Tovarsat C.A</title>
</head>
<body>
	<p>Se ha reportado un nuevo caso de solicitud de servicio Coorporativo.</p>
    <p>Estos son los datos del usuario que ha realizado la solicitud:</p>
    <ul>
        <li>Nombre/Empresa: {{ $request['coor_name'] }}</li>
        <li>Teléfono: {{ $request['coor_tel'] }}</li>
        <li>Email: {{ $request['coor_email'] }}</li>
        <li>Dirección: {{ $request['coor_direction'] }}</li>
    </ul>
</body>
</html>