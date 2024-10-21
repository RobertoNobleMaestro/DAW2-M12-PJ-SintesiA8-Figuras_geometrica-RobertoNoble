<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
session_start();
// Comprobar si se ha enviado y guardado correctamente la forma
if (isset($_POST['forma'])) {
    $_SESSION['forma'] = htmlspecialchars($_POST['forma']);
} else {
    session_abort();
    header('Location: index.php?error=noenviado');
    exit();
}

// Formulario y cálculo según la forma seleccionada
if ($_SESSION['forma'] === "Triangulo") {
    // Formulario para un triángulo
    echo '<form action="resultado.php" method="post" class="form-index">
        <h1>' . $_SESSION["forma"] . '</h1>
        <label for="lado1" class="form-label">Base: </label>
        <input type="number" name="Base"  class="form-control"><br><br>
        <label for="lado2" class="form-label">Altura: </label>
        <input type="number" name="Altura"  class="form-control"><br><br>
        <input type="submit" name="calcular" value="Calcular" class="boton">
    </form>';
} elseif ($_SESSION['forma'] === "Esfera") {
    // Formulario para una esfera
    echo '<form action="resultado.php" method="post" class="form-index">
            <h1>' . $_SESSION["forma"] . '</h1>
            <label for="radio" class="form-label">Radio de la esfera:</label>
            <input type="number" name="radio"  class="form-control" required><br><br>
            <input type="submit" name="calcular" value="Calcular"class="boton">
          </form>';

} elseif ($_SESSION['forma'] === "Rectangulo") {
    // Formulario para un rectángulo
    echo '<form action="resultado.php" method="post" class="form-index">
        <h1>' . $_SESSION["forma"] . '</h1>
        <label for="lado1" class="form-label">Lado 1:</label>
        <input type="number" name="lado1"  class="form-control"><br><br>
        <label for="lado2" class="form-label">Lado 2:</label>
        <input type="number" name="lado2"  class="form-control"><br><br>
        <input type="submit" name="calcular" value="Calcular" class="boton">
        </form>';
} elseif ($_SESSION['forma'] === "Cuadrado"){
    echo '<form action="resultado.php" method="post" class="form-index">
        <h1>' . $_SESSION["forma"] . '</h1>
        <label for="lado1" class="form-label">Lado 1:</label>
        <input type="number" name="lado1"  class="form-control"><br><br>
        <input type="submit" name="calcular" value="Calcular" class="boton">
        </form>';
} else {
    session_abort();
    header('Location: index.php?error=formaerronea');
}
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

