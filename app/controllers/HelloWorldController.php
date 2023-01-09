<?php

    $acao = isset($_GET['acao']) ? $_GET['acao'] : null;

    require_once __DIR__ . '/../models/HelloWorldModel.php';


    class HelloWorldController{

        // atributo para armazenar a instancia do model
        private $model;

        function __construct(){

            // instanciando o model na construção do controller
            $this->model = new HelloWorldModel();
            
        }

        public function index(){

            // pegando a mensagem do model
            $data = $this->model->getHelloWorld();

            // chamando a view
            require_once __DIR__ . '/../views/HelloWorldView.php';
            
        }

        public function returnData(){

            // pegando a mensagem do model
            $data = $this->model->getHelloWorld();

            // retornando a mensagem
            return $data;
            
        }
        
    }

    if($acao == 'renderizarView'){
        $controller = new HelloWorldController();
        $controller->index();
    }

?>

<?php

    if ($acao != 'renderizarView') {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controller</title>
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

</style>

<body>

    <header>
        <h1 class="title">PADRÃO ARQUITETURAL <span class="M">M</span><span class="V">V</span><span class="C">C</span></h1>
    </header>

    </br></br>

    <div>

        <?php
            if($acao == 'contextualizar') {
        ?>

        <h2 class="info">
            
            <hr>
            <i><span class="C">Controller "<?= pathinfo(__FILE__, PATHINFO_FILENAME); ?>"</span></i>
            <hr></br></br>
            A função do <span class="C">Controller</span> consiste em:
            
        </h2>

        <ul class="funcoesController">
            <li>
                Receber requisições do usuário
            </li>
            <li>
                Fazer requisições para o <span class="M">Model</span>
            </li>
            <li>
                Receber dados do <span class="M">Model</span>
            </li>
            <li>
                Devolver dados para a <span class="V">View</span>
            </li>
        </ul>
     
        </br></br>

        <h2 class="info">
            O próximo passo é fazer requisição para o <span class="M">Model</span>.</br></br>
            Essa ação será realizada através da função <span class="functionStyle">"index()"</span> presente neste controller.</br></br>
        </h2>

        <a class="continueLink" href="../models/HelloWorldModel.php?acao=contextualizarModel">
            <button class="continueButton">
                <h2>FAZER REQUISIÇÃO PARA O <span class="M">Model</span></h2>
            </button>
        </a>

        <?php 
            } else if ($acao == 'mostrarDados') {
        ?>

        <h2 class="info">
            
            <hr>
            <i><span class="C">Controller "<?= pathinfo(__FILE__, PATHINFO_FILENAME); ?>"</span></i>
            <hr></br></br>
            
            O <span class="M">Model</span> retornou os seguintes dados para o <span class="C">Controller</span>: </br></br></br>
            <?php
                $controller = new HelloWorldController();
                $data = $controller->returnData();

                while($row = $data->fetch(pdo::FETCH_ASSOC)) {
                    echo "ID: ";
                    echo $row['id'];
                    echo "</br>";
                    echo "Mensagem: ";
                    echo $row['message'];
                    echo "</br></br>";
                }
            ?> 
           
            </br></br>

            Agora é a vez da <span class="V">View</span> receber esses dados e usá-los.</br></br>
            
        </h2>

        <a class="continueLink" href="./HelloWorldController.php?acao=renderizarView">
            <button class="continueButton">
                <h2>ENVIAR DADOS PARA A <span class="V">View</span></h2>
            </button>
        </a>

        <?php 
            }
        ?>

    </div>

   
    

</body>
</html>

<?php
    }
?>