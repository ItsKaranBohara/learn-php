<?php

$server ="localhost";
$user = "root";
$password = "";
$db = "signupform";

$conn = mysqli_connect($server,$user,$password,$db);
if($conn){
    ?>
    <script>
        alert("Connection Successful.")
    </script>

    <?php
}else{
    ?>
    <script>
        alert("Connection error!")
    </script>

    <?php
}

?>