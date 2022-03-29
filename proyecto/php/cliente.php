<?php 
 
 class cliente{
    private $Cedula_Cliente;
    private $Nombre; 
    private $Apellidos;
    private $Dirrecion; 
    private $Telefono; 
    private $BarrioID; 
 

  


    public function readCliente()
    {
        
        $sql="SELECT * FROM cliente";
        
        return $sql;

    }

    public function readBarrio()
    {
        
        $sql="SELECT * FROM barrio";
        
        return $sql;
    }
    public function crearCliente($cedula,$Nombre,$apellido,$Telefono,$Dirrecion,$idBarrio)
    {
       
       
        $this->Cedula_Cliente=$cedula;
        $this->Nombre=$Nombre;
        $this->Apellidos=$apellido;
        $this->Dirrecion=$Dirrecion;
        $this->Telefono=$Telefono;
        $this->idBarrio=$idBarrio;
        

  
          $sql ="INSERT INTO `cliente`(`Cedula_Cliente`, `Nombre`, `Apellidos`, `Direccion`, `Telefono`, `BarrioID`) 
          VALUES ('$cedula','$Nombre','$apellido','$Dirrecion','$Telefono',$idBarrio)";
          
          
          return $sql;
    }

    public function modificarCliente($cedula,$Nombre,$apellido,$Telefono,$Dirrecion,$idBarrio)
    {
        $this->Cedula_Cliente=$cedula;
        $this->Nombre=$Nombre;
        $this->Apellidos=$apellido;
        $this->Dirrecion=$Dirrecion;
        $this->Telefono=$Telefono;
        $this->idBarrio=$idBarrio;
        


        $sql = "UPDATE `cliente` SET `Nombre`='$this->Nombre',
        `Apellidos`='$this->Apellidos',`Direccion`='$this->Dirrecion',`Telefono`=$this->Telefono,`BarrioID`=$this->idBarrio 
        WHERE `Cedula_Cliente`=$this->Cedula_Cliente";

         return $sql;
    }
    public function eliminarCliente($cedula)
    {
        $this->Cedula_Cliente=$cedula;
        
        $sql="DELETE FROM `cliente` WHERE `Cedula_Cliente`=$this->Cedula_Cliente";
        return $sql;
       
    }
    public function consultarCliente($cedula)
    {
        
        $this->Cedula_Cliente=$cedula;
        
        
        $sql="SELECT * FROM `cliente` WHERE `Cedula_Cliente`=$this->Cedula_Cliente";
        return $sql;
       
    }

    public function busqueda($busqueda){
        $this->busqueda=$busqueda;

        $sql = "SELECT * FROM `cliente` WHERE `Nombre` LIKE '%$this->busqueda%'  OR `Cedula_Cliente` LIKE '%$this->busqueda%'";
        
        return $sql;
    }

    public function busquedaBarrio($busqueda){
        $this->busqueda=$busqueda;

        $sql = "SELECT * FROM `barrio` WHERE `Nombre_barrio` LIKE '%$this->busqueda%'  OR `Comuna` LIKE '%$this->busqueda%'";
        
        return $sql;
    }
}



?>


