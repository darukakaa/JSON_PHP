<title>Extracting Values from Nested JSON Data </title>

<?php
//pendeefinisian fungsi rekursif untuk mengekstrak value
function printValues($arr) {
    global $count;
    global $values;
    
//cek input array
    if(!is_array($arr)){
        die("ERROR: Input is not an array");
    }
//looping trough array
    foreach($arr as $key=>$value){
        if(is_array($value)){
            printValues($value);
        } else{
            $values[] = $value;
            $count++;
        }
    }
//mengembalikan jumlah total dan value yang ditemukan dalam array
    return array('total' => $count, 'values' => $values);
}
 
//menetapkan json encode string ke variabel php
$json = '{
    "Game": {
        "nama": "Assassins Creed Odyssey",
        "pengembang": "UBISOFT",
        "rilis": 2018,
        "karakter": ["Alexios", "Kassandra", "Phoibe", "Thaletas"],
        "genre": "Open World, RPG, action adventure",
        "harga": {
            "Standar Edition": "Rp619.000", "Deluxe Edition": "Rp775.000", "Gold Edition": "Rp1.030.000","Ultimate Edition": "Rp1.190.000"
        }
    }
}';
//decode JSON data ke format PHP associative array
$arr = json_decode($json, true);
 
//memanggil fungsi dan print semua value
$result = printValues($arr);
echo "<h2>" . $result["total"] . " value(s) ditemukan: </h2>";
echo implode("<br>", $result["values"]);
 
echo "<hr>";
//print value satu-satu
echo $arr["Game"]["nama"] . "<br>";
echo $arr["Game"]["pengembang"] . "<br>";
echo $arr["Game"]["karakter"][1] . "<br>";
echo $arr["Game"]["harga"]["Ultimate Edition"] . "<br>";
?>