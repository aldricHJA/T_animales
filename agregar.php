<?php include "./header.php"?>

<html>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
        
        
<center>

<div class="card">
  <div class="card-header">
  </div>
  <div class="card-body">
    <h1 class="card-title" style="font-family: 'Alex Brush', cursive;">Agegar Nuevo Animal</h1>
    <form action="./backend/agregar.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"  class="form-control" required>
        <br>
        <label for="region">Region</label>
        <input type="text" name="region" id="region"  class="form-control" required>
        <br>
        <label for="comida">Comida</label>
        <input type="text" name="comida" id="comida"  class="form-control" required>
        <br>
        <button class= "btn btn-warning">Agregar</button>
        <a href="./index.php" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
</body>
</html>
<?php include "./footer.php"?>