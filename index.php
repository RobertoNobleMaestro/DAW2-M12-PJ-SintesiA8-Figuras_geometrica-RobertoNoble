<?php
session_abort();
session_start();

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="lados.php" method="post">
        <label for="producto" class="form-label">Selecciona el tipo de forma</label>
            <select class="form-select" id="forma" name="forma" required>
                <option selected disabled>Elige una forma</option>
                <option value="Esfera">Esfera</option>
                <option value="Triangulo">Triangulo</option>
                <option value="Cuadrado">Cuadrado</option>
                <option value="Rectangulo">Rectangulo</option>
            </select>
        <input class="btn btn-primary" type="submit" value="Enviar">
    </form>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
