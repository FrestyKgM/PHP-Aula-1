<!DOCTYPE html>
<html>
<head>
    <title>Divisão de Dois Números</title>
</head>
<body>
    <h2>Divisão de Dois Números</h2>
    <form method="post">
        Número A: <input type="number" name="a" step="any" required><br><br>
        Número B: <input type="number" name="b" step="any" required><br><br>
        <input type="submit" value="Dividir">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = floatval($_POST["a"]);
        $b = floatval($_POST["b"]);
        if ($b == 0) {
            echo "<p>Não é possível dividir por zero.</p>";
        } else {
            $resultado = $a / $b;
            echo "<p>Resultado: $a ÷ $b = $resultado</p>";
        }
    }
    ?>
</body>
</html>