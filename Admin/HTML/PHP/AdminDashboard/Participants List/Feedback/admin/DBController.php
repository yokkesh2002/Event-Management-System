<?php
require ('config.php');
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "admin_dashboard";
    
    private static $con;
    
    function __construct() {
        $this->con = $this->conectDB();
        if(!empty($this->con)) {
            $this->selectDB();
        }
    }
    
    function conectDB() {
        $con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $con;
    }
    
    function selectDB() {
        mysqli_select_db($this->con, $this->database);
    }
    
    function runQuery($query) {
        $result = mysqli_query($this->con, $query);
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }
    
    function numRows($query) {
        $result  = mysqli_query($this->con, $query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
?>