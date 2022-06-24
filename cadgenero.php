<!DOCType html>
<html>
    <head>  
        <meta charset="UTF-8">
        <title>Cliente</title>
        <link href="biblioteca.css" rel="stylesheet">
    </head>
    <body>

        <div class="container">
        <h3>Cadastro de gênero</h3>
       
        <?php
                include_once("conexaobd.php");

                $sql = "select * from genero;";

                $response = mysqli_query($conection,$sql); 
        
                echo "<table>
                        <tr>
                            <td>ID Gênero</td><td>Descrição</td>
                            <td>Editar</td><td>Excluir</td>
                        </tr>";
        
                while($registro = mysqli_fetch_assoc($response)){
                    echo "<tr>
                            <td>"  . $registro['id_genero'] . "</td>
                            <td>" .  $registro['descricao'] . "</td>
                            <td> <input type=\"button\" value=\"E\"/></td>
                            <td> <input type=\"button\" value=\"X\"/></td>
                         </tr>";
                }
        
                echo "</table>";
                    
        ?>
        </div>
    </body>
</html>