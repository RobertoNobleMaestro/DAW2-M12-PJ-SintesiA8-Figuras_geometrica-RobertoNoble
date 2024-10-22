<?php 
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/verificaciones.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
.invalido-select {
    border: 3px solid #f5c6cb; 
}
</style>
<body>
<?php
if (isset($_POST['forma'])) {
    $_SESSION['forma'] = htmlspecialchars($_POST['forma']);
} else {
    session_destroy();
    session_unset();
    header('Location: index.php?error=noenviado');
    exit();
}

if ($_SESSION['forma'] === "Triangulo") {
echo '<form action="resultado.php" method="post" class="form-index" onsubmit="return triangulo()">
    <h1>' . $_SESSION["forma"] . '</h1>
    <label for="lado1" class="form-label">Base: </label>
    <input type="text" name="lado1" id="lado1" class="form-control" value="' . (isset($_SESSION['base']) ? $_SESSION['base'] : '') . '" onblur="triangulo()" onchange="triangulo()"><br>
    <p id="errorBase" style="color: red;"></p> 
    <label for="lado2" class="form-label">Altura: </label>
    <input type="text" name="lado2" id="lado2" class="form-control" value="' . (isset($_SESSION['altura']) ? $_SESSION['altura'] : '') . '" onblur="triangulo()" onchange="triangulo()"><br>
    <p id="errorAltura" style="color: red;"></p> 
    <br>
    <input type="submit" name="calcular" value="Calcular" class="boton">
    </form>';
} elseif ($_SESSION['forma'] === "Esfera") {
    // Formulario para una esfera
    echo '<form action="resultado.php" method="post" class="form-index" onsubmit="return redonda()">
        <h1>Esfera</h1>
        <label for="radio" class="form-label">Radio de la esfera:</label>
        <input type="text" name="radio" id="radio" class="form-control" value="' . (isset($_SESSION['radio']) ? $_SESSION['radio'] : '') . '" onblur="redonda()" onchange="redonda()"><br>
        <p id="error" style="color: red;"></p>
        <br>
        <input type="submit" name="calcular" value="Calcular" class="boton">
        </form>';

} elseif ($_SESSION['forma'] === "Rectangulo") {
    // Formulario para un rectángulo
    echo '<form action="resultado.php" method="post" class="form-index" onsubmit="return rectangulo()">
        <h1>' . $_SESSION["forma"] . '</h1>
        <label for="lado1" class="form-label">Lado 1:</label>
        <input type="text" name="lado1" id="lado1" class="form-control" value="' . (isset($_SESSION['lado1']) ? $_SESSION['lado1'] : '') . '" onblur="rectangulo()" onchange="rectangulo()"><br>
        <p id="error1" style="color: red;"></p> 
        <br>
        <label for="lado2" class="form-label">Lado 2:</label>
        <input type="text" name="lado2" id="lado2" class="form-control"  value="' . (isset($_SESSION['lado2']) ? $_SESSION['lado2'] : '') . '" onblur="rectangulo()" onchange="rectangulo()"><br>
        <p id="error2" style="color: red;"></p> 
        <br>
        <input type="submit" name="calcular" value="Calcular" class="boton">
        </form>';

} elseif ($_SESSION['forma'] === "Cuadrado"){
    echo '<form action="resultado.php" method="post" class="form-index" onsubmit="return  cuadrado()">
        <h1>' . $_SESSION["forma"] . '</h1>
        <label for="lado1" class="form-label">Lado 1:</label>
        <input type="text" name="lado1" id="lado1" class="form-control" value="' . (isset($_SESSION['lado1']) ? $_SESSION['lado1'] : '') . '" onblur="cuadrado()" onchange="cuadrado()"><br>
        <p id="error" style="color: red;"></p>
        <br>
        <input type="submit" name="calcular" value="Calcular" class="boton">
        </form>';
} else {

    session_destroy();
    session_unset();
    header('Location: index.php?error=formaerronea');
}
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

