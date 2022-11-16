<?php
include "./conexion.php";
include "./header.php";
$conexion = conexion();
$id = $_GET['idp'];
$sql = "SELECT * FROM t_animales
        WHERE id = '$id'";
$respuestas = mysqli_query($conexion, $sql);
$item = mysqli_fetch_array($respuestas);
?>


<html>
    <body>

    <div class="container">
        <div class="row">
            <div class="col">

            <div class="card">
  <div class="card-header">
  </div>
  <div class="card-body">
    <center><h1 class="card-title"  style="font-family: 'Alex Brush', cursive;">Actualizar</h1></center>
    <form action="./backend/actualizar.php" method="post">
        <input type="text" name="id" value="<?php echo $id;?>" hidden>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required value="<?php echo $item['nombre'] ?>">
        <br>
        <label for="region">Region</label>
        <input type="text" name="region" id="region" class="form-control" required value="<?php echo $item['region']?>">
        <br>
        <label for="comida">Comida</label>
        <input type="text" name="comida" id="comida" class="form-control" required value="<?php echo $item['comida']?>">
        <br>
        <centa>
        <button class= "btn btn-warning">Agregar</button>
        <a href="./index.php" class="btn btn-primary">Regresar</a>
        </center>
    </form>
 </div>
    </div>
        </div>
            </div>
                </div>








        
    
    <h2>Actualizar</h2>
   
    </body>
</html>

<?php include "./footer.php"?>