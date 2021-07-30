<?php
  function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "sistemasweb";
    $conexion = mysqli_connect($servidor, $usuario, $password, $db);
    return $conexion;
  }

  
  $conexion = conexion();
    $sql = "SELECT id_tarea, id_fecha ,tarea ,estado ,fechaInsert  FROM t_tareas";
    $repuesta = mysqli_query($conexion,$sql);
    $cadenaTabla = "";
    $cadenaTabla = $cadenaTabla . '<table class="table" tyle="border-collapse:collapse">
                                  <thead>
                                      <th>Id Tarea</th>
                                      <th>Tarea</th>
                                      <th>Id Fecha</th>
                                      <th>Fecha Insert</th>
                                      <th>Estado</th>
                                      <th>Eliminar</th>
                                  </thead>
                                  <tbody>';
    
    while ($mostrar = mysqli_fetch_array($repuesta)) {
    $cadenaTabla= $cadenaTabla . '<tr>
                                <td>' . $mostrar['id_tarea'].' </td>
                                <td>' . $mostrar['tarea'].'   </td>
                                <td>' . $mostrar['id_fecha'].'      </td>
                                <td>' . $mostrar['fechaInsert'].'      </td>
                                <td><button type="button">Terminado</button></td> 
                                <td><button type="button">Eliminar</button></td>  
                                  
                                </tr>';
    }
                            
$cadenaTabla = $cadenaTabla . '</tbody></table>';


    $titulo='<h1>Registro de tarea</h1>';
    $nav='<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
              <div class="container">
                  <a class="navbar-brand" href="index.php">Sistemas Web</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item active">
                              <a class="nav-link" href="index.php"> Inicio
                                  <span class="sr-only">(current)</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>';
    $img='<div class="card" style="width: 18rem;">
    <img src="img/img.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    </div>
  </div>';
    $article='<article>
    <h6>Nota para el alumnos </h6>
    <p>Si no entregas tu trabajo esta reprobado</p>
    </article>';
    $samp='<p><samp>Jair Suuarez Romero</samp></p>';
  
    
    echo $nav.$titulo.$article.$cadenaTabla.$samp.$img;







  ?>