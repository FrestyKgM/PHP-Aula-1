
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["raio"])) {
        $raio = floatval($_GET["raio"]);
        $area = pi() * pow($raio, 2);
        echo "<p>A área de uma pizza de {$raio}cm de raio é: {$area} cm²</p>";
    }
} else {
?>

<form method="get">
    <label for="raio">Informe o raio da pizza em (cm):</label>
    <input type="number" name="raio" id="raio" step="any" required>
    <button type="submit">Calcular</button>
</form>

<?php
}
?>