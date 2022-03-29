<?php 
class provedor{
    private $NiT_provedor; 
    private $Nombre; 
    private $Telefono; 
    private $Correo; 
    private $Dirrecion; 

  


    public function readProvedor()
    {
        
        $sql="SELECT * FROM provedor";
        
        return $sql;
    }
    public function crearProvedor($Nombre,$Telefono,$Correo,$Dirrecion)
    {
       
       
        
        $this->Nombre=$Nombre;
        $this->Telefono=$Telefono;
        $this->Correo=$Correo;
        $this->Dirrecion=$Dirrecion;

  
          $sql ="INSERT INTO `provedor`(`Nombre`, `Telefono`, `Correo`, `Dirrecion`) VALUES ('$Nombre','$Telefono','$Correo','$Dirrecion')";
          
          
          return $sql;
    }

    public function modificarProvedor($NiT_provedor,$Nombre,$Telefono,$Correo,$Dirrecion)
    {
        $this->NiT_provedo=$NiT_provedor;
        $this->Nombre=$Nombre;
        $this->Telefono=$Telefono;
        $this->Correo=$Correo;
        $this->Dirrecion=$Dirrecion;


        $sql = "UPDATE `provedor` SET `Nombre`='$this->Nombre',`Telefono`='$this->Telefono',`Correo`='$this->Correo',
        `Dirrecion`='$this->Dirrecion' WHERE `NiT_provedor`=$this->NiT_provedo";

         return $sql;
    }
    public function eliminarProvedor($NiT_provedor)
    {
        $this->NiT_provedo=$NiT_provedor;
        
        $sql="DELETE FROM `provedor` WHERE `NiT_provedor`=$this->NiT_provedo";
        return $sql;
       
    }
    public function consultarProvedor($NiT_provedor)
    {
        
        $this->NiT_provedo=$NiT_provedor;
        
        
        $sql="SELECT * FROM `provedor` WHERE `NiT_provedor`=$this->NiT_provedo";
        return $sql;
       
    }

    public function busqueda($busqueda){
        $this->busqueda=$busqueda;

        $sql = "SELECT * FROM `provedor` WHERE 
        `Nombre` LIKE '%$busqueda%' ";
        
        return $sql;
    }
}



?>