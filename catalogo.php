<?php
session_start();

// if (isset($_SESSION['usr']) && isset($_SESSION['pwd'])) {
//   if($_SESSION['perfil']==3){

//   }
//   else{
//     header('Location: prcd/sort.php');
//     die();
//   }
  
// } else {
//   // En caso contrario redirigimos el visitante a otra página

//   header('Location: prcd/sort.php');
//   die();
// }

// variables de sesión

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Shoes Store MX · Catálogo</title>
    <link rel="icon" type="image/png" href="../../assets/brand/img/cel.ico">

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <!-- ajax -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- ajax -->
    <script src="query/compra.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      /* normal web */
      
      
      /* On screens that are 992px wide or less, go from four columns to two columns */
      /* tablets, celular horizontal y otros dispositivos */
      @media screen and (max-width: 2000px) {
        #selector1{
          width:50%;
        }
        /* #card_tamano{
            height:350px;
          } */
      }
      /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
      /* CELULAR */
      @media screen and (max-width: 600px) {
          #esconder {
              display: none;
              }
          #titulo_card{
            font-size:14px;
          }
          #titulo_card2{
            font-size:12px;
          }
          #titulo_card3{
            font-size:8px;
          }
          #texto_titulo{
            font-size:18px;
          }
          #selector1{
            width:100%;
          }
          /* #card_tamano{
            height:175px;
          } */
          
      }
        
    </style>
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
      body{
        background-color:#f7f7f7;
      }

      #hidden:active {
     
        box-shadow: 0 10px 20px rgba(0,0,0,.1), 0 4px 8px rgba(0,0,0,.06);
        transform: scale(1.03);
        transition: width 0.8s, height 0.8s, transform 0.3s;
        
      }
      #hidden:hover {
    
        box-shadow: 0 10px 20px rgba(0,0,0,.1), 0 4px 8px rgba(0,0,0,.06);
        transform: scale(1.03);
        transition: width 0.8s, height 0.8s, transform 0.3s;
        
      }
      #hidden:visited {
    
        background-color: yellow;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="assets/brand/img/logo_store_shoes_sin_fondo.png" alt="" width="30" height="24"> Shoes Store MX</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.html"><i class="bi bi-house-fill"></i> Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="catalogo.php?id=1"><i class="bi bi-box-seam"></i> Catálogo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="envio.php"><i class="bi bi-geo-fill"></i> Tu pedido</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="be_/"><i class="bi bi-journal-code"></i> Be_</a>
            </li>
          </ul>
        
      </div>
      <button class="btn btn-outline-light position-relative" type="buton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"><i class="bi bi-cart-plus"></i> <span id="esconder">Carrito de compras</span>
          <span class="position-absolute top-100 start-0 translate-middle badge rounded-pill bg-danger" id="notificacionBadge">
    0
          <span class="visually-hidden">unread messages</span>
        </span>
      </button>
    </div>
  </nav>
</header>

<main class="bg-light">

<div class="mt-5 pt-2 mb-3">
  <h1 class="text-center">
    <p class="m-0 p-0"><img src="../../assets/brand/img/logo_store_shoes_sin_fondo.png" alt="" width="270"></p>
    <p class="m-0 p-0"><img src="../../assets/brand/img/letras_verdes.png" alt="" width="270"></p>
  </h1>
</div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->



  <div class="container marketing" style="background-color:#f7f7f7;">
  <p class=" pt-4"><strong>Seleccione tipo de filtro...</strong></p>
  <div class="container mb-4">
    <hr class="w-50">
      
    <form id="form1">
      <!-- divisor -->
      <div class="input-group mb-3" id="selector1">
          <div class="input-group-text bg-primary text-light">
            <i class="bi bi-filter-circle-fill"></i>          
          </div>
          <select class="form-select" aria-label="Example select with button addon" id="filter" name="filter">
            <option selected>Selecciona el tipo de filtro ...</option>

            <option value="">Sin categoría</option>
            <option value="1">a. Marca</option>
            <option value="2">b. Modelo</option>
            <option value="3">c. Color</option>
            <option value="4">d. Material</option>
            <option value="5">e. Talla</option>

          </select>
        </div>
    <hr class="w-50">
    <p class="">
   
    <!-- entran los dos filtros -->
    <!-- divisor -->
    <div class="input-group mb-3" id="selector1">
          <div class="input-group-text bg-primary text-light">
          <i class="bi bi-search"></i>            
          </div>
          <input type="text" class="form-control" placeholder="Marca..." aria-label="Username" aria-describedby="basic-addon1" name="marca">
        </div>

    <div class="input-group mb-3" id="selector1">
          <div class="input-group-text bg-primary text-light">
          <i class="bi bi-search"></i>            
          </div>
          <input type="text" class="form-control" placeholder="Modelo..." aria-label="Username" aria-describedby="basic-addon1" name="modelo">
        </div>

        <!-- divisor -->
      <div class="input-group mb-3" id="selector1">
          <div class="input-group-text bg-primary text-light">
          <i class="bi bi-search"></i>          
          </div>
          <select class="form-select" aria-label="Example select with button addon" id="filtro2" name="color">
            <option selected>Color ...</option>
            <option value="">Sin categoría</option>
            
          </select>
        </div>

        <div class="input-group mb-3" id="selector1">
          <div class="input-group-text bg-primary text-light">
          <i class="bi bi-search"></i>            
          </div>
          <input type="text" class="form-control" placeholder="Material..." aria-label="Username" aria-describedby="basic-addon1" name="material">
        </div>

        <div class="input-group mb-3" id="selector1">
          <div class="input-group-text bg-primary text-light">
          <i class="bi bi-search"></i>          
          </div>
          <select class="form-select" aria-label="Example select with button addon" id="filtro2" name="talla">
            <option selected>Talla ...</option>
            <option value="">Sin categoría</option>
            
          </select>
        </div>
    <!-- entran los dos filtros -->
    <hr class="w-50">
        
        <button class="btn btn-primary" type="submit" id="smt"><i class="bi bi-filter-circle-fill"></i> Filtro</button>
        
    </form>
  </p>
  
    <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">

<!-- código consulta -->

</head>
<body>


<br>

<!-- codigo -->
     
    </div>
    
  </div>
  
  
    <span id="txtHint"><b>Aquí debe aparecer la información...</b></span>

    <!-- Three columns of text below the carousel -->
    <!-- consultas productos -->
    <div class="row row-cols-2 g-2">
      <?php
        // require('query/query_catalogo.php');
      ?>
    </div><!--row-->
    <!-- consultas productos -->
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
   


  <!-- FOOTER -->
  <!-- <footer class="container"> -->
  <footer class="footer mt-auto py-3">
    <p class="float-end"><a href="#">Regresar arriba</a></p>
    <!-- <p>&copy; 2022 RedDeploy &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> -->
    <p><strong>DEV:</strong> © 2022 <a href="https://direccioneszac.net/red_deploy/" target="_blank">Nexus Technology and Consulting</a>.</p>
    <p><a href="privacidad/" style="text-decoration: none;"><i class="bi bi-shield-fill-check"></i> Política de privacidad</a></p>
  </footer>
  
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

<!-- modal de descripción del producto -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-cart-plus"></i> Descripción del producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img src="assets/brand/img/cel1.jpg" class="img-fluid" alt="...">
      <hr>
        <p class="mt-2"><strong>Nombre:</strong> Producto #1</p>
        <p class="mt-1"><strong>Descripción:</strong> Descripción del producto</p>
        <p class="mt-1"><strong>Precio:</strong> $0.00</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary"><i class="bi bi-cart-plus"></i> Agregar al carrito</button>
      </div>
    </div>
  </div>
</div>
<!-- modal de descripción del producto -->

<?php
  require('canvas.php');
?>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  function mensajeAgregado(){
      
      swal({
        title: "Correcto",
        text: "Tu producto ha sido agregado al carrito de compras",
        type: "success"
        }).then(function() {

          var bsOffcanvas2 = new bootstrap.Offcanvas(offcanvasRight);
          bsOffcanvas2.show();
        
      });
      
  }
   
</script>

<script>
  x=0;
  function cambio(x){
    
  const div=document.querySelectorAll('#hidden');
  for(let i=0;i<div.length;i++){
    const styles = window.getComputedStyle(div[i]);
      var xyz = (div[i]).getAttribute('value');
      // alert(xyz)
        if(xyz == x){
          // div[i].style.visibility='visible';
          div[i].style.display = 'initial';
        }
        else{
          // div[i].style.visibility='hidden'; 
          div[i].style.display = 'none'; 
        }
        
  }
// https://codepen.io/letstacle/pen/qBmoZoB
  }

  function mostrarTodo(){
    const div2=document.querySelectorAll('#hidden');
      for(let i=0;i<div2.length;i++){
        const styles = window.getComputedStyle(div2[i]);
        // div2[i].style.visibility='visible';
        div2[i].style.display = 'initial';
      }
    } 
</script>

<script>
  var x = document.getElementById('checkbox1');
  if (x.checked == true){
    document.getElementById("marca").disabled=false;
  }
  else{
    document.getElementById("marca").disabled=true;
  }

  var x2 = document.getElementById('checkbox2');
  if (x2.checked == true){
    document.getElementById("modelo").disabled=false;
  }
  else{
    document.getElementById("modelo").disabled=true;
  }

  var x3 = document.getElementById('checkbox3');
  if (x3.checked == true){
    document.getElementById("color").disabled=false;
  }
  else{
    document.getElementById("color").disabled=true;
  }

  var x4 = document.getElementById('checkbox4');
  if (x4.checked == true){
    document.getElementById("material").disabled=false;
  }
  else{
    document.getElementById("material").disabled=true;
  }

  var x5 = document.getElementById('checkbox5');
  if (x5.checked == true){
    document.getElementById("talla").disabled=false;
  }
  else{
    document.getElementById("talla").disabled=true;
  }
  
  function habilitar1(){
    document.getElementById("marca").disabled=false;
  }
  function habilitar2(){
    document.getElementById("modelo").disabled=false;
  }
  function habilitar3(){
    document.getElementById("color").disabled=false;
  }
  function habilitar4(){
    document.getElementById("material").disabled=false;
  }
  function habilitar5(){
    document.getElementById("talla").disabled=false;
  }
</script>

<script>
          $(document).ready(function(){
          var form=$("#form1");
          $("#form1").submit(function(event){
          $.ajax({
                  type:"POST",
                  url:"prcd/filtro.php",
                  data:form.serialize(),
                  dataType: "html",
                  async:false,
                  cache: false,
                    success: function(data) {
                      $("#txtHint").html(data);                  
                    }               
                  });
                  
                  event.preventDefault();
          });
          });

        </script>

<script>
              $(document).ready(function(e){

                $("#marca").change(function(){
                  var parametros= "marcaID="+$("#marca").val();
                    
                      $.ajax({
                        data: parametros,
                        url:'ajaxData.php',
                        type:'POST',
                        beforeSend: function(){
                          $("#modelo").html("Procesando, espere por favor...");
                        },
                        success:function(response){
                          $("#modelo").html(response);
                        }
                      });
                });

                $("#modelo").change(function(c){
                  var parametros1= $("#marca").val();
                  var parametros2= $("#modelo").val();
                                        
                      $.ajax({
                        data: {"uno": parametros1, "dos": parametros2},
                        url:'ajaxDataModelo.php',
                        type:'POST',
                        beforeSend: function(){
                          $("#color").html("Procesando, espere por favor...");
                        },
                        success:function(responseColor){
                          $("#color").html(responseColor);
                        },
                        error: function (responseColor) {
                          console.log(responseColor.responseText);
                        }

                      });
                });

                $("#modelo").change(function(d){
                  var parametros1= $("#marca").val();
                  var parametros2= $("#modelo").val();
                                        
                      $.ajax({
                        data: {"uno": parametros1, "dos": parametros2},
                        url:'ajaxDataColor.php',
                        type:'POST',
                        beforeSend: function(){
                          $("#material").html("Procesando, espere por favor...");
                        },
                        success:function(responseColor){
                          $("#material").html(responseColor);
                        },
                        error: function (responseColor) {
                          console.log(responseColor.responseText);
                        }

                      });
                });

                $("#modelo").change(function(f){
                  var parametros1= $("#marca").val();
                  var parametros2= $("#modelo").val();
                                        
                      $.ajax({
                        data: {"uno": parametros1, "dos": parametros2},
                        url:'ajaxDataTalla.php',
                        type:'POST',
                        beforeSend: function(){
                          $("#talla").html("Procesando, espere por favor...");
                        },
                        success:function(responseColor){
                          $("#talla").html(responseColor);
                        },
                        error: function (responseColor) {
                          console.log(responseColor.responseText);
                        }

                      });
                });

              });
</script>

<script>
  $(document).ready(function(){
    $("#filter").change(function(){
                  var filtro= $("#filter").val();
                    
                      $.ajax({
                        data: {"filtro":filtro},
                        url:'ajaxFiltro.php',
                        type:'POST',
                        beforeSend: function(){
                          $("#filtro1").html("Procesando, espere por favor...");
                        },
                        success:function(response){
                          $("#filtro1").html(response);
                        }
                      });
                });
    $("#filter").change(function(){
                  var filtro= $("#filter").val();
                    
                      $.ajax({
                        data: {"filtro":filtro},
                        url:'ajaxFiltro2.php',
                        type:'POST',
                        beforeSend: function(){
                          $("#filtro2").html("Procesando, espere por favor...");
                        },
                        success:function(response){
                          $("#filtro2").html(response);
                        }
                      });
                });
  });
</script>

  <!-- https://pressroom.hostalia.com/white-papers/selects-dependientes-php-jquery-ajax/ -->