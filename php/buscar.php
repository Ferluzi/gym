<?php 
sleep(2);
include "fc.php";
require_once('fc.php');
sleep(1);
    $search = '';
if (isset($_POST['search'])){
	$search= $_POST['search'];
}

$rut = 'rut';

// $consulta= "SELECT * FROM $tabla_us WHERE rut LIKE '%".$search."%' OR rut LIKE '%".$search."%' ORDER BY precio LIMIT 5";
$consulta= "SELECT * FROM $tabla_us WHERE rut = $rut";
  $resultado = $con->query($consulta);
  $fila = mysqli_fetch_assoc($resultado);
  $total = mysqli_num_rows($resultado); 

?>
 <?php if ($total>0 && $search!='') { ?>
 	<h2 class="text-success text-center">Resultado de la busqueda</h2>
 	<?php do { ?>

		<table class="table table-striped table-dark table-bordered table-hover">
			<thead>
				<tr>
					<th><h4 class="text-primary">Rut</h4></th>
					<th><h4 class="text-primary">Nombre</h4></th>
					<th><h4 class="text-primary">Ficha</h4></th>
					<th><h4 class="text-primary">Calendario</h4></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $fila['rut']?></td>
					<td><?php echo $fila['name']?></td>
					<td><?php echo $fila['ficha']?>
					<td><input type="datetime-local" name="bdaytime"></td>
					<td><button class="btn btn-info">Guardar</button></td>
				</tr>
			</tbody>
		</table>
 	
 	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?> 
<?php } 

elseif($total>0  && $search == '') echo' <h2 class="text-success"> Ingresa un parametro de busqueda</h2>';
else echo '<h2 class="text-warning"> no se ha encontrado resultados</h2>';

 ?>

