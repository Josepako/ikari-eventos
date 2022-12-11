<html>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Eventos ikari</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>.navbar {
  background-color: #e01ba2;
}
.navbar .navbar-brand {
  color: #000000;
}
.navbar .navbar-brand:hover,
.navbar .navbar-brand:focus {
  color: #2dfafa;
}
.navbar .navbar-text {
  color: #000000;
}
.navbar .navbar-text a {
  color: #2dfafa;
}
.navbar .navbar-text a:hover,
.navbar .navbar-text a:focus {
  color: #2dfafa; 
}
.navbar .navbar-nav .nav-link {
  color: #000000;
  border-radius: .25rem;
  margin: 0 0.25em;
}
.navbar .navbar-nav .nav-link:not(.disabled):hover,
.navbar .navbar-nav .nav-link:not(.disabled):focus {
  color: #2dfafa;
}
.navbar .navbar-nav .nav-item.active .nav-link,
.navbar .navbar-nav .nav-item.active .nav-link:hover,
.navbar .navbar-nav .nav-item.active .nav-link:focus,
.navbar .navbar-nav .nav-item.show .nav-link,
.navbar .navbar-nav .nav-item.show .nav-link:hover,
.navbar .navbar-nav .nav-item.show .nav-link:focus {
  color: #2dfafa;
  background-color: #8d00bb;
}
.navbar .navbar-toggler {
  border-color: #8d00bb;
}
.navbar .navbar-toggler:hover,
.navbar .navbar-toggler:focus {
  background-color: #8d00bb;
}
.navbar .navbar-toggler .navbar-toggler-icon {
  color: #000000;
}
.navbar .navbar-collapse,
.navbar .navbar-form {
  border-color: #000000;
}
.navbar .navbar-link {
  color: #000000;
}
.navbar .navbar-link:hover {
  color: #2dfafa;
}

@media (max-width: 575px) {
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #000000;
  }
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #2dfafa;
  }
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #2dfafa;
    background-color: #8d00bb;
  }
}

@media (max-width: 767px) {
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #000000;
  }
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #2dfafa;
  }
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #2dfafa;
    background-color: #8d00bb;
  }
}

@media (max-width: 991px) {
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #000000;
  }
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #2dfafa;
  }
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #2dfafa;
    background-color: #8d00bb;
  }
}

@media (max-width: 1199px) {
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #000000;
  }
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #2dfafa;
  }
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #2dfafa;
    background-color: #8d00bb;
  }
}

.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
  color: #000000;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
  color: #2dfafa;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
  color: #2dfafa;
  background-color: #8d00bb;
}</style>
<body>
  <?php
  require_once"./views/navbar.php";
  require_once "./views/carousel.php";
  

?>

 <center> <h1>salon de fiestas ikari</h1></center>



  <!-- Comentario section-->
  <form method="POST" action="./php/enviarcomentario.php">
            <section id="contact">
                <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                        <div class="col-lg-8">
                            <h2>Comentarios</h2>
                            <br>
                            <p class="lead">Has un comentario
                            </p>
                                <br>
    
                                <div class="col-xs-12">
                                    <h3>¡Haz un Comentario!</h3>

                                    <br>
                                <div class="form-group">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input class="form-control" name="nombre" type="text" id="nombre" placeholder="Escribe tu nombre" required >
                                    </div>
                            
                                    
                            <br>
                                    <div class="form-group">
                                    <label for="comentario" class="form-label">Comentario:</label>
                                    <textarea class="form-control" name="comentario" cols="30" rows="5" type="text" id="comentario" 
                                    placeholder="Escribe tu comentario......"></textarea>
                                    </div>
                            <br>
                            <input class="btn btn-primary" type="submit"  value="Enviar Comentario">
                            <br>
                            <br>
                            <br>
                                    <?php

$conexion=mysqli_connect("sql521.main-hosting.eu","u413489667_equipoDos","@equipoDos202240","u413489667_equipoDos"); 
$resultado= mysqli_query($conexion, 'SELECT * FROM comentarios');

while($comentario = mysqli_fetch_object($resultado)){

    ?>

    <b><?php echo($comentario->nombre);  ?></b>(<?php echo ($comentario->fecha); ?>) dijo: 
    <br />
    <?php echo ($comentario->comentario);?>
    <br />
    <hr />




    <?php
}

                                    ?>
                            
                                </form>
                          
                </div>
                
            </section>
























 

<script src="script.js"></script>
  

 
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  

</body>

</html>