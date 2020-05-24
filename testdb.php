<?php
require_once('employeedb.php');
$query = "SELECT * FROM emppersonaldetails";
$response = @mysqli_query($dbc, $query);
if ($response) {
  while ($row = mysqli_fetch_array($response)) {
    echo $row['E_ID'] . '. ' . $row['F_Name'] . ' ' . $row['L_Name'] . ' ' . $row['Sex'] . ' ' . $row['mail'] . ' ' . $row['DOB'] . ' ' . $row['Phone'] . ' ' . $row['Address'] . '<br>';
    echo '*************************<br>';
  }
}
