<?php
//ลบแล้วก็เลื่อน ต าแหน่งอาร์เรย์
$a=array ("Beer","Bom","Wat");
while (count($a))
{
$value =array_shift($a);
echo"ลบ".$value."<br>\n";
echo "มีสมาชิกทั้งหมด".count($a)." ค่า อยู่ในอาร์เรย์ \$a<br>\n";
print_r($a);
Echo '<br>';
}
?>