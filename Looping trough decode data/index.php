<title>Looping decode data </title>
<p>Loop through the associative array dan PHP object dengan Foreach</p>
<?php
$json = '{"Muslich":85,"Tomi":87,"Kaka":86,"Dimas":87,"Helmi":86,"Zainul":88,"Fathur":87}';
//decode json data ke PHP associative array
$arr = json_decode($json, true);
 
//loop through associative array
foreach($arr as $key=>$value){
    echo $key . " : " . $value . "<br>";
}
echo "<hr>";
//decode json data ke PHP object
$obj = json_decode($json);
 
//loop through object
foreach($obj as $key=>$value){
    echo $key . " : " . $value . "<br>";
}
?>
