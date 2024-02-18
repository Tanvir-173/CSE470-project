<?php
$conn = new mysqli("localhost","root","","hms");
$sql = "SELECT count(ssn_number) FROM patient_info";
if ($result=mysqli_query($conn,$sql)) {
    $patient=mysqli_num_rows($result);
}
?>
