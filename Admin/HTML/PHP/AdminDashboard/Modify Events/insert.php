<?php
    require_once('connection/conn.php');
    if(isset($_POST['submit_btn']))
    {
        $event_name = $_POST['event_name'];
        $event_location= $_POST['event_location'];
        $event_time = $_POST['event_time'];
        $user_profile = $_FILES['user_profile']['name'];
        $profile_temp = $_FILES['user_profile']['tmp_name'];
        $profile_location = 'profiles/'.$user_profile;
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $cost_compensation = $_POST['cost_compensation'];
        if($start_date != $end_date)
        {
            

            $insert_data = "INSERT INTO `simple_table`(`event_name`, `event_location`, `event_time`, `user_profile`, `start_date`, `end_date`, `cost_compensation`) VALUES ('$event_name', '$event_location', '$event_time', '$user_profile', '$start_date', '$end_date', $cost_compensation)";
            
            $insert_query = mysqli_query($conn,$insert_data);
            
            if($insert_query)
            {
                
                header('location:imp.php');
            }
            else
            {
                echo "<script>alert('Data Not Insert.'); window.history.back();</script>";
            }
        }
        else
        {
            echo "<script>alert('Both Dates Are Match'); window.history.back();</script>";
        }
    }
?>