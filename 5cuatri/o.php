<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrar datos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #7fb0df;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #76b3ed;
        }
    </style>
</head>
<body>
    <div class="container">
        <form>
            
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" class="form-control" placeholder="Ingresa tu nombre">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Ingresa tu email">
            </div>

            <div class="form-group">
                <label for="clave1">Contraseña</label>
                <input type="password" id="clave1" class="form-control" placeholder="Ingresa tu contraseña">
            </div>

            <div class="form-group">
                <label for="clave2">Confirmar Contraseña</label>
                <input type="password" id="clave2" class="form-control" placeholder="Confirma tu contraseña">
            </div>

            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>