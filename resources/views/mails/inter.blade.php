<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>Servicio de Notificaciones Tovarsat C.A</title>
</head>
<body>
	<p>Se ha reportado un nuevo caso de solicitud de servicio de Internet.</p>
    <p>Estos son los datos del usuario que ha realizado la solicitud:</p>
    <ul>
        <li>Nombre: {{ $request['inter_name'] }}</li>
        <li>Teléfono: {{ $request['inter_tel'] }}</li>
        <li>Email: {{ $request['inter_email'] }}</li>
        <li>Sucursal: {{ $request['inter_office'] }}</li>
        <li>Plan: {{ $request['inter_plan'] }}</li>
        <li>Dirección: {{ $request['inter_direction'] }}</li>
    </ul>
</body>
</html>