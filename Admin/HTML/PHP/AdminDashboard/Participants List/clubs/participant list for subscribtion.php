<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Style HTML Tables with CSS</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link  rel="stylesheet" href="/assets/dcode.css">
    <link rel="stylesheet" href="css/main2.css">
    <script src="table2excel.js"></script>
</head>
<body>
    <h1>SUBSCRIPTION LIST</h1>
    <button id="export">Export to excel</button>

    <hr>
    
    <table class="content-table">
        <thead>
          <tr>
            <th>S No</th>
            <th> Name</th>
            <th>Email</th>
            <th>Club Name</th>
            <th>Status</th>
         </tr>
         </thead>


        <tbody>
          <?php
          $host = "localhost";
          $dbusername = "root";
          $dbpassword = "";
          $dbname = "club";


          // Create connection
          $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


          if($conn->connect_error) {
              die("connection failed: " . $conn->connect_error);
          }


          $sql= "SELECT * FROM subscribe";
          $result = $conn->query($sql);

          if(!$result){
              die("Invalid query: " . $conn->error);
          }

          while($row = $result->fetch_assoc()) {
            echo "<tr> 
            <td>" . $row["id_no"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["club_name"] . "</td>
            <td>" . $row["Status"] . "</td>
          </tr>"; 

          }
          
          
          ?>
          </tbody>
      </table>
      <script>
  var table2excel = new Table2Excel();

  document.getElementById('export').addEventListener('click', function() {
    table2excel.export(document.querySelectorAll('table'));
  });
  </script>
</body>
</html>