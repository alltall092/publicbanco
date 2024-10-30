<?php
if ( ! session_id() ) @ session_start();

$query = "SELECT * FROM session where hash = '{$_SESSION['hash']}'"; 

$result = mysqli_query($con, $query); 

$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) == 0) {
    header("Location: login.html");
    exit();
}