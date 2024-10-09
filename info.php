<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Você Deseja Obter Informações Sobre Notebook ou Desktop?</h1>
    <div class="devices">
        <div class="device">
            <form action="notebook.php" method="post">
                <input type="hidden" name="name" value="<?= htmlspecialchars($_POST['name']); ?>">
                <input type="hidden" name="email" value="<?= htmlspecialchars($_POST['email']); ?>">
                <input type="hidden" name="password" value="<?= htmlspecialchars($_POST['password']); ?>">
                <button type="submit"><img src="img_notebook.avif" alt="Notebook" width="300" height="250"></button>
            </form>
        </div>
        <div class="device">
            <form action="desktop.php" method="post">
                <input type="hidden" name="name" value="<?= htmlspecialchars($_POST['name']); ?>">
                <input type="hidden" name="email" value="<?= htmlspecialchars($_POST['email']); ?>">
                <input type="hidden" name="password" value="<?= htmlspecialchars($_POST['password']); ?>">
                <button type="submit"><img src="img_desktop.WEBP" alt="Desktop" width="290" height="250"></button>
            </form>
        </div>
    </div>
</body>
</html>