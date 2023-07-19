<?php
        require('connection/conn.php');
        $get_id =  $_GET['id'];
        $select_data_of_user= "SELECT * FROM `simple_table` WHERE id = $get_id";
        $select_data_query = mysqli_query($conn, $select_data_of_user);
        $selected_fetch_data = mysqli_fetch_array($select_data_query);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rays Coding :- PHP Crud Operation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-dark d-flex justify-content-between">
                            <h4 class="text-center text-light">EDIT AND MODIFY EVENTS</h4>
                            <a href="imp.php" class="btn bg-warning text-dark"><b>Data List</b></a>
                        </div>
                        <div class="card-body">
                            <form action="update.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="user_id" id="" value="<?php echo $selected_fetch_data['id']?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="eventname" class="form-label">Event Name</label>
                                            <input type="text" class="form-control" id="eventname" name="event_name" placeholder="Enter Event Name" autocomplete="off" value="<?php echo $selected_fetch_data['event_name']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="eventlocation" class="form-label">Event Location</label>
                                            <input type="text" class="form-control" id="eventlocation" name="event_location" placeholder="Enter Event Location" autocomplete="off" value="<?php echo $selected_fetch_data['event_location']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="eventtime" class="form-label">Event Time</label>
                                            <input type="text" class="form-control" id="eventtime" name="event_time" placeholder="Enter Event Time" autocomplete="off" value="<?php echo $selected_fetch_data['event_time']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userprofile" class="form-label">Profile</label>
                                            <input type="file" class="form-control" id="formfile" name="user_profile" autocomplete="off" value="">
                                            <img src='profiles/<?php echo $selected_fetch_data['user_profile']?>'>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="startdate" class="form-label">Start Date</label>
                                            <input type="datetime-local" class="form-control" id="startdate" name="start_date" placeholder=" Start Date" autocomplete="off" value="<?php echo $selected_fetch_data['start_date']?>">
                                        </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="enddate" class="form-label">End Date</label>
                                            <input type="datetime-local" class="form-control" id="enddate" name="end_date" placeholder="End Date" autocomplete="off" value="<?php echo $selected_fetch_data['end_date']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="costcompensation" class="form-label">Cost Compensation</label>
                                            <input type="text" class="form-control" id="costcompensation" name="cost_compensation" placeholder="Enter Cost Compensation" autocomplete="off" value="<?php echo $selected_fetch_data['cost_compensation']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <button type="submit" name="update_btn" class="btn bg-dark text-light submit_button"><b>Update</b></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>


