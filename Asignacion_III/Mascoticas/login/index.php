<!-- login.php -->
 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascoticas - Iniciar Sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-500 font-sans">

    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="index.html" class="text-2xl font-bold text-blue-400">Mascoticas</a>
        </div>
    </nav>

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-sm w-full">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Iniciar Sesión</h2>

            <form action="login.php" method="POST">
                <div class="mb-4">
                    <label for="usuario" class="block text-gray-700 text-sm font-bold mb-2">Usuario</label>
                    <input type="text" id="usuario" name="usuario"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Escriba su usuario" required>
                </div>

                <div class="mb-6">
                    <label for="contrasena" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Escriba su contraseña" required>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition-colors w-full">
                        Ingresar
                    </button>
                </div>
            </form>

            <div class="mt-4 text-center">
                <p class="text-gray-600 text-sm">¿No tienes una cuenta?</p>
                <a href="http://localhost/Mascoticas/Register/index.php"
                    class="text-blue-400 hover:text-blue-500 font-semibold transition-colors">Regístrate aquí</a>
            </div>
        </div>
    </div>

</body>

</html>