<?php 
class lote{
    private $ID_Lote; 
    private $Fecha_vencimiento; 
    private $provedorID; 
    private $Stock; 
    private $IdProducto; 

 


    public function readLote()
    {
        
        $sql="SELECT * FROM lote";
        
        return $sql;
    }
    public function CrearLote($Fecha_vencimiento,$provedorID,$Stock,$IdProducto)
    {
       
       
        
        $this->Fecha_vencimiento=$Fecha_vencimiento;
        $this->provedorID=$provedorID;
        $this->Stock=$Stock;
        $this->IdProducto=$IdProducto;

  
          $sql ="INSERT INTO `lote`(`Fecha_vencimiento`,`provedorID`,`Stock`,`IdProducto`) 
          VALUES ('$this->Fecha_vencimiento', $this->provedorID, $this->Stock,$this->IdProducto)";
          
          
          return $sql;
    }

    public function modificarLote($ID_Lote,$Fecha_vencimiento,$provedorID,$Stock,$IdProducto)
    {
        $this->ID_Lote=$ID_Lote;
        $this->Fecha_vencimiento=$Fecha_vencimiento;
        $this->provedorID=$provedorID;
        $this->Stock=$Stock;
        $this->IdProducto=$IdProducto;
        
        $sql = "UPDATE `lote` SET `Fecha_vencimiento`='$this->Fecha_vencimiento',
        `provedorID`=$this->provedorID,`Stock`=$this->Stock
        ,`IdProducto`=$this->IdProducto WHERE `ID_Lote`=$this->ID_Lote";


        
        
         return $sql;
    }
    public function EliminarLote($ID_Lote)
    {
        $this->ID_Lote=$ID_Lote;
        
        $sql="DELETE FROM lote WHERE ID_Lote=$this->ID_Lote";
        return $sql;
       
    }
    public function consultarLote($ID_Lote)
    {
        
        $this->ID_Lote=$ID_Lote;
        
        
        $sql="SELECT * FROM lote WHERE `ID_Lote`=$this->ID_Lote";
        return $sql;
       
    }

    public function busqueda($busqueda){
        $this->busqueda=$busqueda;

        $sql = "SELECT * FROM lote WHERE 
        `ID_Lote` LIKE '%$busqueda%' ";
        
        return $sql;
    }
}



?>