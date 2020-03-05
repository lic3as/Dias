
<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tradutor - Data</title>
</head>
<body>
    <form method="POST">

    <label for="a">Digite o dia da semana em inglês: </label>
    <br>
    <input type="text" name="dia">
    <br>
    <br>
    <label for="a">Digite o dia do mês: </label>
    <br>
    <input type="number" name="diaDoMes">
    <br>
    <br>
    <label for="a">Digite o mês em inglês: </label>
    </br>
    <input type="text" name="mes">
    <br>
    <br>
    <label for="a">Digite o ano:</label>
    <br>
    <input type="number" name="ano">
    <br>
    <br>
    <button type="submit">Traduzir</button>
    </form>

    <?php
    $dias = $_POST['dia'];
    switch($dias){
        case 'sunday':
            $dia = "DOMINGO";
            echo "<br>";
        break;
        case 'monday':
            $dia = "SEGUNDA";
            echo "<br>";
        break;
        case 'tuesday':
            $dia = "TERÇA";
            echo "<br>";
        break;
        case 'wednesday':
            $dia = "QUARTA";
            echo "<br>";
        break;
        case 'thursday':
            $dia = "QUINTA";
            echo "<br>";
        break;
        case 'friday':
            $dia = "SEXTA";
            echo "<br>";
        break;
        case 'saturday':
            $dia = "SÁBADO";
            echo "<br>";
        break;

        default:
            $dia = "Lembre-se de escrever certo e minúsculo.";
            echo "<br>";
        break;
    }    

    $diaMes = $_POST['diaDoMes'];

    $meses = $_POST['mes'];
    switch($meses){
        case 'january':
            $dia = "JANEIRO";
            echo "<br>";
        break;
        case 'february':
            $mes = "FEVEREIRO";
            echo "<br>";
        break;
        case 'march':
            $mes = "MARÇO";
            echo "<br>";
        break;
        case 'april':
            $mes = "ABRIL";
            echo "<br>";
        break;
        case 'may':
            $mes = "MAIO";
            echo "<br>";
        break;
        case 'june':
            $mes = "JUNHO";
            echo "<br>";
        break;
        case 'july':
            $mes = "JULHO";
            echo "<br>";
        break;
        case 'august':
            $mes = "AGOSTO";
            echo "<br>";
        break;
        case 'september':
            $mes = "SETEMBRO";
            echo "<br>";
        break;
        case 'october':
            $mes = "OUTUBRO";
            echo "<br>";
        break;
        case 'november':
            $mes = "NOVEMBRO";
            echo "<br>";
        break;
        case 'december':
            $mes = "DEZEMBRO";
            echo "<br>";
        break;

        default:
            $mes = "Lembre-se de escrever certo e minúsculo.";
            echo "<br>";
        break;
    }    
    $ano = $_POST['ano'];

    echo "$dia - $diaMes/$mes/$ano";


    ?>
</body>
</html>