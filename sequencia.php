<?php
include("sequencia.class.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar a Sequência</title>
</head>
<body>
    
    <fieldset style="width:25%; background-color: rgb(250, 250, 250);" >
        <legend> Teste de Sequência PHP </legend>
                    
        <div><br>

        <form action="sequencia.php" id="inicio" method="post">
            Selecione o valor inicial:
            <select name="inicio" value="inicio">
            <?php
                for ($i = 1; $i <= 100; $i ++) {
                    echo '<option value =  "'.$i.'">'.$i.'</option>';
                }
            ?>
            </select> 
        </form><br>

        <form action="sequencia.php" id="fim" method="post">
            Selecione o valor final:
            <select name="fim" id="fim">
            <?php
                for ($i = 1; $i <= 100; $i ++) {
                    echo '<option value = "'.$i.'">'.$i.'</option>';
                }
            ?>

            </select>
        </form><br>

    <label for="mostrar">Mostrar:</label><br><br>

    <input type="radio" id="todos" name="escolha" value="todos" checked>
    <label for="todos">Todos</label><br>

    <input type="radio" id="pares" name="escolha" value="pares">
    <label for="pares">Apenas os pares</label><br>

    <input type="radio" id="impares" name="escolha" value="impares">
    <label for="impares">Apenas os ímpares</label><br><br>

    <input type="submit" name="submit" value="Mostrar Sequência">

    </div>
    </fieldset>

    <?php
        
        if (!isset($_POST['submit'])) {
            
            $sequencia = new Sequencia();
            $sequencia->setInicio($_POST['inicio']);
            $sequencia->setFim($_POST['fim']);

                if ($_POST['escolha'] == 'todos'){
                    $sequencia->exibirTodos();
                } elseif ($_POST['escolha'] == 'pares'){
                    $sequencia->exibirPares();
                } elseif ($_POST['escolha'] == 'impares'){
                    $sequencia->exibirImpares();
                }
        } else {

        }

    ?>
    
</body>
</html>