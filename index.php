<!DOCTYPE html>
<html lang="pt-BR">

<html>

<head>
    <title>Entrada de Números</title>
</head>

<body>
    <h1>Digite 10 números</h1>
    <form action="numeros.php" method="post">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label for="numero<?php echo $i; ?>">Número <?php echo $i; ?>:</label>
            <input type="number" name="numero<?php echo $i; ?>" required><br><br>
        <?php endfor; ?>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>