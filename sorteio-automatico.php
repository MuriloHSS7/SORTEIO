<!DOCTYPE html>
<html>
    <header>
        <title>Sorteio</title>
    </header>
    <body>
        <h1>Sorteio em PHP</h1>
        <?php
            define("INFERIOR",1);
            define("SUPERIOR",5);
            $numero = rand(INFERIOR, SUPERIOR);
            switch($numero){
                case 1:
                    $mensagem = 'Uma bicicleta';
                break;
                case 2:
                    $mensagem = 'Mil reais em barras de ouro';
                break;
                case 3:
                    $mensagem = 'Uma casa';
                break;
                case 4:
                    $mensagem = 'Um conjunto de panelas';
                break;
                case 5:
                    $mensagem = 'Um carro zero';
                break;
                default:
                    $mensagem = 'Nada infelizmente';
            }
            echo"<br>";
            echo"Parabéns o seu prêmio foi: $mensagem";
        ?>
    </body>
</html>