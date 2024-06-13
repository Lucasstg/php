<html>
    <body>
        <?php
            $temp = array("Outubro" => 27, "Novembro" =>28, "Dezembro" =>19);

            foreach($temp as $chave => $valor){
                echo "A temperatua média de $chave foi de $valor graus"
            }
        ?>
    </body>
</html>