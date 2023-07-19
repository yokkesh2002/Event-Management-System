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
                    <div class="card-header bg-dark">
                        <h4 class="text-center text-light">CREATE EVENTS</h4>
                    </div>
                    <div class="card-body">
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="eventname" class="form-label">Event Name</label>
                                        <input type="text" class="form-control" id="eventname" name="event_name" placeholder="Enter Event Name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="eventlocation" class="form-label">Event Location</label>
                                        <input type="text" class="form-control" id="eventlocation" name="event_location" placeholder="Enter Event Location" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="eventtime" class="form-label">Event Time</label>
                                        <input type="text" class="form-control" id="eventtime" name="event_time" placeholder="Enter Event Time" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="userprofile" class="form-label">Profile</label>
                                        <input type="file" class="form-control" id="userprofile" name="user_profile" autocomplete="off" value="">
                                        <img src='profiles/<?php echo $selected_fetch_data['user_profile']?>'>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="startdate" class="form-label">Start Date</label>
                                        <input type="datetime-local" class="form-control" id="startdate" name="start_date" placeholder=" Start Date" autocomplete="off">
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="enddate" class="form-label">End Date</label>
                                        <input type="datetime-local" class="form-control" id="enddate" name="end_date" placeholder=" End Date" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="costcompensation" class="form-label">Cost Compensation</label>
                                        <input type="text" class="form-control" id="costcompensation" name="cost_compensation" placeholder="Enter Cost Compensation" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <button type="submit" name="submit_btn" class="btn bg-dark text-light submit_button"><b>Submit</b></button>
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