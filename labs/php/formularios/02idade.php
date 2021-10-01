<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Maicon Brassanini">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Formulários em PHP</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/brand/mb_logo.png" alt="" width="120" height="85">
      <h2>Formulários</h2>
      
    </div>

    
      <div class="col-md-6 col-lg-8">
        <h4 class="mb-3">Exercício 02 PHP</h4>
        <?php 
            $nome = $_GET["nome"];
            $ano = $_GET["ano"];
            $sexo = $_GET["sexo"];
            $idade = date("Y") - $ano;
            echo "<h3>$nome tem $idade anos. </h3>";

        ?>

       <h4><a href="02exercicio.html">Voltar</a></h4>
    

      <div class="col-sm-6">
             
  <footer class="my-5 pt-5 text-muted text-center text-small">
    
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js></script>

      <script src="form-validation.js"></script>
  </body>
</html>

