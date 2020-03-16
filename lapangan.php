<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['Pemesan'])) {
$url = 'https://istnakhusna30.000webhostapp.com/lapangan1.php';
//$data = "[{\"Pemesan\":\".$_POST['Pemesan'].\",\"User\":\".$_POST['User'].\",\"Lapangan\":\".$_POST['Lapangan'].\"}]";//
$data="{\"Pemesan\":\"".$_POST['Pemesan']."\",\"User\":\"".$_POST['User']."\",\"Lapangan\":\"".$_POST['Lapangan']."\"}";
echo "datanya ".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="lapangan.php">
<table>
<tr>
<td>Pemesan</td>
<td><input type="text" name="Pemesan" id="Pemesan"></td>
</tr>
<tr>
<td>User</td>
<td><input type="text" name="User" id="User"></td>
</tr>
<tr>
<td>Lapangan</td>
<td><input type="text" name="Lapangan" id="Lapangan"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>
