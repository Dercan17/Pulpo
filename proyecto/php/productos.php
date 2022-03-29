<?php


class productos 
{
    private $Codigo_Producto;
    private $Nombre_Producto;
    private $Precio_Entrada;
    private $Precio_Caja;
    private $Precio_Blister;
    private $Precio_unidad;
    private $concentracion;
    private $TipoID;
    private $LaboratorioID ;
    private $PresentacionID;
   


    public function readProducto()
    {
        
        $sql="SELECT * FROM producto";
        
        return $sql;
    }
    public function CrearProducto($Nombre_Producto,$Precio_Entrada,$Precio_Caja,
    $Precio_Blister,$Precio_unidad,$concentracion,$TipoID,$LaboratorioID,$PresentacionID)
    {
       
       
        $this->Nombre_Producto=$Nombre_Producto;
        $this->Precio_Entrada=$Precio_Entrada;
        $this->Precio_Caja=$Precio_Caja;
        $this->Precio_Blister=$Precio_Blister;
        $this->Precio_unidad=$Precio_unidad;
        $this->concentracion=$concentracion;
        $this->TipoID=$TipoID;
        $this->LaboratorioID=$LaboratorioID;
        $this->PresentacionID=$PresentacionID;

          $sql ="INSERT INTO `producto`( `Nombre_Producto`, `Precio_Entrada`, `Precio_Caja`, `Precio_Blister`, `Precio_unidad`, 
          `concentracion`, `TipoID`, `LaboratorioID`, `PresentacionID`) VALUES ('$this->Nombre_Producto',$this->Precio_Entrada,$this->Precio_Caja,
          $this->Precio_Blister,$this->Precio_unidad,
          '$this->concentracion',$this->TipoID,$this->LaboratorioID,$this->PresentacionID)";
          
          
          return $sql;
    }

    public function ModificarProducto($Codigo_Producto,$Nombre_Producto,$Precio_Entrada,$Precio_Caja,
    $Precio_Blister,$Precio_unidad,$concentracion,$TipoID,$LaboratorioID,$PresentacionID)
    {
        $this->Codigo_Producto=$Codigo_Producto;
        $this->Nombre_Producto=$Nombre_Producto;
        $this->Precio_Entrada=$Precio_Entrada;
        $this->Precio_Caja=$Precio_Caja;
        $this->Precio_Blister=$Precio_Blister;
        $this->Precio_unidad=$Precio_unidad;
        $this->concentracion=$concentracion;
        $this->TipoID=$TipoID;
        $this->LaboratorioID=$LaboratorioID;
        $this->PresentacionID=$PresentacionID;
        
        $sql="UPDATE `producto` SET `Nombre_Producto`='$this->Nombre_Producto',
        `Precio_Entrada`=$this->Precio_Entrada,`Precio_Caja`=$this->Precio_Caja,`Precio_Blister`=$this->Precio_Blister,
        `Precio_unidad`=$this->Precio_unidad,`concentracion`='$this->concentracion',`TipoID`=$this->TipoID,`LaboratorioID`=$this->LaboratorioID,
        `PresentacionID`=$this->PresentacionID WHERE `Codigo_Producto`=$this->Codigo_Producto";
         return $sql;
    }
    public function EliminarProducto($Codigo_Producto)
    {
        $this->Codigo_Producto=$Codigo_Producto;
        
        $sql="DELETE  FROM producto WHERE `Codigo_Producto`=$this->Codigo_Producto";
        return $sql;
       
    }
    public function consultarProducto($Codigo_Producto)
    {
        
        $this->Codigo_Producto=$Codigo_Producto;
        
        $sql="SELECT * FROM producto WHERE Codigo_Producto=$this->Codigo_Producto";
        return $sql;
       
    }

    public function busqueda($busqueda){
        $this->busqueda=$busqueda;
        $sql = ("SELECT * FROM producto WHERE `Nombre_Producto` 
        LIKE '%$this->busqueda%' OR `concentracion` LIKE '%$this->busqueda%' ");
        
        return $sql;
    }



}