<?php
require('../config.php');

$db =  new Database();
$users = $User->get_users();
$found = false;
if(isset($_POST['add_user'])){
    $pass = $_POST["user_password1"];
    $data = [
        'user_name' => $_POST["user_name"],
        'user_email' => $_POST["user_email"],
    ];
    $password = $_POST["user_password"];
    if(empty($data["user_name"]) || empty($data["user_email"]) || empty($password["user_password"]) || empty($pass["user_password1"])){
      echo 'All fields must be filled.';
    }
    if($password["user_password"]!=$pass["user_password1"]){
        echo 'Password dont match. Try again.';
      }
    else{
        foreach($users as $user){
            if($user->user_email==$data['user_email']){
                $found =  true;
            }
        }
        if($found==false){
            try{
                $passhash = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO users (user_name, user_email, user_password) VALUES (?, ?, ?)";
                $query_run = $db->conn->prepare($query);       
                $query_run->execute(array($data["user_name"], $data["user_email"], $passhash ));
                header("Location: ../../regdone.php");
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }else{
            echo 'user already exists!';
        }
    }

}

?>