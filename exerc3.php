<?php
// arquivo: calcular_area_pizza.php
$area = null;
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['raio'])) {
    $raio = floatval($_POST['raio']);
    if ($raio > 0) {
        $area = pi() * pow($raio, 2);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calcular Área da Pizza</title>
</head>
<body>
    <h1>Calcule a área da pizza</h1>
    <form method="post" action="">
        <label for="raio">Raio da pizza (cm):</label>
        <input type="number" step="any" name="raio" id="raio" required>
        <button type="submit">Calcular</button>
    </form>
    <?php if ($area !== null): ?>
        <p>A área da pizza é: <strong><?php echo number_format($area, 2); ?> cm²</strong></p>
    <?php endif; ?>
</body>
</html>