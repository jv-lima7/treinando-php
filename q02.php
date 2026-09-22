<?php
$vetor = array();
$mostrarResultado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 0; $i < 10; $i++) {
        $vetor[$i] = (int) $_POST["valor" . $i];
    }
    $mostrarResultado = true;
}
?>
<html>
    <body>
        <h2>Informe os valores do Array</h2>

        <form method="POST" action="">
            <?php for ($i = 0; $i < 10; $i++){ ?>
                <p>
                    <label>Posição <?= $i ?>:</label>
                    <input type="number" name="valor<?= $i ?>" required>
                </p>
            <?php } ?>
            <button type="submit">Enviar</button>
        </form>

        <?php if($mostrarResultado):?>
            <h3>Resultado</h3>
            <?php for ($i = 9; $i >= 0; $i--): ?>
                <p>Posição <?= $i ?>: <?= $vetor[$i] ?></p>
            <?php endfor ?>
        <?php endif; ?>
    </body>
</html>