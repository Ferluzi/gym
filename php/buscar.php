<?php
sleep(1);
require_once('fc.php');
sleep(2);

        $search ="";
        if (isst($_POST['search'])){
            $search= $_POST['search'];
            
        }

$consulta="SELECT * FROM user WHERE rut LIKE '%".$search."%' OR name like '%".$search."%' ORDER by created_at LIMIT 5 ";
    $resultado = $con->query($consulta);
    $fila = mysql_fetch_assoc($resultado);
    $total = mysql_num_rows($resultado);
?>

<?php if ($total>0 && $search!='') { ?> 
    <h2 class="text-success">Resultado de la busqueda</h2>
    <?php do { ?>
        <div class="art">
            <h3 class="text-success"><?php echo $fila['nombre']?></h3> <br>
            <h3 class="text-info"><?php echo $fila['id'?>]</h3>
        </div>
        <?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php } 

elseif ($total>0 && == '') echo '<h2 class="text-success" ingrese un parametro de busqueda </h2>';
else echo '<h2 class="text-warning"> NO se han encontrado registros </h2>';


blaaa
