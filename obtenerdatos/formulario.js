
function filtrado($datos) {
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}



if ($_POST["submit"]) {
        $nombre = filtrado($_POST["nombre"]);
        $DNI = filtrado($_POST["DNI"]);
        $Dirección = filtrado($_POST["Dirección"]);
        $Codigopostal = filtrado($_POST["codigopostal"]);
        $Telefono = filtrado($_POST["telefono"]);
        $email = filtrado($_POST["email"]);
        $Codigovendedor = filtrado($_POST["Codigovendedor"]);
        $monto = filtrado($_POST["monto"]);


        if ($_POST["submit"]) {
            // El nombre y contraseña son campos obligatorios
            if (empty($_POST["nombre"])) {
                $errores = "El nombre es requerido";
            }
            if (empty($_POST["codigopostal"]) || strlen($_POST["codigopostal"]) == 5) {
                $errores = "El codigo postal tiene que tener 5 numeros";
            }
            // El email es obligatorio y ha de tener formato adecuado
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])) {
                $errores = "No se ha indicado email o el formato no es correcto";
            }

            // Si el array $errores está vacío, se aceptan los datos y se asignan a variables
            if (empty($errores)) {
                $nombre = filtrado($_POST["nombre"]);
                $DNI = filtrado($_POST["DNI"]);
                $Dirección = filtrado($_POST["Dirección"]);
                $Codigopostal = filtrado($_POST["codigopostal"]);
                $Telefono = filtrado($_POST["telefono"]);
                $email = filtrado($_POST["email"]);
                $Codigovendedor = filtrado($_POST["Codigovendedor"]);
                $monto = filtrado($_POST["monto"]);
            }
        }
    }

