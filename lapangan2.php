<?php
 
$connect=mysqli_connect("localhost", "id12804402_istna", "tigapuluhjuli1999", "id12804402_praktek_kerjaku");
 
$query = "SELECT * from Praktek ";
$result = mysqli_query($connect,$query) or die(mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(
        
    "Pemesan" => $row["Pemesan"],
    "User" => $row["User"], 
 
    "Lapangan" => $row["Lapangan"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA PRAKTEK\":" . $data . "}";
?>
