<title>Decode json data & akses </title>
<p>Decode JSON data ke PHP associative array dan PHP object</p>
<?php
$nilai = '{"Muslich":85,"Tomi":87,"Kaka":86,"Dimas":87,"Helmi":86,"Zainul":88,"Fathur":87}';
$arr = json_decode($nilai, true);
// akses nilai dari associative array
echo $arr["Muslich"]. "<br>";
echo $arr["Tomi"]. "<br>";
echo $arr["Kaka"]. "<br>";
echo $arr["Dimas"]. "<br>";
echo $arr["Helmi"]. "<br>";
echo $arr["Zainul"]. "<br>";
echo $arr["Fathur"]. "<br>";
echo "<hr>";
$obj = json_decode($nilai);
// akses nilai dari returned object
echo $obj->Muslich. "<br>";
echo $obj->Tomi. "<br>";
echo $obj->Kaka. "<br>"; 
echo $obj->Dimas. "<br>";
echo $obj->Helmi. "<br>";
echo $obj->Zainul. "<br>";
echo $obj->Fathur. "<br>";
?>
