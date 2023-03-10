<!DOCTYPE html>
<html>
<title>PaginaMultiplicaciones</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link href="estilo.css" rel="stylesheet" >
<head>
</head>


<body>
    
    <h1>PaginaMultiplicaciones</h1>

    <h2>Coloque los resultados correctos en cada uno de los recuadros</h2>

    <form action="resultados.php" method="get">
    <?php
          $tabla=$_GET["tabla"];
          echo'
          <input type = "hidden" id="tabla" name ="tabla"
          value ="'.$tabla.'">
          ';
          $rango = $_GET["rango"];
          echo'
          <input type = "hidden" id="rango" name ="rango"
          value ="'.$rango.'">
          ';
          $limite =$_GET["limite"];
          echo'
          <input type = "hidden" id="limite" name ="limite"
          value ="'.$limite.'">
          ';
          if ($limite > $rango) {
            for($i=$rango; $i <= $limite; $i++){
              echo'
              <label for= "fname">'.$tabla.'x'.$i.':</label>
              <input type = "text" id="x'.$i.'"
              name="x'.$i.'"
              value =""><br>
              ';
            }
          }
          else{
            for($i=$rango; $i >= $limite; $i--){
              echo'
              <label for= "fname">'.$tabla.'x'.$i.':</label>
              <input type = "text" id="x'.$i.'"
              name="x'.$i.'"
              value =""><br>
              ';
            }
          }
            
        ?>
        
        <br>
        <input class="btn btn-primary" type="submit" value="Calcular"><br>
      </form>



<div></div>
</body>
</html>

