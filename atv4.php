<html>
    <body>
        
    <?php
       //array com chave => valor
       $listaAlunoIdade = array(
            "Leonardo" => 31,
            "Lucas" => 18,
            "André" => 20
       );

       // array com chave com valor
       $listaCores = array(
        "vermelho",
        "preto",
        "azul"
       );
       
       // acesso ao item do array $listaAlunoIdade
       echo $listaAlunoIdade["Leonardo"];

       echo "br />";
       
       echo $listaCores[2];

       echo "br />";

       //exibir  em tela todo o conteúdo (chave e valor) de um arry var_dump(array)
       var_dump ($listaAlunoIdade);

       echo "<br />";
       var_dump($listaCores)
    ?>
    </body>
</html>