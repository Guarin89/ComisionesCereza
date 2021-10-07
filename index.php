<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Comisiones</title>
</head>
<body>
    <form action="index.php" method="POST">
        <center><h1>COMISIONES TIENDA CEREZA</h1></center>

        <!--<form action="comision1.php" method="POST">
        <div class="form-group">
        <label for="FInicial">Fecha Inicial</label>
        <input type="date" name="FInicial" class="form-control" id="FInicial">
        </div>

        <form action="comision1.php" method="POST">
        <div class="form-group">
        <label for="FFinal">Fecha Final</label>
        <input type="date" name="FFinal" class="form-control" id="FFinal">
        </div>-->
        <section>
        <b>
        <label for="FInicial">Fecha Inicial</label>
        <input type="date" name="FInicial" class="form-control" id="FInicial">
        

        <label for="FFinal">Fecha Final</label>
        <input type="date" name="FFinal" class="form-control" id="FFinal"><br>
</section>
<center>
<div class="dropdown">
<button class="btn dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    FILTRAR VENDEDOR
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">LORENA</a></li>
    <li><a class="dropdown-item" href="#">MARIANA</a></li>
    <li><a class="dropdown-item" href="#">VANESSA</a></li>
  </ul></center>
<br><br>
</div>
<center>
<input type="submit" value="CONSULTAR" class="btn" name="btn_consultar">
<input type="submit" value="DESCARGAR" class="btn" name="btn_descargar">
</center>
    </form>
    
</body>
</html>
<?php
if(isset($_POST['btn_consultar'])){
    $nombre =$_POST['nombre'];
    $existe = 0;
    if($nombre==""){
        echo "Filtrar Vendedor";
    }else{
        $resultados = mysqli_query($conexion, "SELECT * FROM VentasPagas
        WHERE nombre= '$nombre'");
        while($consulta = m($resultados))
        {
            echo "
            <table width = '100%' border = '1'>
            <tr>
            <td><b><center>Nombre</center></b></td>
            <td><b><center>Total Ventas</center></b></td>
            <td><b><center>Total Transacciones</center></b></td>
            </tr>
            <tr>
            <td><center> ".$consulta['nombre']."</center></td>
            <td><center> ".$consulta['TotalVentas']."</center></td>
            <td><center> ".$consulta['TotalTransaccion']."</center></td>
            </tr>
            </table>
            ";
            $existe++;          
        }
        }
      }
 


?>
