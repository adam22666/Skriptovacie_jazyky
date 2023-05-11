<?php
require('../Database.php');
require('../User.php');
$db =  new Database();
if(isset($_POST['add_user'])){
    $users = $User->get_users();
    $data = [
        'user_name' => $_POST["user_name"],
        'user_email' => $_POST["user_email"],
        'user_password' => $_POST["user_password"],
    ];
    if(empty($data['user_name'])||empty($data['user_email'])|| empty($data['user_password'])){
            echo "Všetky polia musia byť vyplnené";
    }

    //polia sú vyplnené
else{
    foreach($users as $user){
        //ak email co som zadal sa už nachádza v databáze, nedovolím použivateľovi zaregistrovať sa
        if($user->user_email==$data['user_email']){
            echo 'User so zadaným emailom už existuje';
        }
        else{
            try{
                $query = "INSERT INTO users (user_name, user_email, user_password) VALUES (:user_name, :user_email, :user_password)";
                $query_run = $db->conn->prepare($query);
                $query_run->execute($data);
                header("Location: ../../regdone.php");
            }catch(PDOException $e){
                echo $e->getMessage();
            }


        }
    }
}
}
?>