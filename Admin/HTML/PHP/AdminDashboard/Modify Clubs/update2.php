
    File Name :- update.php 

    <?php
    require('connection2/conn2.php'); 
    if(isset($_POST['update_btn']))
    {
        $user_id = $_POST['id1'];
        $club_name = $_POST['club_name'];
        $club_email = $_POST['club_email'];
        $club_description = $_POST['club_description'];
        $club_logo = $_FILES['club_logo']['name'];
        $profile_temp = $_FILES['club_logo']['tmp_name'];
        $profile_location = 'profiles2/'.$club_logo;
        $club_category = $_POST['club_category'];
        $club_founded = $_POST['club_founded'];
        $club_membership = $_POST['club_membership'];
        if(isset($user_id))
        {
            if($club_category !== $club_founded)
            {
                if($club_logo != '')
                {
                    $update_date = "UPDATE `middle_table` SET `club_name`='$club_name',`club_email`='$club_email',`club_description`='$club_description',`club_logo`='$club_logo',`club_category`='$club_category',`club_founded`='$club_founded',`club_membership`='$club_membership'  WHERE id1 = $user_id";
                    $update_date_query = mysqli_query($conn ,$update_date) ;
                    if($update_date_query)
                    {
                        move_uploaded_file($profile_tmp, $profile_location);
                        header('location:imp2.php');
                    }
                    else
                    {
                        echo "<script>alert('Data Not update Successfully'); window.history.back();</script>";
                    }
                }
                else
                {
                    $update_date = "UPDATE `middle_table` SET `club_name`='$club_name',`club_email`='$club_email',`club_description`='$club_description',`club_category`='$club_category',`club_founded`='$club_founded',`club_membership`='$club_membership'  WHERE id1 = $user_id";
                    $update_date_query = mysqli_query($conn ,$update_date) ;
                    if($update_date_query)
                    {
                        move_uploaded_file($profile_temp, $profile_location);
                        header('location:imp2.php');
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