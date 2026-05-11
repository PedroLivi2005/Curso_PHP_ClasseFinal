<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Teste 001</title>
</head>
<body>
    <?php
        $name = (string) ($_GET["nome"] ?? "");
    ?>
    <main>
        <h1>Teste de funções de Strings em PHP</h1>
        <form action="" method="get">
            <label for="nome">Informe seu nome completo</label>
            <input type="text" name="nome" id="nome" required value="">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            $name_upper = trim(strtoupper($name));
            $name_lower = trim(strtolower($name));
            $qtd = trim(strlen(str_replace(" ", "", $name)));
            $first_name = explode(" ", $name);

            echo "Seu nome em maiúsculo é " . $name_upper . ".<br>";
            echo "Seu nome em minúsculo é " . $name_lower . ".<br>";
            echo "Seu nome tem ao todo " . $qtd . " letras.<br>";
            echo "Seu primeiro nome é " . $first_name[0] . " e tem " . strlen($first_name[0]) . " letras.";

            //função deixar tudo em maiusculo = strtoupper
            //função para deixar tudo em minusculo = strtolower
            //função para contar caracteres = strlen()
            //função para remover espaços em branco antes e depois = trim
            //função que substitui strings = str_replace()
            //função que divide uma string em partes menores com base em um delimitador especificado = explode
        ?>
    </section>
</body>
</html>
