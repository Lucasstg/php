<html>
    <body>
        <?php
            $idade = 17;

            if($idade < 18) {
            echo 'voce pode entrar aqui!';
            } else { 
            echo ' seja mal vindo';
            }
        ?>

        <?php
            $idade = 21;
            $indentidade = true ;

            if($idade > 18 && $indentidade == true) {
            echo 'seja bem vindo';
            }
            ?>
    </body>
</html>