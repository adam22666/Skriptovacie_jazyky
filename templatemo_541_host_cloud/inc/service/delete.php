<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['delete_services'])){
    print_r("The service has been deleted!");
    try{
        $id = $_POST["delete_services"];
        $sql = $sql = 'DELETE FROM services WHERE id ='.$id;
        $db->conn->exec($sql);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>