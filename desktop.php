<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuração de Desktop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Escolha as Configurações do seu Desktop</h1>
    <form action="summary.php" method="post">
        <input type="hidden" name="name" value="<?= htmlspecialchars($_POST['name']); ?>">
        <input type="hidden" name="email" value="<?= htmlspecialchars($_POST['email']); ?>">
        <input type="hidden" name="password" value="<?= htmlspecialchars($_POST['password']); ?>">
        
        <div class="options">
            <h2>CPU</h2>
            <select name="cpu">
                <option value="Intel Core i5 11ª Geração - R$1500">Intel Core i5 11ª Geração - R$1500</option>
                <option value="Intel Core i7 12ª Geração - R$2000">Intel Core i7 12ª Geração - R$2000</option>
                <option value="AMD Ryzen 5 5600X - R$1400">AMD Ryzen 5 5600X - R$1400</option>
                <option value="AMD Ryzen 7 5800X - R$1800">AMD Ryzen 7 5800X - R$1800</option>
            </select>
        </div>

        <div class="options">
            <h2>Memória</h2>
            <select name="memoria">
                <option value="8GB DDR4 (1x8GB) - R$400">8GB DDR4 (1x8GB) - R$400</option>
                <option value="16GB DDR4 (2x8GB) - R$700">16GB DDR4 (2x8GB) - R$700</option>
                <option value="32GB DDR4 (2x16GB) - R$1200">32GB DDR4 (2x16GB) - R$1200</option>
                <option value="64GB DDR4 (2x32GB) - R$2200">64GB DDR4 (2x32GB) - R$2200</option>
            </select>
        </div>

        <div class="options">
            <h2>HD/SSD</h2>
            <select name="hd">
                <option value="512GB SSD - R$600">512GB SSD - R$600</option>
                <option value="1TB SSD - R$1000">1TB SSD - R$1000</option>
                <option value="1TB HD - R$400">1TB HD - R$400</option>
                <option value="2TB HD - R$700">2TB HD - R$700</option>
            </select>
        </div>

        <div class="options">
            <h2>Sistema Operacional</h2>
            <select name="sistema">
                <option value="Windows 10 - R$500">Windows 10 - R$500</option>
                <option value="Windows 11 - R$600">Windows 11 - R$600</option>
            </select>
        </div>

        <div class="options">
            <h2>Monitor</h2>
            <select name="monitor">
                <option value="Monitor 24' - R$800">Monitor 24' - R$800</option>
                <option value="Monitor 27' - R$1200">Monitor 27' - R$1200</option>
                <option value="Monitor 32' - R$1800">Monitor 32' - R$1800</option>
                <option value="Monitor UltraWide 34' - R$2500">Monitor UltraWide 34' - R$2500</option>
            </select>
        </div>

        <div class="options">
            <h2>Mouse</h2>
            <select name="mouse">
                <option value="Mouse Básico - R$50">Mouse Básico - R$50</option>
                <option value="Mouse Gamer - R$150">Mouse Gamer - R$150</option>
                <option value="Mouse Sem Fio - R$120">Mouse Sem Fio - R$120</option>
            </select>
        </div>

        <div class="options">
            <h2>Teclado</h2>
            <select name="teclado">
                <option value="Teclado Básico - R$70">Teclado Básico - R$70</option>
                <option value="Teclado Mecânico - R$250">Teclado Mecânico - R$250</option>
                <option value="Teclado Sem Fio - R$200">Teclado Sem Fio - R$200</option>
            </select>
        </div>

        <button type="submit">Finalizar Montagem</button>
    </form>
</body>
</html>
