<?php 
sleep(2);
require_once('fc.php');
sleep(1);
    $search = '';
if (isset($_POST['search'])){
	$search= $_POST['search'];
	
}
$consulta= "SELECT * FROM user WHERE rut LIKE '%".$search."%' OR nombre LIKE '%".$search."%' ORDER BY created_at LIMIT 5";
  $resultado = $connect->query($consulta);
  $fila = mysqli_fetch_assoc($resultado);
  $total = mysqli_num_rows($resultado); 

?>
 <?php if ($total>0 && $search!='') { ?>
 	<h2 class="text-success">Resultado de la busqueda</h2>
 	<?php do { ?>
 		<div class="art">
 		<h3 class="text-success"><?php echo $fila['nombre']?></h3> <br>

 		<h3 class="text-success"><?php echo $fila['precio']?></h3>
 		</div>
 	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?> 
<?php } 

elseif($total>0  && $search == '') echo' <h2 class="text-success"> Ingresa un parametro de busqueda</h2>';
else echo '<h2 class="text-warning"> no se ha encontrado resultados</h2>';

 ?>

