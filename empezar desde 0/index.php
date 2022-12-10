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

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">logo</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Visita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">quincena</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mensualidad</a>
          </li>


        </ul>
        
      </div>
    </div>
  </nav>

  <?php
  require_once "./views/carousel.php";
?>

  <h1>salon de fiestas ikari</h1>

  <script src="script.js"></script>


  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        
     ubicacion
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>
        https://www.google.com.mx/maps/place/Luxor+Palace/@16.8559035,-99.8605752,3a,75y,328.32h,92.74t/data=!3m6!1e1!3m4!1sy7cxEyKGXEuAa4MPIpjsjA!2e0!7i16384!8i8192!4m5!3m4!1s0x85ca582c65929e95:0x4aa13b9814b5ccc6!8m2!3d16.856169!4d-99.8605862
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        horarios
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>
 
 <p>domingo	7:00–17:00</p>
<p>lunes	6:00–22:00</p>
<p>martes	6:00–22:00</p>
<p>miércoles	6:00–22:00</p>
<p>jueves	6:00–22:00</p>
<p>viernes	6:00–22:00</p>
<p>sábado	6:00–22:00</p>

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        precio por visita 
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>(Visita $80)

      </div>
    </div>
  </div>
</div>



  <p>--------------------------------------------------------------------------------------------------------------------------</p>
  
  <a href="#" class="btn btn-primary">mas sucursales</a>
</body>

</html>