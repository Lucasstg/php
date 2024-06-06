<?php
// criar uma array produtos
$produtos = [
    "maça" => 1.99,
    "banana" => 2.99,
    "tomate" => 2.99
];
// exibir lista
echo "lista de produtos:";
foreach ($produtos as $produto => $preco){
    echo "$produto custa R$$preco .";
}
?>cli_set_process_title