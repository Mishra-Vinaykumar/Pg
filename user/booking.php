<?php
include "conn.php";


if (isset($_GET['Submit'])) {
    $booked = $_GET['booked'];


    $sql = "UPDATE FROM rooms
            SET totalrooms = {$booked}
            WHERE email= '{$email}'"
}
?>