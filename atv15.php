<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <form id  = "formcadastro" name = "formcadastro" method = "post" action = "recebeform2.php">
        <!-- radio button-->
         <b>qual  seu sistema operacional?</b><br>
        <input type = radio name = sistema value=" windows 8.1">win 98 <br>
        <input type = radio name = sistema value=" windows 10">win xp <br>
        <input type = radio name = sistema value=" linux"> linux<br>
        <input type = radio name = sistema value="mac"> mac <br><br>

        <!-- checkbox-->
        <b>escolha os numeros de sua preferencia :</b><br>
            <input type = checkbox name = "numeros[]" value= 10> 10 <br>
            <input type = checkbox name = "numeros[]" value= 100> 100 <br>
            <input type = checkbox name = "numeros[]" value= 1000> 1000 <br><br>
        
        <!--dropdown list-->
        
        <b>qual seu processador?</b><br>
        <select name = processador >
        <option value = pentium >pentium</option>
        <option value= amd>amd</option>
        <option value = celeron >celeron</option>
        </select><br><br>

        <input id="botaoenviar" type = "submit" value = "enviar">
        
    </form>
</body>
</html>