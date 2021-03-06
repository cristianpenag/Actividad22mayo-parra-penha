<?php include('cabeza.php');?>
<section>
<h2>Asignaturas</h2>
<?php
$asignaturas = array_map('str_getcsv', file('libs/asignaturas.csv'));
array_walk($asignaturas, function(&$a) use ($asignaturas) {$a = array_combine($asignaturas[0], $a);});
array_shift($asignaturas);
$all = count($asignaturas);
?>
<h4>1. Total de créditos para taller y otras asignaturas por nivel de estudio</h4>

<table class="table table-condensed">
  <tr>
    <th>Asignatura</th>
    <th>Creditos</th>
    <th>Periodo</th>
    <th>Regimen</th>
  </tr>
<?php for($a=0; $a < $all; $a++){?>
  <tr>
    <td><?php echo$asignaturas[$a]["asignatura"]?></td>
    <td><?php echo$asignaturas[$a]["creditos"]?></td>
    <td><?php echo$asignaturas[$a]["periodo"]?></td>
    <td><?php echo$asignaturas[$a]["regimen"]?></td>
  </tr>
<?php };?>
</table>


<img src="images/asignaturas.png" class="img-responsive">



<p>Grafico generado en <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>

<h4>2. Relación de créditos y costos</h4>
<p>Reemplace este párrafo con una tabla que relacione los costos de arancel y las cantidades de créditos en cada nivel; de esta manera obtendrá el precio de "un crédito" (1 pto.)</p>

<h5>2.1. Los "costos" de las asignaturas en primer año (plan común):</h5>
<p>Reemplace este párrafo con un gráfico que mejor represente "los precios" de las distintas asignaturas en primer año (1pto.)</p>
<p>Debe usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>

<h5>2.2. Los "costos" de las asignaturas en mención de diseño gráfico:</h5>
<p>Reemplace este párrafo con un gráfico que mejor represente "los precios" de las distintas asignaturas en mención de diseño gráfico (1pto.)</p>
<p>Debe usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>

<h5>2.3. Los "costos" de las asignaturas en mención de diseño industrial:</h5>
<p>Reemplace este párrafo con un gráfico que mejor represente "los precios" de las distintas asignaturas en mención de diseño industrial (1pto.)</p>
<p>Debe usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>

<h4>3. Propongan una visualización</h4>
<p>Reemplace este párrafo por la tabla que corresponda (1pt.)</p>
<p>Reemplace este párrafo por la visualización que corresponda (1pt.)</p>

</section>
<?php include('pie.php');?>
