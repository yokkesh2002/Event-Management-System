<!DOCTYPE html>                                               
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rays Coding :- PHP Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css2/style2.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h4 class="text-center text-light">CREATE CLUBS</h4>
                    </div>
                    <div class="card-body">
                        <form action="insert2.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="clubname" class="form-label">Club Name</label>
                                        <input type="text" class="form-control" id="clubname" name="club_name" placeholder="Enter Club Name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="clubemail" class="form-label">Club Email</label>
                                        <input type="email" class="form-control" id="clubemail" name="club_email" placeholder="Enter Club Email" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="clubdescription" class="form-label">Club Description</label>
                                        <input type="text" class="form-control" id="clubdescription" name="club_description" placeholder="Enter Club Description" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="clublogo" class="form-label">Club logo</label>
                                        <input type="file" class="form-control" id="clublogo" name="club_logo" autocomplete="off" value="">
                                        <img src='profiles2/<?php echo $selected_fetch_data['club_logo']?>'>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="clubcategory" class="form-label">Club Category</label>
                                        <input type="text" class="form-control" id="clubcategory" name="club_category" placeholder="Club Category" autocomplete="off">
                                        <select id="clubcategory" name="club_category" required>
                                        <option value="">-- Select Category --</option>
                                        <option value="Academic">Academic</option>
                                        <option value="Social">Social</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Other">Other</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="clubfounded" class="form-label">Club Founded</label>
                                        <input type="text" class="form-control" id="clubfounded" name="club_founded" placeholder="Club Founded" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="clubmembership" class="form-label">Club Membership</label>
                                        <input type="text" class="form-control" id="clubmembership" name="club_membership" placeholder="Enter Club Membership" autocomplete="off">
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