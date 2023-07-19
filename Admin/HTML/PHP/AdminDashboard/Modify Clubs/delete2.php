<?php

    require('connection2/conn2.php');
    $get_id = $_GET['id'];   
    $delete_data= "DELETE FROM `middle_table` WHERE `id1` = $get_id ";
    $delete_data_query = mysqli_query($conn ,$delete_data);
    // print_r($delete_data);
    if($delete_data_query)
    {
        header('location:imp2.php');
    }

    // PHP crud operation is complete  
?>