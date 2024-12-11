<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = Exadecimal, 0b = Binário, 0 = Octal
        // $num = 0x1A;
        // echo "O valor da variável é $num";

        // $v = 300;
        // var_dump($v)

        // $num = 3e2; // = (3x10)^2
        // echo "O valor da variável é $num";

        // $num =  (int) 3e2; // resultado = 300 (int) >> Coerção
        // echo "O valor da variável é $num";

        // $casado = false;
        // var_dump($casado)

        // $vet = [6, 2.5, 9 , "Maria", False];
        // var_dump($vet)

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p)
        
    ?>
</body>

</html>