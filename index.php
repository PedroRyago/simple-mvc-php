<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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


    .container{
        display: flex;
        height:60vh;
        align-items: center;
        justify-content: center;
    }

    .title{
        color: white;
        text-align: center;
        font-size: 50px;
    }

    .info{
        margin-top: 100px;
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

</style>

<body>

    <header>
        <h1 class="title">PADRÃO ARQUITETURAL <span class="M">M</span><span class="V">V</span><span class="C">C</span></h1>
    </header>

    <div>
        <h2 class="info">
         
        <hr>
        <i>Página "<?= pathinfo(__FILE__, PATHINFO_FILENAME); ?>"</i>
        <hr></br></br>

        Aqui é onde o usuário começa a interagir com o sistema, através de requisições. </br></br>
        O próximo passo é chamar o <span class="C">Controller</span>.

        </h2>
    </div>

   
    <a class="continueLink" href="app/controllers/HelloWorldController.php?acao=contextualizar">
        <button class="continueButton">
            <h2>CHAMAR <span class="C">Controller</span></h2>
        </button>
    </a>

</body>
</html>
