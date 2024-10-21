<?php
session_start();

if (!isset($_SESSION['forma'])) {
    // Redirigir si la forma no se ha establecido
    header('Location: index.php?error=noenviado');
    exit;
}

if (isset($_POST['calcular'])) {
    switch ($_SESSION['forma']) {
        case "Triangulo":
            if (!empty($_POST['Base']) && !empty($_POST['Altura'])) {
                $base = $_POST['Base'];
                $altura = $_POST['Altura'];
                require_once('clases/forma.php');
                require_once('clases/triangulo.php');
                $triangulo = new Triangulo($_SESSION['forma'], $base, $altura);
                echo $triangulo . "<br>";
            } else {
                header('Location: index.php?error=datos_faltantes_triangulo');
                exit;
            }
            break;

        case "Esfera":
            if (isset($_POST['radio'])) {
                $radio = $_POST['radio'];
                require_once('clases/forma.php');
                require_once('clases/redonda.php');
                $redonda = new Redonda($_SESSION['forma'], $radio);
                echo $redonda  . "<br>";
            } else {
                header('Location: index.php?error=radio_faltante_esfera');
                exit;
            }
            break;

        case "Rectangulo":
            if (isset($_POST['lado1']) && isset($_POST['lado2'])) {
                $lado1 = $_POST['lado1'];
                $lado2 = $_POST['lado2'];
                require_once('clases/forma.php');
                require_once('clases/rectangulo.php');
                $rectangulo= new Rectangulo($_SESSION['forma'], $lado1, $lado2);
                echo $rectangulo  . "<br>";
            } else {
                header('Location: index.php?error=lados_faltantes_rectangulo');
                exit;
            }
            break;

        case "Cuadrado":
            if (isset($_POST['lado1'])) {
                $lado1 = $_POST['lado1'];
                require_once('clases/forma.php');
                require_once('clases/cuadrado.php');
                $cuadrado= new Cuadrado($_SESSION['forma'], $lado1);
                echo $cuadrado  . "<br>";
            } else {
                header('cuadrado: index.php?error=lado_faltante_cuadrado');
                exit;
            }
            break;

        default:
            header('Location: index.php?error=forma_no_valida');
            exit;
    }
} else {
    // Si no se envió el formulario
    header('Location: index.php?error=formulario_no_enviado');
    exit;
}
?>
