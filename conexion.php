<?php
    class Conexion{
        private $host="localhost";
        private $db="ottos_26955712_fandub_varios";
        private $user="ottos_26955712";
        private $password="fandub2018";
        private $connect;
    }

    public function_construct() {
        $connectionString="mysql:hos".$this->host.";dbname=".$this->db.";charset=utf8";
        try {
            $this->conect=new PDO ($connectionString,$this->user,$this->password);
            $this->conect->setAttribute(PDO: :ATTR_ERRMODE, PDO ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            $this->conect='Error de conexion';
            echo "ERROR: ".$e->getMessage();
        }
    }
    connect=new Conexion();
?>