<title>Decode</title>
<p>Decoding JSON data di PHP</p>
<?php
//menggunakan default json_decode()
$nilai = '{"Muslich":85,"Tomi":87,"Kaka":86,"Dimas":87,"Helmi":86,"Zainul":88,"Fathur":87}';
var_dump(json_decode($nilai));
echo "<hr>";
//menerima nilai bolean (true)
$nilaii = '{"Muslich":85,"Tomi":87,"Kaka":86,"Dimas":87,"Helmi":86,"Zainul":88,"Fathur":87}';
var_dump(json_decode($nilaii, true));
?>