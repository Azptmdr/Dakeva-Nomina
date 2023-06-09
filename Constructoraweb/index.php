<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/iconIndex.svg">
    <title>Bienvenido a Dakeva</title>
</head>
<body>
    <div class="container-form sign-in">
        <form class="formulary-sign-up" onsubmit="return validateForm()">
            <h2 class="create-account">Iniciar sesión</h2>
            <label for="opciones">Ingresa el número que te asignamos</label>
            <input type="text" pattern="\d{6}" title="Recuerda que máx son 6 dígitos" required>
            <label for="opciones">Selecciona tu dependencia</label>
            <select id="opciones" name="opciones"  required>
                <option value="">-- Selecciona una opción --</option>
                <option value="nomina">Nómina</option>
                <option value="compras">Compras</option>
                <option value="recaudo">Recaudo</option>
                <option value="cotizaciones">Cotizaciones</option>
                <option value="proveedores">Proveedores</option>
                <option value="cartera">Cartera</option>
                <option value="ventas">Ventas</option>
            </select>
            <input type="submit" class="button" value="Iniciar Sesión">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a Dakeva</h2>
                <p>Si aún no tienes tu número, recuerda solicitarlo en nuestras instalaciones</p>
            </div>
        </div>
        
    </div>
    <script src="js/option-role.js"></script>
</body>
</html>
