<?php
session_start();

// Comprobar si se ha enviado y guardado correctamente la forma
if (isset($_POST['forma'])) {
    $_SESSION['forma'] = htmlspecialchars($_POST['forma']);
    echo "<h2>Forma seleccionada: " . $_SESSION['forma'] . "</h2>";
} else {
    session_abort();
    header('Location: index.php?error=noenviado');
    exit();
}

// Formulario y cálculo según la forma seleccionada
if ($_SESSION['forma'] === "triangulo") {
    // Formulario para un triángulo
    echo '<form action="" method="post">
            <label for="lado1">Lado 1:</label>
            <input type="number" name="lado1"><br>
            <label for="lado2">Lado 2:</label>
            <input type="number" name="lado2"><br>
            <input type="submit" name="calcular" value="Calcular">
          </form>';

} elseif ($_SESSION['forma'] === "esfera") {
    // Formulario para una esfera
    echo '<form action="" method="post">
            <label for="radio">Radio de la esfera:</label>
            <input type="number" name="radio" required><br>
            <input type="submit" name="calcular" value="Calcular">
          </form>';

} elseif ($_SESSION['forma'] === "rectangulo") {
    // Formulario para un rectángulo
    echo '<form action="" method="post">
        <label for="lado1">Lado 1:</label>
        <input type="number" name="lado1" required><br>
        <label for="lado2">Lado 2:</label>
        <input type="number" name="lado2" required><br>
        <input type="submit" name="calcular" value="Calcular">
        </form>';
} elseif ($_SESSION['forma'] === "Cuadrado"){
    echo '<form action="" method="post">
        <label for="lado1">Lado 1:</label>
        <input type="number" name="lado1"><br>
        <input type="submit" name="calcular" value="Calcular">
        </form>';
}
?>
