<?php

class Conexion
{

    private $_HOST = 'localhost';
    private $_USERNAME = 'root';
    private $_PASSWORD = '';
    private $_DATABASE = 'pulpof';
    private $_con;


    public function __construct()
    {
        $this ->_con = new mysqli($this ->_HOST,
        $this->_USERNAME, $this->_PASSWORD, $this->_DATABASE );


        if ($this->_con->connect_errno) {
            echo "Error de conexion";
        }
    }

    public function login($sql){
     $res = mysqli_query($this->_con,$sql);
     
     
    return $res;

    }
    public function Ingresar($sql)
    {
        $res = mysqli_query($this->_con, $sql);
        
        if ($res) {
            return true;
        } else {
            return false;
        }
        
    }
    public function Mostrar($sql)
    {
        $res = mysqli_query($this->_con, $sql); 
        return $res;
    }


    public function consultar($sql)
    {
        $res = mysqli_query($this->_con, $sql);
        $return = mysqli_fetch_object($res);
        return $return;
    }
    public function modificar($sql)
    {
        $res = mysqli_query($this->_con, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($sql)
    {
        $res = mysqli_query($this->_con, $sql);
        
        
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
    public function buscar($sql)
    {
        $res = mysqli_query($this->_con, $sql);
        
        return $res;
        

    }
}

?>