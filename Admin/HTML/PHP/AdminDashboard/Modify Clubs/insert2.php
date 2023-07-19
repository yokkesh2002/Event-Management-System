<?php
    require_once('connection2/conn2.php');
    if(isset($_POST['submit_btn']))
    {
        $club_name = $_POST['club_name'];
        $club_email= $_POST['club_email'];
        $club_description = $_POST['club_description'];
        $club_logo = $_FILES['club_logo']['name'];
        $profile_temp = $_FILES['club_logo']['tmp_name'];
        $profile_location = 'profiles/'.$club_logo;
        $club_category = $_POST['club_category'];
        $club_founded = $_POST['club_founded'];
        $club_membership = $_POST['club_membership'];
        if($club_category != $club_founded)
        {
            

            $insert_data = "INSERT INTO `middle_table`(`club_name`, `club_email`, `club_description`, `club_logo`, `club_category`, `club_founded`, `club_membership`) VALUES ('$club_name', '$club_email', '$club_description', '$club_logo', '$club_category', '$club_founded', '$club_membership')";
            
            $insert_query = mysqli_query($conn,$insert_data);
            
            if($insert_query)
            {
                
                header('location:imp2.php');
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