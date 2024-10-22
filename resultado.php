<?php 
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
if (!isset($_SESSION['forma'])) {
    session_destroy();
    session_unset();
    header('Location: index.php?error=noenviado');
    exit;
}
if (isset($_POST['calcular'])) {
    switch ($_SESSION['forma']) {
        case "Triangulo":
            if (!empty($_POST['lado1']) && !empty($_POST['lado2'])) {
                $base = htmlspecialchars($_POST['lado1']);
                $altura = htmlspecialchars($_POST['lado2']);
                $_SESSION['altura'] = $altura;
                $_SESSION['base'] = $base;
                require_once('clases/forma.php');
                require_once('clases/triangulo.php');
                $triangulo = new Triangulo($_SESSION['forma'], $base, $altura);
                echo '<div class="tabla"><h1>Triángulo isoceles</h1><br><table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Forma</th>
                    <th scope="col">Altura</th>
                    <th scope="col">Base</th>
                    <th scope="col">Área</th>
                    <th scope="col">Perímetro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"></th>
                    <td>' . $triangulo->getForma() . '</td>
                    <td>' . $triangulo->getLado1() . '</td>
                    <td>' . $triangulo->getLado2() . '</td>
                    <td>' . $triangulo->calcularArea() . '</td>
                    <td>' . $triangulo->calcularPerimetro() . '</td>
                    </tr>
                </tbody>
                </table>
                <br>
                <div class="div-botones">
                    <form action="index.php" method="post">
                        <input type="submit" name="Volver" value="Volver" class="boton">
                    </form>
                    <form action="lados.php" method="post">
                        <input type="hidden" name="forma" value="'.$_SESSION["forma"].'">   
                        <input type="hidden" name="base" value="'.$_SESSION["base"].'"> 
                        <input type="hidden" name="altura" value="'.$_SESSION["altura"].'">         
                        <input type="submit" name="Modificar" value="Modificar" class="boton">
                    </form>
                </div>
                </div>';
            } else {
                session_unset();
                session_destroy();
                header('Location: index.php?error=datos_faltantes_triangulo');
                exit;
            }
            break;
        case "Esfera":
            if (isset($_POST['radio'])) {
                $radio = htmlspecialchars($_POST['radio']);
                $_SESSION['radio'] = $radio;
                require_once('clases/forma.php');
                require_once('clases/redonda.php');
                $redonda = new Redonda($_SESSION['forma'], $radio);
                echo '<div class="tabla"><h1>Esfera</h1><br><table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Forma</th>
                    <th scope="col">Radio</th>
                    <th scope="col">Área</th>
                    <th scope="col">Perímetro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"></th>
                    <td>' . $redonda->getForma() . '</td>
                    <td>' . $redonda->getLado1() . '</td>
                    <td>' . $redonda->calcularArea() . '</td>
                    <td>' . $redonda->calcularPerimetro() . '</td>
                    </tr>
                </tbody>
                </table>
                <br>
                <div class="div-botones">
                    <form action="index.php" method="post">
                        <input type="submit" name="Volver" value="Volver" class="boton">
                    </form>
                    <form action="lados.php" method="post">
                        <input type="hidden" name="radio" value="'.$_SESSION["radio"].'"> 
                        <input type="hidden" name="forma" value="'.$_SESSION["forma"].'">   
                        <input type="submit" name="Modificar" value="Modificar" class="boton">
                    </form>
                </div>
                </div>';
            } else {
                session_unset();
                session_destroy();
                header('Location: index.php?error=radio_faltante_esfera');
                exit;
            }
            break;
        case "Rectangulo":
            if (isset($_POST['lado1']) && isset($_POST['lado2'])) {
                $lado1 = htmlspecialchars($_POST['lado1']);
                $lado2 = htmlspecialchars($_POST['lado2']);
                $_SESSION['lado1'] = $lado1;
                $_SESSION['lado2'] = $lado2;
                require_once('clases/forma.php');
                require_once('clases/rectangulo.php');
                $rectangulo= new Rectangulo($_SESSION['forma'], $lado1, $lado2);
                echo  '<div class="tabla"><h1>Rectángulo</h1><br><table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Lado1</th>
                    <th scope="col">Lado2</th>
                    <th scope="col">Base</th>
                    <th scope="col">Área</th>
                    <th scope="col">Perímetro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"></th>
                    <td>' . $rectangulo->getForma() . '</td>
                    <td>' . $rectangulo->getLado1() . '</td>
                    <td>' . $rectangulo->getLado2() . '</td>
                    <td>' . $rectangulo->calcularArea() . '</td>
                    <td>' . $rectangulo->calcularPerimetro() . '</td>
                    </tr>
                </tbody>
                </table>
                <br>
                <div class="div-botones">
                    <form action="index.php" method="post">
                        <input type="submit" name="Volver" value="Volver" class="boton">
                    </form>
                    <form action="lados.php" method="post">
                        <input type="hidden" name="forma" value="'.$_SESSION["forma"].'">   
                        <input type="hidden" name="lado1" value="'.$_SESSION["lado1"].'"> 
                        <input type="hidden" name="lado2" value="'.$_SESSION["lado2"].'">         
                        <input type="submit" name="Modificar" value="Modificar" class="boton">
                    </form>
                </div>
                </div>';
            } else {
                session_unset();
                session_destroy();
                header('Location: index.php?error=lados_faltantes_rectangulo');
                exit;
            }
            break;
        case "Cuadrado":
            if (isset($_POST['lado1'])) {
                $lado1 = htmlspecialchars($_POST['lado1']);
                $_SESSION['lado1'] = $lado1;
                require_once('clases/forma.php');
                require_once('clases/cuadrado.php');
                $cuadrado= new Cuadrado($_SESSION['forma'], $lado1);
                echo '<div class="tabla"><h1>Cuadrado</h1><br><table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Forma</th>
                    <th scope="col">Lados</th>
                    <th scope="col">Área</th>
                    <th scope="col">Perímetro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>' . $cuadrado->getForma() . '</td>
                    <td>' . $cuadrado->getLado1() . '</td>
                    <td>' . $cuadrado->calcularArea() . '</td>
                    <td>' . $cuadrado->calcularPerimetro() . '</td>
                    </tr>
                </tbody>
                </table>
                <br>
                <div class="div-botones">
                    <form action="index.php" method="post">
                        <input type="submit" name="Volver" value="Volver" class="boton">
                    </form>
                    <form action="lados.php" method="post">
                        <input type="hidden" name="forma" value="'.$_SESSION["forma"].'">   
                        <input type="hidden" name="lado1" value="'.$_SESSION["lado1"].'"> 
                        <input type="submit" name="Modificar" value="Modificar" class="boton">
                    </form>
                </div>
                 </div>';
            } else {
                session_unset();
                session_destroy();
                header('Location: index.php?error=lado_faltante_cuadrado');
                exit;
            }
            break;
        default:
        session_unset();
        session_destroy();
            header('Location: index.php?error=forma_no_valida');
            exit;
    }
} else {
    session_unset();
    session_destroy();
    header('Location: index.php?error=formulario_no_enviado');
    exit;
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
