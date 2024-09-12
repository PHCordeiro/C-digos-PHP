<?php
    $numero1 = 0;
    $numero2 = 0;
    $resultado = 0;
    $calcular = 'Somar';
    
    function isValidNumber($value) {
        return filter_var($value, FILTER_VALIDATE_FLOAT) !== false;
    }

    if (isset($_GET['numero1'], $_GET['numero2'], $_GET['Calcular'])) {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $calcular = $_GET['Calcular'];
        
        if (isValidNumber($numero1) && isValidNumber($numero2)) {
            switch($calcular){
                case 'Somar':
                    $resultado = $numero1 + $numero2;
                    break;
                case 'Subtrair':
                    $resultado = $numero1 - $numero2;
                    break;
                case 'Multiplicar':
                    $resultado = $numero1 * $numero2;
                    break;
                case 'Dividir':
                    if ($numero2 != 0) {
                        $resultado = $numero1 / $numero2;
                    } else {
                        $resultado = 'Erro: Divisão por zero!';
                    }
                    break;
                default:
                    $resultado = 'Operação inválida!';
            }
        } else {
            $resultado = 'Número inválido!';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="container">
        <h1>Calculadora</h1>
        <form>
            <label for="numero1">Primeiro Número:</label>
            <input type="number" id="numero1" name="numero1" value="<?= htmlspecialchars($numero1) ?>" required />
            <label for="numero2">Segundo Número:</label>
            <input type="number" id="numero2" name="numero2" value="<?= htmlspecialchars($numero2) ?>" required />
            <label for="calcular">Operação:</label>
            <select id="calcular" name="Calcular">
                <option value="Somar" <?= ($calcular == 'Somar') ? 'selected' : '' ?>>Somar</option>
                <option value="Subtrair" <?= ($calcular == 'Subtrair') ? 'selected' : '' ?>>Subtrair</option>
                <option value="Multiplicar" <?= ($calcular == 'Multiplicar') ? 'selected' : '' ?>>Multiplicar</option>
                <option value="Dividir" <?= ($calcular == 'Dividir') ? 'selected' : '' ?>>Dividir</option>
            </select>
            <input type="submit" value="Calcular"/>
            <div class="resultado">
                O Resultado é <?= htmlspecialchars($resultado) ?>
            </div>
        </form>
    </div>
</body>
</html>

