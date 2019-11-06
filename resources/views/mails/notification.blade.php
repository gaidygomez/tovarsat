<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>Servicio de Notificaciones Tovarsat C.A</title>
</head>
<body>
	<p>Se ha reportado un nuevo caso de solicitud de servicio Televisión por Cable.</p>
    <p>Estos son los datos del usuario que ha realizado la solicitud:</p>
    <ul>
        <li>Nombre: {{ $request['name'] }}</li>
        <li>Teléfono: {{ $request['tel'] }}</li>
        <li>Email: {{ $request['email'] }}</li>
        <li>Sucursal: {{ $request['office'] }}</li>
        <li>Plan: {{ $request['plan'] }}</li>
        <li>Dirección: {{ $request['direction'] }}</li>
    </ul>
</body>
</html>