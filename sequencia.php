<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar a Sequência</title>
</head>
<body>
   
    <?php
        
        if (isset($_POST["botao"])) {

            include_once ("Sequencia.class.php");
            
            $sequencia = new Sequencia();
            $sequencia->setInicio($_POST["inicio"]);
            $sequencia->setFim($_POST["fim"]);
                if ($_POST['escolha'] == 'todos')
                $sequencia -> exibirTodos();
                elseif ($_POST['escolha'] == 'pares')
                $sequencia -> exibirPares();
                elseif ($_POST['escolha'] == 'impares')
                $sequencia -> exibirImpares();
        } else {

    ?>

    <fieldset style="width:25%; background-color: rgb(250, 250, 250);" >
        <legend> Teste de Sequência PHP </legend>
                    
        <br>

        <form action="sequencia.php" id="inicio" method="post">
            Selecione o valor inicial:
            <select name="inicio">
            <?php
                for ($i = 1; $i <= 100; $i ++) {
                    echo '<option value =  "'.$i.'">'.$i.'</option>';
                }
            ?>
            </select> 
        <br><br>

        <form action="sequencia.php" id="fim" method="post">
            Selecione o valor final:
            <select name="fim">
            <?php
                for ($i = 1; $i <= 100; $i ++) {
                    echo '<option value = "'.$i.'">'.$i.'</option>';
                }
            ?>

            </select>
        <br><br>

    <label for="mostrar">Mostrar:</label><br><br>

    <input type="radio" id="todos" name="escolha" value="todos" checked>
    <label for="todos">Todos</label><br>

    <input type="radio" id="pares" name="escolha" value="pares">
    <label for="pares">Apenas os pares</label><br>

    <input type="radio" id="impares" name="escolha" value="impares">
    <label for="impares">Apenas os ímpares</label><br><br>

    <input type="submit" name="botao" value="Mostrar Sequência">

    </form>

    <?php
        }
    ?>
</body>
</html>
