<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo da Montagem</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Resumo da Montagem</h1>
    <div class="summary">
        <?php
            function get_price($value) {
                $parts = explode(' - ', $value);
                return isset($parts[1]) ? (int)preg_replace('/[^0-9]/', '', $parts[1]) : 0;
            }

            $nome = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $cpu = htmlspecialchars($_POST['cpu']);
            $memoria = htmlspecialchars($_POST['memoria']);
            $hd = htmlspecialchars($_POST['hd']);
            $sistema = htmlspecialchars($_POST['sistema']);
            $monitor = isset($_POST['monitor']) ? htmlspecialchars($_POST['monitor']) : '';
            $mouse = isset($_POST['mouse']) ? htmlspecialchars($_POST['mouse']) : '';
            $teclado = isset($_POST['teclado']) ? htmlspecialchars($_POST['teclado']) : '';

            echo "<p>Nome: $nome</p>";
            echo "<p>Email: $email</p>";
            echo "<p>CPU: $cpu</p>";
            echo "<p>Memória: $memoria</p>";
            echo "<p>HD/SSD: $hd</p>";
            echo "<p>Sistema Operacional: $sistema</p>";

            if ($monitor) {
                echo "<p>Monitor: $monitor</p>";
            }
            if ($mouse) {
                echo "<p>Mouse: $mouse</p>";
            }
            if ($teclado) {
                echo "<p>Teclado: $teclado</p>";
            }

            $total = 0;
            $total += get_price($cpu);
            $total += get_price($memoria);
            $total += get_price($hd);
            $total += get_price($sistema);
            if ($monitor) {
                $total += get_price($monitor);
            }
            if ($mouse) {
                $total += get_price($mouse);
            }
            if ($teclado) {
                $total += get_price($teclado);
            }

            echo "<p>Valor Total: R$$total</p>";
        ?>
    </div>
</body>
</html>