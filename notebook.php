<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuração de Notebook</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Escolha as Configurações do seu Notebook</h1>
    <form action="summary.php" method="post">
        <input type="hidden" name="name" value="<?= htmlspecialchars($_POST['name']); ?>">
        <input type="hidden" name="email" value="<?= htmlspecialchars($_POST['email']); ?>">
        <input type="hidden" name="password" value="<?= htmlspecialchars($_POST['password']); ?>">
        
        <div class="options">
            <h2>CPU</h2>
            <select name="cpu">
                <option value="Intel Core i5 11ª Geração - R$1100">Intel Core i5 11ª Geração - R$1100</option>
                <option value="Intel Core i7 12ª Geração - R$1500">Intel Core i7 12ª Geração - R$1500</option>
                <option value="AMD Ryzen 5 5600X - R$1000">AMD Ryzen 5 5600X - R$1000</option>
                <option value="AMD Ryzen 7 5800X - R$1400">AMD Ryzen 7 5800X - R$1400</option>
            </select>
        </div>

        <div class="options">
            <h2>Memória</h2>
            <select name="memoria">
                <option value="8GB DDR4 (1x8GB) - R$200">8GB DDR4 (1x8GB) - R$200</option>
                <option value="16GB DDR4 (2x8GB) - R$400">16GB DDR4 (2x8GB) - R$400</option>
                <option value="32GB DDR4 (2x16GB) - R$750">32GB DDR4 (2x16GB) - R$750</option>
                <option value="64GB DDR4 (2x32GB) - R$1500">64GB DDR4 (2x32GB) - R$1500</option>
            </select>
        </div>

        <div class="options">
            <h2>HD/SSD</h2>
            <select name="hd">
                <option value="512GB SSD - R$350">512GB SSD - R$350</option>
                <option value="1TB SSD - R$700">1TB SSD - R$700</option>
                <option value="1TB HD - R$250">1TB HD - R$250</option>
                <option value="2TB HD - R$450">2TB HD - R$450</option>
            </select>
        </div>

        <div class="options">
            <h2>Sistema Operacional</h2>
            <select name="sistema">
                <option value="Windows 10 - R$300">Windows 10 - R$300</option>
                <option value="Windows 11 - R$450">Windows 11 - R$450</option>
            </select>
        </div>

        <button type="submit">Finalizar Montagem</button>
    </form>
</body>
</html>