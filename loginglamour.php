
<!DOCTYPE html>
<html>
<head>
 
  <title> Login </title>
  <link rel="icon"  type="image/jpg" href="img\logo.jpg" />
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <script src="js/jquery.js"> </script>
   
  <style>

  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
 
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }


#face:hover {
  color: blue;
}
#twitter:hover {
  color:#4db8ff;
}
#insta:hover {
  color:#994d00;
}

  </style>
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
      <a class="navbar-brand" href="index.html"> <i class="fa fa-home"></i>  Inicio </a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="cadastrarsalao.html">  CADASTRAR SALÃO </a></li>
        <li><a href="servicos.html"> SERVIÇOS  </a></li>
        <li><a href="contato.html">  CONTATO </a></li>
        <li><a href="criarconta.html">  CRIAR CONTA </a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="loginglamour.php">  <i class="fa fa-user"></i> Login </a></li>
      </ul>
    </div>

  
  </div>
</nav>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->


<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<div class="" style="text-align:center;margin-top:100px;">
  
  <h1> <i class="fa fa-users"></i> Login </h1>
  
</div>

<br>




<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<div class="col-md-12">

<div class="col-md-8 col-md-offset-2">  <!-- PAINEL DE CADASTRO -->

  

    <form action="login.php" method="post" name="formulario" id="formulario">

<div  class="form-group col-md-7 col-md-offset-3 has-success">
    <label for="email"> E-mail </label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
 <br /> <br /> <br />
 <div class="form-group col-md-7 col-md-offset-3 has-success">
 
    <label for="senha"> Senha </label>
    <input type="password" class="form-control" id="senha" name="senha" size=16 maxlength=16 placeholder="********">
    


</div>
 

<div class="col-md-10 col-md-offset-3" style="margin-bottom:20px;">

    <input type="submit" class="btn btn-success" value="Entrar" id="entrar" name="entrar" >
    <a href="criarconta.html" class="btn btn-link col-md-offset-5"> Cadastrar </a>
    
</div>
</form>
</div>


<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->








<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<div class="col-md-12" style="margin-top:180px;">
<div class="alert alert-dismissible alert-success">
 <strong> Ajuda ?! </strong> Entre em contato conosco <a href="contato.html" class="alert-link"> glamourhost@gmail.com </a>.
</div>
</div>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<div class="col-md-12 footer" style="text-align:center;">
   <p> ©2016 - GlamourHost.
   <p>Desenvolvido por Equipe Glamour 
  </div>

</body>
</html>
