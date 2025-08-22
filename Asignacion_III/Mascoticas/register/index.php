<!-- register.php -->
 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascoticas - Regístrate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-500 font-sans">

    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="index.html" class="text-2xl font-bold text-blue-400">Mascoticas</a>
        </div>
    </nav>

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-lg w-full">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Crea tu cuenta</h2>

            <form action="register.php" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                        <input type="text" id="nombre" name="nombre"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Tu nombre" required>
                    </div>
                    <div>
                        <label for="apellido" class="block text-gray-700 text-sm font-bold mb-2">Apellido</label>
                        <input type="text" id="apellido" name="apellido"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Tu apellido" required>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="direccion" class="block text-gray-700 text-sm font-bold mb-2">Dirección</label>
                        <input type="text" id="direccion" name="direccion"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Tu dirección completa" required>
                    </div>
                    <div>
                        <label for="fecha_nacimiento" class="block text-gray-700 text-sm font-bold mb-2">Fecha de
                            Nacimiento</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="telefono_fijo" class="block text-gray-700 text-sm font-bold mb-2">Teléfono Fijo</label>
                        <input type="tel" id="telefono_fijo" name="telefono_fijo" pattern="[0-9]{11}" title="Debe contener 11 dígitos"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Ej. 024X1234567" required>
                    </div>
                    <div>
                        <label for="telefono_celular" class="block text-gray-700 text-sm font-bold mb-2">Teléfono Celular</label>
                        <div class="flex space-x-2">
                            <select id="prefijo_celular" name="prefijo_celular"
                                class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400">
                                <option value="0416">0416</option>
                                <option value="0426">0426</option>
                                <option value="0414">0414</option>
                                <option value="0424">0424</option>
                                <option value="0412">0412</option>
                                <option value="0422">0422</option>
                            </select>
                            <input type="number" id="telefono_celular" name="telefono_celular"pattern="[0-9]{7} title="Debe contener 7 dígitos"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="Ej. 1234567" required>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="col-span-1 md:col-span-2">
                        <label for="usuario" class="block text-gray-700 text-sm font-bold mb-2">Nombre de
                            Usuario</label>
                        <input type="text" id="usuario" name="usuario"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Crea un usuario" required>
                    </div>
                    <div>
                        <label for="contrasena" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                        <input type="password" id="contrasena" name="contrasena"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Crea una contraseña" required>
                    </div>
                    <div>
                        <label for="confirm_contrasena" class="block text-gray-700 text-sm font-bold mb-2">Confirmar
                            Contraseña</label>
                        <input type="password" id="confirm_contrasena" name="confirm_contrasena"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Repite la contraseña" required>
                    </div>
                    <div>
                        <label for="correo" class="block text-gray-700 text-sm font-bold mb-2">Correo Electronico </label>
                        <input type="email" id="correo" name="correo"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="ejemplo@tuservicio.com" required>
                    </div>
                    <div>
                        <label for="confirm_correo" class="block text-gray-700 text-sm font-bold mb-2">Confirmar
                            Correo electronico </label>
                        <input type="email" id="confirm_correo" name="confirm_correo"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Repite tu correo " required>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition-colors w-full"> Registrarse
                    </button>
                </div>
            </form>

            <div class="mt-4 text-center">
                <p class="text-gray-600 text-sm">¿Ya tienes una cuenta?</p>
                <a href="http://localhost/Mascoticas/Login/index.php" class="text-blue-400 hover:text-blue-500 font-semibold transition-colors">Inicia sesión aquí</a>
            </div>
        </div>
    </div>

</body>

</html>