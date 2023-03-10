<!DOCTYPE html>
<html>
<title>Resultados</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link href="estilo.css" rel="stylesheet">
<head>
</head>
<body>


<h1>Resultados</h1>

<div>

<?php
  $puntos=0;
  $contador=$_GET["tabla"];
  $rango=$_GET["rango"];
  $limite=$_GET["limite"];
  $cantidad=0;

  if($rango>$limite) {
    $cantidad=($rango-$limite) + 1;

    echo '<div class="container"><table class="table table-bordered"><thead><tr><th>Operación</th><th>Tu Resultado</th><th>Resultado Correcto</th></tr></thead><tbody>';

    for ($limite; $limite <=$rango ; $limite++) { 
      $resultados=$_GET["x".$limite];
      $multiplicacion= ($contador*$limite);
      if ($resultados == $multiplicacion) {
        $puntos++;
      }
      echo '<tr><td>'.$contador.' x '.$limite.'</td><td style="color: green;">'.$resultados.'</td><td>'.$multiplicacion.'</td></tr>';
    }

    echo '</tbody></table><br><h1>El puntaje es : '.$puntos.' de '.$cantidad.'</h1></div>';
  } else if($limite>$rango) {
    $cantidad=($limite-$rango) + 1;

    echo '<div class="container"><table class="table table-bordered"><thead><tr><th>Operación</th><th>Tu Resultado</th><th>Resultado Correcto</th></tr></thead><tbody>';

    for ($rango; $rango <=$limite ; $rango++) { 
      $resultados=$_GET["x".$rango];
      $multiplicacion= ($contador*$rango);
      if ($resultados == $multiplicacion) {
        $puntos++;
      }
      echo '<tr><td>'.$contador.' x '.$rango.'</td><td style="color: green;">'.$resultados.'</td><td>'.$multiplicacion.'</td></tr>';
    }

    echo '</tbody></table><br><h1>El puntaje es : '.$puntos.' de '.$cantidad.'</h1></div>';
  }
?>

<input class="btn btn-primary" type="submit" value="Enviar Resultado al Correo">

</div>

<div>This is real time online HTML Editor</div>
</body>
</html>