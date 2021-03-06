<?php
mb_internal_encoding("UTF-8"); 
mb_http_output( "UTF-8" );  
ob_start("mb_output_handler");   
header("Content-Type: text/html; charset=UTF-8",true);

session_start();
include "config.php";
?>

<!DOCTYPE html>
<html>
    <head>

        <title> Contato </title>
        <link rel="icon"  type="image/jpg" href="img\logo.jpg" />
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery.js"></script>

    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="login.php"> <i class="fa fa-home"></i>  Inicio </a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-left">

                        <li><a href="servicos.html"> SERVIÇOS  </a></li>
                        <li><a href="contato.php">  CONTATO </a></li>
                    </ul>
                    </ul>



                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="usuario.php">  <i class="fa fa-user"></i> <?= $_SESSION['usuarionome'] ?></a></li>
                        <li><a href="logoff.php"> <i class="fa fa-sign-out"></i> Sair</a>
                    </ul>

                </div>


            </div>
        </nav>

        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->



        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

        <div class="" style="text-align:center;margin-top:90px;">

            <h1> <i class="fa fa-envelope-square"></i> Contato </h1>

        </div>

        <br>


        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2">
                <h1> GlamourHost </h1>
                <p> Entre em contato com os responsáveis, caso esteja com dúvida, ou algo relacionado a consultas do site.</p>
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2">  <!-- PAINEL DE CADASTRO -->


                <form role="form" style="margin-top:25px;">

                    <div class="form-group col-md-6 has-success">
                        <label for="nome"> Nome Completo </label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                    </div>

                    <div class="form-group col-md-6 has-success">
                        <label for="email"> E-mail </label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
                    </div>


                    <div class="form-group col-md-12 has-success">
                        <label for="" > Observações </label>
                        <textarea class="form-control" rows="3" id="textArea" placeholder="Digite seu texto aqui ..." ></textarea>
                        <span class="help-block"> Atenciosamente GlamourHost !</span>
                    </div>

                    <div class="col-md-10" style="margin-bottom:20px;">

                        <button type="button" class="btn btn-danger"> Limpar </button>
                        <button type="button" class="btn btn-success"> Enviar </button>
                    </div>


            </div>


        </form>

    </div>







    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <div class="col-md-12" style="text-align:center;background-color: white;">

        <h2> Publicidade </h2>

        <img src="img/publicidade.jpg" width="200" height="160">
        <img src="img/publicidade.jpg" width="200" height="160">
        <img src="img/publicidade.jpg" width="200" height="160">
        <img src="img/publicidade.jpg" width="200" height="160">

        <hr id="sepador" class="col-md-12">


    </div>


    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

    <div class="col-md-12">
        <div class="alert alert-dismissible alert-success">
            <strong> Ajuda ?! </strong> Entre em contato conosco <a href="#" class="alert-link"> glamourhost@gmail.com </a>.
        </div>
    </div>

    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <div class="col-md-12 footer" style="text-align:center;">
        <p> ©2016 - GlamourHost.
        <p>Desenvolvido por Equipe Glamour
    </div>

</body>
</html>
