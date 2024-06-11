<html>
    <body>
        <?php
            $nome = "Fulano";

            switch($nome) {
                case "Fulano":
                    echo "E ae Fulano!";
                break;
                case "Sicrano":
                    echo "E ae Sicrano!";
                break;
                case "Beltrano":
                    echo "E ae Beltrano!";
                break;
                default:
                    echo "Qual é o seu nome?";
                break;
            }
        ?>
    </body>
</html>