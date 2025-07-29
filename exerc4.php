<!DOCTYPE html>
<html>
<head>
    <title>Soma de Dois Números</title>
</head>
<body>
    <form method="post">
        Número A: <input type="number" name="a" required><br>
        Número B: <input type="number" name="b" required><br>
        <input type="submit" value="Somar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = isset($_POST['a']) ? (float)$_POST['a'] : 0;
        $b = isset($_POST['b']) ? (float)$_POST['b'] : 0;
        $soma = $a + $b;
        echo "<p>A soma de $a e $b é <strong>$soma</strong>.</p>";
    }
    ?>
</body>
</html>