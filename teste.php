<!DOCTYPE HTML>
<html>
    <head>
        <title>Exemplo</title>
    </head>
    <body>

        <?php
            /*
            //NOME
            $nome = 'Ricardo';

            echo 'Meu nome é ' . $nome . '<br>';

            if ($nome == 'Ricardo') {
                echo 'Verdadeiro ! <br>';
            } else {
                echo 'Falso ! <br>';
            }

            //IDADE
            $idade = '26';

            echo 'Minha idade é ' . $idade . '<br>';

            if ($idade == '26') {
                echo 'Verdadeiro ! <br>';
            } else {
                echo 'Falso ! <br>';
            }
            */

            //FOR
            /*
            for($int = 0; $int < 10; $int++) {
                echo $int;
                echo '<hr>';
            }
            */

            /*
            //WHILE
            $int = 0;
            while($int <= 10) {
                echo $int;
                echo '<br>';
                $int++;
            }
            */
            
            /*
            printNumeros(20);

            function printNumeros($n){
                echo $n;
                echo '<br>';
            }
            */

            
            class Pessoa{
                public $nome;
                public $idade;

                public function __construct($nome, $idade){
                    $this->nome = $nome;
                    $this->idade = $idade;
                }

                public function printNomeEIdade(){ 
                    echo $this->nome;
                    echo '<br>';
                    echo $this->idade;
                    echo '<br>';
                }
            }

            $pessoa = new Pessoa('Ricardo', '42');
            $pessoa->printNomeEIdade();


            $pessoa2 = new Pessoa('Nicole', '35');
            $pessoa2->printNomeEIdade();

            $arr = ['Ricardo', 'Nicole'];
            echo $arr[0];



        ?>

    </body>
</html>