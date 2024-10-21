<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="scripts/verificaciones.js"></script>
    <title>Página principal</title>
    <style>
        .invalido-select {
            border: 3px solid #f5c6cb; 
        }
    </style>
</head>
<body>
    <form action="lados.php" method="post" class="form-index" onsubmit="return index();">
        <div class="align-center">
            <h1>Geometría</h1>
        </div>
        <br>
        <label for="producto" class="form-label">Selecciona el tipo de forma</label>
        <select class="form-select" id="forma" name="forma" onblur="index()" onchange="index()">
            <option value="" selected disabled>Elige una forma</option> 
            <option value="Esfera">Esfera</option>
            <option value="Triangulo">Triángulo</option>
            <option value="Cuadrado">Cuadrado</option>
            <option value="Rectangulo">Rectángulo</option>
        </select>
        <br>
        <p id="error" style="color: red;"></p>
        <br>
        <div class="align-center">
            <input class="boton" type="submit" value="Enviar">
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
