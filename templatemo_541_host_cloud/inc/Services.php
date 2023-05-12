<?php
    
    class Services{
        public $db;
        function __construct()
        {
            $this->db = new Database();
        }

        function get_service(){
            try{
                $query =  $this->db->conn->query("SELECT * FROM services");
                $services = $query->fetchAll(PDO::FETCH_OBJ);
                return $services;
              }catch(PDOException $e){
                print_r($e->getMessage());
            }   
        }
    }
    $Services = new Services();
    
?>