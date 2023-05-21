<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['add_services'])){
    print_r("The service has been added!");
    $data = [
        'name' => $_POST["name"],
        'description' => $_POST["description"],
        'image' => $_POST["image"],
    ];
    try{
        $query = "INSERT INTO services (name, description, image) VALUES (:name, :description, :image)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }   
}else{
    print_r("xxxxxxxxxxx");
}
?>