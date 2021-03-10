<?php //เรียงข้อมูล อาร์เรย์
$a = array("Beer", "Bom", "Wat", "mia", "earth");
$b = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
$c = array("b" => 1, "a" => 2, "d" => 3, "e" => 4, "c" => 5);
shuffle($a);
foreach ($a as $value) {
    echo $value . "<br>"; // แสดง $a
}
sort($a); //เรียงข้อมูลในอาร์เรย์
asort($b); //เรียงข้อมูลในอารร์เรย์แบบจับคู่ เรียงตาม Value
ksort($c); // เรียงข้อมูลในอาร์เรย์ แบบจับคู่ เรียงตาม keyforeach ($a as $value)
foreach ($a as $value) {
    echo $value . "<br>\n"; // แสดง $a
}
foreach ($b as $key => $val) {
    echo "$key=$val<br>\n"; //แสดง $b
}
foreach ($c as $key => $value) {
    echo "$key=$value<br>\n"; //แสดง $c
}
echo "<hr>";
?>