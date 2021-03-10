<?php
$a=array ("Beer","Bom","Wat");
$total = array_push ($a ,22,23,24);
echo "มีสมาชิกทั้งหมด $total ตัว ในอาเรย์ \$a<br>\n";
foreach ($a as $value)
{
echo $value."\n";
//แสดงผลข้อมูล มีสมาชิกทั้งหมด 6 ตัว ในอาร์เรย์ $a
//แสดง คือ Beer Bom Wat 22 23 24
}
?>