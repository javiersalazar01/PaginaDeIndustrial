<!DOCTYPE html>
<html>
  <?php 
   include 'conexion.php';
    include 'header.php';

   ?>
<style type="text/css">
body{

  color: black;
}
body table th{
  text-align: center;
}
body table td{
 vertical-align: center;
}

body .container{
  margin-left: 10px;
}

</style>
<div class="container">
<h1 class="text-center titulos">LISTADO DE MAESTROS</h1>
<table class="table table-hover table-bordered table-striped">
    <thead>
      <tr>
        <th>Docente</th>
        <th>Correo Electronico</th>
        <th>Cubiculo</th>
        </tr>
    </thead>
    <tbody>
<?php 
$registros=28;
  @$pagina = $_GET ['pagina'];

if (!isset($pagina))
{
$pagina = 1;
$inicio = 0;
}
else
{
$inicio = ($pagina-1) * $registros;
} 
  $result = "SELECT * FROM maestros ORDER BY name asc limit ".$inicio." , ".$registros." ";
  $cad = mysqli_query($conn,$result) or die ( 'error al listar, $pegar' .mysqli_error($conn)); 
  //calculamos las paginas a mostrar

$contar = "SELECT * FROM maestros";
$contarok = mysqli_query($conn, $contar);
$total_registros = mysqli_num_rows($contarok);
//$total_paginas = ($total_registros / $registros);
$total_paginas = ceil($total_registros / $registros); 


  while ($row = mysqli_fetch_array($cad)) {
?>
 <tr> 
   <td align="center"><b><p><?php echo $row['name'] ?></p></b> </td>
  <td align="center"><b><?php echo $row['email'] ?></b></td>
  <td align="center"><b><p><?php echo $row['cubiculo'] ?></p></b> </td>
  </tr>    
        
<?php   
  }
  
echo "<center><p>";

if($total_registros>$registros){
if(($pagina - 1) > 0) {
echo "<span class='pactiva' ><a href='?pagina=".($pagina-1)."' style='color:blue'>&laquo; Anterior</a></span> ";
}
// Numero de paginas a mostrar
$num_paginas=10;
//limitando las paginas mostradas
$pagina_intervalo=ceil($num_paginas/2)-1;

// Calculamos desde que numero de pagina se mostrara
$pagina_desde=$pagina-$pagina_intervalo;
$pagina_hasta=$pagina+$pagina_intervalo;

// Verificar que pagina_desde sea negativo
if($pagina_desde<1){ // le sumamos la cantidad sobrante para mantener el numero de enlaces mostrados $pagina_hasta-=($pagina_desde-1); $pagina_desde=1; } // Verificar que pagina_hasta no sea mayor que paginas_totales if($pagina_hasta>$total_paginas){
$pagina_desde-=($pagina_hasta-$total_paginas);
$pagina_hasta=$total_paginas;
if($pagina_desde<1){
$pagina_desde=1;
}
}

for ($i=$pagina_desde; $i<=$pagina_hasta; $i++){
if ($pagina == $i){
echo "<span class='pnumero' style='color:black' >".$pagina."</span> ";
}else{
echo "<span class='active' ><a style='color:blue' href='?pagina=$i'>$i</a></span> ";
}
}

if(($pagina + 1)<=$total_paginas) {
echo " <span class='pactiva'><a style='color:blue' href='?pagina=".($pagina+1)."'>Siguiente &raquo;</a></span>";
}
}

echo "</p></center>";
?>
</tbody>
  </table>
</div>
  <?php 
    include "footer.php";
   ?>


</body>
</html>