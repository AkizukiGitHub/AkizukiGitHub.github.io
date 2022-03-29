<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel Pórtico</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/hotel.css" />
</head>

<body>
  <!-- inicio barra de navegacion, solamente funciona el boton de contacto e inicio -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Bienvenido al Hotel Pórtico</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Habitaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Restaurantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Piscinas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Recreacion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html" id="B_contacto"><strong>Contacto</strong></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- cierre barra de navegacion -->

  <h3 id="tituloCont">Contactanos</h3>
  <div class="Section1">
    <p>
      Estaremos felices de contestar cualquiera que sean sus dudas.Le responderemos lo antes posible.
      Llene el siguiente formulario con su informacion para ponernos en contacto
    </p>
    <img src="img/camarero-sonriente-hermoso-que-sostiene-bandeja-champan_13339-34350.jpg" alt=""
      class="complementaria" />
  </div>

  <h1 style="font-size: xx-large; margin-left: 37%;">Formulario de registro</h1>
<?php
  getdate();
  $hoy = getdate();
  $min = $hoy['year']."-0".$hoy['mon']."-".$hoy['mday'];
  $max = ($hoy['year']+10)."-12-31";

  print_r($min);
  echo "<br>";
  print_r($max);
 
 echo 
 "<form action='' method='post'>
    <section style='margin-left: 20%; margin-right: 20%;'>
      <fieldset style='width: 100%'>
        <label>Email:</label><input type='email' name='email' /><br /><br />
        <label>Nombre : </label><input type='text' name='fname' /><span style='color: red;'>*</span><br /><br />
        <label>Apellido : </label><input type='text' name='lname' /><span style='color: red;'>*</span><br /><br />
        <label> Fecha de nacimiento:</label>
        <input type='date' name='fnac' min='$min' max='$max'/><br/>
        <br>
        <label>Sexo:</label><br/>
        <input type='radio' name='gender' value='Masculino' /><label>Masculino</label><br />
        <input type='radio' name='gender' value='Femenino' /><label>Femenino</label><br />
        <input type='radio' name='gender' value='Sin especificar' /><label>Prefiero no decirlo</label><br />
      </fieldset>
      <input type='submit' value='Enviar' />"
?>

      </section>

</body>

</html>