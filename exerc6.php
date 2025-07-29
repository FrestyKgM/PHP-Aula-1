<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Juro Simples</title>
</head>
<body>
    <h1>Cálculo de Juro Simples</h1>
    <form method="post">
        <label>Capital investido (R$): <input type="number" step="0.01" name="capital" required></label><br><br>
        <label>Taxa de juro (% ao ano): <input type="number" step="0.01" name="taxa" required></label><br><br>
        <label>Tempo (anos): <input type="number" step="0.01" name="tempo" required></label><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $capital = floatval($_POST["capital"]);
        $taxa = floatval($_POST["taxa"]) / 100; // Converter porcentagem para decimal
        $tempo = floatval($_POST["tempo"]);

        $juros = $capital * $taxa * $tempo;

        echo "<h2>Resultado</h2>";
        echo "Juros simples: R$ " . number_format($juros, 2, ',', '.');
    }
    ?>
</body>
</html>