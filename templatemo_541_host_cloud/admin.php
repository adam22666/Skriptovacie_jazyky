<?php
    require('inc/config.php');
    session_start();
    if(!isset($_SESSION['user_name'])){
        header("Location:no-permission.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="container">
    <section>
        <h1>Admin interface</h1>
        <p>Welcome! <?php echo($_SESSION['user_name'][0]->user_name);?></p><br>
        <a href="inc/login/logout.php">Log out</a>
    </section>
    <section>
        <h2>Services</h2>
        <form action="inc/service/insert.php" method="post">
            <input type="text" name="name" placeholder="The name of the service">
            <input type="text" name="description"placeholder="The description of the service">
            <input type="text" name="image"placeholder="Image path">
            <input type="submit" value="Add" name="add_services">
        </form>
        <?php
            $services = $Services->get_service();
            
            echo '<table class="admin-table">';
                foreach($services as $s){
                    echo '<tr>';
                    echo '<td>'.$s->name;'</td>';
                    echo '<td>'.$s->description;'</td>';
                    echo '<td>'.$s->image;'</td>';
                    echo '<td>
                            <form action="inc/service/delete.php" method="post">
                                <button type = "submit" name="delete_services" value="'.$s->id.'"'.'>Delete</button>
                            </form>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td colspan="4">
                            <form action="inc/service/update.php" method="post">
                                <input type="hidden" name="form_id" value="'.$s->id.'"'.'>
                                <input type ="text" name="update_name" placeholder="New name"><br>
                                <input type ="text" name="update_description" placeholder = "New description"><br>
                                <input type ="text" name="update_image" placeholder = "New image"><br>
                                <input type ="submit" name="update_services" value="Save changes">
                            </form>
                        </td>'; 
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>
    
</body>
</html>