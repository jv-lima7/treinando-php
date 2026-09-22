<?php
$A = array();
$mostrarResultado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 0; $i < 10; $i++) {
        $A[$i] = (int) $_POST["valor" . $i];
    }
    $mostrarResultado = true;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Array de 10 posicoes</title>
</head>
<body>

<h2>Informe os 10 valores do array</h2>

<form method="POST" action="">
    <?php for ($i = 0; $i < 10; $i++): ?>
        <p>
            <label>Posicao <?= $i ?>: </label>
            <input type="number" name="valor<?= $i ?>" required>
        </p>
    <?php endfor; ?>
    <button type="submit">Enviar</button>
</form>

<?php if ($mostrarResultado): ?>
    <h3>Resultado</h3>
    <?php for ($i = 0; $i < 10; $i++): ?>
        <p>Posicao <?= $i ?>: <?= $A[$i] ?></p>
    <?php endfor; ?>
<?php endif; ?>

</body>
</html>