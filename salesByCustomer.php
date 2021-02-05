
<?php
require_once "koolreport/core/autoload.php";
use \koolreport\processes\Group;
use \koolreport\processes\Sort;
use \koolreport\processes\Limit;
use \koolreport\processes\Filter;

class SalesByCustomer extends \koolreport\KoolReport
{
   
    public function settings()
    {
        return array(
            "dataSources"=>array(
                "sales"=>array(
                    "connectionString"=>"mysql:host=localhost;dbname=db_ordenventa",
                    "username"=>"root",
                    "password"=>"",
                    "charset"=>"utf8"
                )
            )
        );
    }

    public function setup()
    {

     
         $this->src('sales')
        ->query("SELECT * FROM orden_v")   
        ->pipe($this->dataStore('sales_by_customer'));  

        
        $this->src('sales')
        ->query("SELECT * FROM d_cliente")   
        ->pipe($this->dataStore('direccion_cliente'));  
    }
}