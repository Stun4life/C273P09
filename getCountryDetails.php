<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "dbFunctions.php"; 

$countryID = $_GET['id'];
// SQL query returns multiple database records.
$query = "SELECT * FROM statistics WHERE id = $countryID"; 
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $statistics[] = $row;
}
mysqli_close($link);

echo json_encode($statistics);


?>