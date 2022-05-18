<title>Encode</title>
<p>Mata Kuliah yang diikuti dan data nilai tugas</p>
<?php
$matkul = array("Pemrograman WEB","Jaringan Komputer","RPL","Analisis Perancangan Sistem","Matematika Diskrit");
$nilai = array("Muslich"=>85,"Tomi"=>87,"Kaka"=>86,"Dimas"=>87,"Helmi"=>86,"Zainul"=>88,"Fathur"=>87);
echo json_encode($matkul);
echo "<hr>";
echo json_encode($nilai);
?>

