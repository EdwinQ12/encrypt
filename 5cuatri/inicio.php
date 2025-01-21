<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container mt-5">
        <div class="form-container mx-auto">
            <h2 class="text-center mb-4">Registrar Usuario</h2>
            <form method="POST" action="registrar.php">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="No menos de 8 caracteres" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="No menos de 8 caracteres" required>
                        <span class="input-group-text">
                            <input type="checkbox" id="mostrar_pass" onchange="pass_visible('password', 'mostrar_pass')"> Mostrar
                        </span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pass_confirm" class="form-label">Confirmar Contraseña:</label>
                    <div class="input-group">
                        <input type="password" name="pass_confirm" class="form-control" id="pass_confirm" placeholder="No menos de 8 caracteres" required>
                        <span class="input-group-text">
                            <input type="checkbox" id="mostrar_pass2" onchange="pass_visible('pass_confirm', 'mostrar_pass2')"> Mostrar
                        </span>
                    </div>
                </div>
                <button type="submit" name="registrar" class="btn btn-primary w-100">Guardar</button>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Función para mostrar contraseña
        function pass_visible(pass_vId, checkboxId) {
            const pass_v = document.getElementById(pass_vId);
            const checkbox = document.getElementById(checkboxId);

            pass_v.type = checkbox.checked ? "text" : "password";
        }

        // Mostrar alertas con Toastr
        $(document).ready(function () {
            const urlParams = new URLSearchParams(window.location.search);
            const tipo = urlParams.get('tipo');
            const mensaje = urlParams.get('mensaje');

            if (tipo && mensaje) {
                if (tipo === 'success') {
                    toastr.success(mensaje);
                } else if (tipo === 'warning') {
                    toastr.warning(mensaje);
                } else if (tipo === 'danger') {
                    toastr.error(mensaje);
                }
            }
        });
    </script>
</body>
</html>
