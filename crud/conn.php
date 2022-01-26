<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'crud');

if($con){
    echo "Connected";
}else{
    echo "Failed to Connect Database";
}

?>