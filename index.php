<?php
 include "./conexion.php";
 include "./header.php";
 $conexion = conexion();

$sql = "SELECT * FROM t_animales";
$respuestas = mysqli_query($conexion, $sql);
 ?>

        <div class="container">
            <div class="row">
                <div class="col">
<div class="card">
  <div class="card-body">
   <center><h1 class="card-title" style="font-family: 'Alex Brush', cursive;">Lista De Animales</h1></center> 
<table>  
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Region</th>
            <th>Comida</th>
            <th>Editar</th>
            <th>Elimar</th>
        </tr>
    </thead>
    <tbody>
    <?php while( $ver=mysqli_fetch_array($respuestas)):?>
        <tr>
            <td><?php echo $ver ['id'];?></td>
            <td><?php echo $ver ['nombre'];?></td>
            <td><?php echo $ver ['region'];?></td>
            <td><?php echo $ver ['comida'];?></td>
            <td>
                <a href="" class="btn btn-primary">Editar</a>
            </td>
            <td>
            <a href="./backend/eliminar.php?idp=<?php echo $ver ['id']; ?> " class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<br>
     <center><a href="./agregar.php" class="btn btn-warning">Agregar nuevo animal</a></center>
                
                </div>
            </div>
         </div>
     </div>
 </div>
    



<?php include "./footer.php"?>