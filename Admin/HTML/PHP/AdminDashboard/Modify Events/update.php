
    File Name :- update.php 

    <?php
    require('connection/conn.php'); 
    if(isset($_POST['update_btn']))
    {
        $user_id = $_POST['user_id'];
        $event_name = $_POST['event_name'];
        $event_location = $_POST['event_location'];
        $event_time = $_POST['event_time'];
        $user_profile = $_FILES['user_profile']['name'];
        $profile_temp = $_FILES['user_profile']['tmp_name'];
        $profile_location = 'profiles/'.$user_profile;
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $cost_compensation = $_POST['cost_compensation'];
        if(isset($user_id))
        {
            if($start_date !== $end_date)
            {
                if($profile != '')
                {
                    $update_date = "UPDATE `simple_table` SET `event_name`='$event_name',`event_location`='$event_location',`event_time`='$event_time',`user_profile`='$user_profile',`start_date`='$start_date',`end_date`='$end_date',`cost_compensation`='$cost_compensation'  WHERE id = $user_id";
                    $update_date_query = mysqli_query($conn ,$update_date) ;
                    if($update_date_query)
                    {
                        move_uploaded_file($profile_temp, $profile_location);
                        header('location:imp.php');
                    }
                    else
                    {
                        echo "<script>alert('Data Not update Successfully'); window.history.back();</script>";
                    }
                }
                else
                {
                    $update_date = "UPDATE `simple_table` SET `event_name`='$event_name',`event_location`='$event_location',`event_time`='$event_time',`start_date`='$start_date',`end_date`='$end_date',`cost_compensation`='$cost_compensation'  WHERE id = $user_id";
                    $update_date_query = mysqli_query($conn ,$update_date) ;
                    if($update_date_query)
                    {
                        move_uploaded_file($profile_temp, $profile_location);
                        header('location:imp.php');
                    }
                    else
                    {
                        echo "<script>alert('Data Not update Successfully'); window.history.back();</script>";
                    }
                }

            }
            else
            {
                echo "<script>alert('Dates Are Match'); window.history.back();</script>";
            }
        }
    }

    ?>