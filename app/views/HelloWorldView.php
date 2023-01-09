<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>

<style>
    body{
        background-color: black;
    }

    table{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border: 1px solid;
        border-color: red;
        font-size: 50px;
        color: white;
        text-align: center;
        border-collapse:collapse;
        width: 50%;
    }

    th{
        background-color: red;
        color: black;
    }

    th, td{
        height: 70px;
        border-bottom: 1px solid red;
    }

    tr:hover {background-color:rgb(141, 24, 24);}


    .title{
        color: white;
        text-align: center;
        font-size: 50px;
    }

    .info{
    
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: white;
        text-align: center;
        font-size: 30px;
    }

    .M{
        color: rgb(255, 69, 69);
    }

    .V{
        color: rgb(93, 217, 255);
    }
    
    .C{
        color: rgb(255, 255, 27);
    }

    .continueLink{
        display: block;
        text-align: center;
        margin-top: 50px;
        width: fit-content;
        margin: 0 auto;
    }

    .continueButton{
        background-color: rgb(92, 92, 92);
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 10px;
    }

    .functionStyle{
        color: rgb(2, 196, 76);
    }

    .funcoesController{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: white;
        margin : 0 auto;
        font-size: 30px;
        margin-top: 50px;
        width: 40%;
    }

    .container{
        margin-top: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        
    }

</style>

<body>

    <header>
    <h1 class="title">PADRÃO ARQUITETURAL <span class="M">M</span><span class="V">V</span><span class="C">C</span></h1>
    </header>

    </br></br>

    <div>
        <h2 class="info">
        
        <hr>
        <i><span class="V">View "<?= pathinfo(__FILE__, PATHINFO_FILENAME); ?>" </span></i>
        <hr></br></br>
        Os dados retornados pelo <span class="C">Controller</span>  estão sendo exibidos na tabela abaixo:

        </h2>
    </div>


    <div class="container">

        <table>

            <thead>

                <tr>
                    <th>Id</th>
                    <th>Mensagem</th>
                </tr>
                
            </thead>
            <?php
                // exibindo os dados da consulta
                while($row = $data->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['message'] . "</td>";
                    echo "</tr>";
                }
            ?>

        </table>

    </div>
    

</body>
</html>