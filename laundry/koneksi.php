<?php
//                     HOST     USERNAME PASSWORD NAMA DATABASE
$conn=mysqli_connect('localhost','root','','laundry');
/* check connection */
if (mysqli_connect_errno()) {
    printf("GAGAL: %s\n", mysqli_connect_error());
    exit();
}
?>