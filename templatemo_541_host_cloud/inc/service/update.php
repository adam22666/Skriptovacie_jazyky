<?php
require('../config.php');
$services = $Services->get_service();
$db =  new Database();
if(isset($_POST['update_services'])){

    $data = [
        'id' => $_POST["form_id"],
        'name' => $_POST["update_name"],
        'description' => $_POST["update_description"],
        'image' => $_POST["update_image"],
    ];
    foreach ($services as $s){
        if($s->id==$data['id']){
            if(empty($data['name'])){
                $data['name'] = $s->name;
            }
            if(empty($data['description'])){
                $data['description'] = $s->description;
            }
            if(empty($data['image'])){
                $data['image'] = $s->image;
            }
        }
    }
    try{
        $query =  "UPDATE services SET name=:name, description=:description, image=:image WHERE id=:id";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        if(isset($_SERVER['HTTP_REFFERER'])){
            header("Location: {$_SERVER['HTTP_REFFERER']}");
        }else{
            header("Location: ../../index.php");
        }
        

    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
}else{
    print_r("F");
}
?>