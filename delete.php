<?php
//Check if the delete button has been clicked
if (isset($_GET["u_id"])){
    //now receive the ID from the url
    $userid = $_GET["u_id"];
    //Connect to the database to delete
    require_once "db_connection.php";
    //create a delete query
    $deleteQuery = "DELETE FROM `users` WHERE id='$userid'";
    //Finally delete using the mysqli_query()
    $delete = mysqli_query($connection,$deleteQuery);
    //Check if the deletion was successful
    if (isset($delete)){
        //Redirect the user back to your users.php file
        header("location:users,php");
    }else{
        echo "Deletion failed";
    }
}