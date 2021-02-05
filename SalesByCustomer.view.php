<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\BarChart;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">  
   
<?php 
$row_0 = $this->dataStore("direccion_cliente")->get(0);
?>
    </p>
   
    <h3 class="mt-4 text-center " >Orden de Venta</h3>
<div class="col-md-12">
Data
</div>


<table class="table table-bordered">
    <tbody>
        <tr>
        <td>
        <h5 class="text-center">Cliente</h5>
    <h6 class="text-center">Datos de Facturacion:</h6>
    <p class="tt">Codigo de Cliente: <span> <?php echo $row_0["id_cliente"];?></span></p>
    <p class="tt">Nombre/Razon Social:</p>
    <p class="tt">Direccion: <?php echo $row_0["direccion"];?></span></p>
    <p class="tt">Colonia: <span><?php echo $row_0["colonia"];?></span> </p>
    <p class="tt">C.p.:  <span><?php echo $row_0["c_p"];?></span> </p>
    <h6 class="text-center">Datos de CXC:</h6>
    <p>Telefono:  <span><?php echo $row_0["telefono"];?></span></p>
        </td> 

    <!-- DIRECCION DE ENTREGA -->
        <td>   
        <h5 class="text-center">Cliente <span><?php echo $row_0["id_cliente"];?></span></h5>
         <h6 class="text-center">Direccion de entrega a:</h6>
         <p>Codigo de Cliente:</p>
         <p>Nombre/Razon Social:</p>
         <p>Direccion: <?php echo $row_0["direccion"];?></p>
         <p>Colonia: <?php echo $row_0["colonia"];?></p>
          <p>C.p.: <?php echo $row_0["c_p"];?></p>

    <h6 class="text-center">Contacto de Entrega:</h6>
    <p>Colonia: <?php echo $row_0["colonia"];?></p>
    <p>C.p.: <?php echo $row_0["c_p"];?> </p>
        </td>
        </tr>
      
    </tbody>
</table>

<?php
Table::create(array(
    "dataStore"=>$this->dataStore('sales_by_customer'),
        "columns"=>array(
            "id_detalle"=>array(
                "label"=>"Id detalle"
            ),
            "numero_p"=>array(
                "label"=>"Codigo Producto"
            ),
            "producto"=>array(
           
                "label"=>"Producto",        
            ),
            "c_ordenada"=>array(
                "label"=>"Cantidad"
            ),
          
            "p_unitario"=>array(
                "label"=>"Precio",
                "prefix"=>"$"
            ),
            "p_descuento"=>array(
                "label"=>"Descuento",
                   "prefix"=>"$"
            ),
            "m-civa"=>array(
                "label"=>"Subtotal",
                "prefix"=>"$"
            ),

        ),
    "cssClass"=>array(
        "table"=>"table table-hover table-bordered"
    )
));
?>

 <table class="table table-hover table-bordered p_final">
   
         <tr>
             <td class="text-center">Subtotal</td>
             <td>1500</td>
         </tr>
         <tr>
            <td class="text-center">%Retencion</td>
             <td>data</td>
         </tr>
         <tr>
            <td class="text-center">Iva</td>
             <td>data</td>
         </tr>
         <tr>
            <td class="text-center">Total</td>
             <td>data</td>
         </tr>
     </tbody>
 </table>

 
 </div>

	    
</body>
</html>

