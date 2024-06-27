<!DOCTYPE html>
    <html>
        <body>
            <?php
                echo "<b>Seu Sistema operacional é: </br>" . $_POST["sistema"] . "<br><br>";

                if(isset($_POST["numeros"]))
                {
                    echo "<b>Os números de sua preferência são:</b><BR>";

                    foreach($_POST["numeros"] as $numero)
                    {
                        echo "- " . $numero . "<BR><br>";
                    }
                }
                else
                {
                    echo "<b>Você não escolheu número preferido!</b><br><br>";
                }

                echo "<b>Seu processador é: </br>" . $_POST["processador"] . "<BR>";
            ?>
        </body>
    </html>
