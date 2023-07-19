<?php
    require_once('connection/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rays Coding :- PHP Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-dark d-flex justify-content-between">
                        <h3 class="text-align: center text-light">ALL EVENTS</h3>
                        
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S No</th>
                                    <th>Event Name</th>
                                    <th>Event Location</th>
                                    <th>Event Time</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Cost Compensation</th>
                                    <th>Event Logo</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    $select_data = "SELECT * FROM `simple_table`";
                                    $select_query = mysqli_query($conn, $select_data);
                                    $rows = mysqli_num_rows($select_query);
                                    if(mysqli_num_rows($select_query)>0)
                                    {
                                        while($row_data = mysqli_fetch_array($select_query))
                                        {
                                            ?>
                                                <tr>
                                                

                                                    <td><?php echo $row_data['id']?></td>
                                                    <td><?php echo $row_data['event_name']?></td>
                                                    <td><?php echo $row_data['event_location']?></td>
                                                    <td><?php echo $row_data['event_time']?></td>
                                                    <td><?php echo $row_data['start_date']?></td>
                                                    <td><?php echo $row_data['end_date']?></td>
                                                    <td><?php echo $row_data['cost_compensation']?></td>

                                                    <td><img src="profiles/<?php if(isset($row_data['user_profile'])){echo $row_data['user_profile']; }?>" alt="user_profile" width='120' height='120'></td>
                                                    
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>